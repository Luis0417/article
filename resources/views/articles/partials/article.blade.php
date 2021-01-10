<div class="card shadow">
  <div class="card-body">

  	{{-- Article title  --}}
    <h4 class="card-title">
    	{{ $article->title }}
    </h4>

    {{-- Owner name with created_at --}}
    <small class="text-muted">
    	Posted by: <b>{{ $article->owner->name }}</b> on {{ $article->created_at->format('M d, Y H:i:s') }}
    </small>

    {{-- Article body --}}
    <p class="card-text">
    	{{ $article->body }}
    </p>

    {{-- include all comments related to this article --}}
    <hr>
    @include('articles.partials.comments')
  </div>
</div>