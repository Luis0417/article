{{-- extends the layouts/app.blade.php --}}
@extends('layouts.app')

@section('content')

	{{-- Start card --}}
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Create new article</h4>
            <div class="card-text">
                @include('articles.partials.create_article')
            </div>
        </div>
    </div>
  {{-- End --}}
    
@endsection