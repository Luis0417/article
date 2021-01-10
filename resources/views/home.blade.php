@extends('layouts.app')

@section('content')

<div class="clearfix">
    <h2 class="float-left">Articles List</h2>

    {{-- link to create new article --}}
    <a href="{{ route('articles.create') }}" class="btn btn-link float-right">Create New Article</a>
</div>

{{-- List all articles --}}
@forelse ($articles as $article)
    <div class="card m-2 shadow-sm">
        <div class="card-body">

            {{-- article title --}}
            <h4 class="card-title">
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </h4>

            <p class="card-text">
                
                {{-- article owner --}}
                <small class="float-left">By: {{ $article->owner->name }}</small>

                {{-- creation time --}}
                <small class="float-right text-muted">{{ $article->created_at->format('M d, Y h:i A') }}</small>
                
                {{-- check if the signed-in user is the article owner, then show edit article link --}}
                @if (auth()->id() == $article->owner->id )
                    {{-- edit or delete article link --}}
                    <small class="float-right mr-2 ml-2">
                        <a href="{{ route('articles.edit', $article->id) }}" class="float-left">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                    </small>
                @else
                    @hasrole('admin')
                        <small class="float-right mr-2 ml-2">
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm" class="float-right">Delete</button>
                            </form>
                        </small>
                    @endhasrole
                @endif
            </p>
        </div>
    </div>
@empty
    <p>No articles yet, stay tuned!</p>
@endforelse

@endsection
