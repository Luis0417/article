<form action="{{ route('articles.update', $article->id) }}" method="post">
    @csrf
    @method('PATCH')

    {{-- Article title --}}
    <div class="form-group">
      <label for="title">Article title</label>
      <input type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ $article->title }}"
                placeholder="write article title here.."
                required />

        @if ($errors->has('title'))
            <small class="text-danger">{{ $errors->first('title') }}</small>
        @endif
    </div>
    {{-- End --}}

    {{-- Article body --}}
    <div class="form-group">
      <label for="body">Article body</label>
      <textarea class="form-control"
                name="body"
                id="body"
                rows="5"
                placeholder="write article body here.."
                required
                style="resize: none;">{{ $article->body }}</textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Article</button>
        <a href="{{ route('home') }}" class="btn btn-default">Back</a>
    </div>

</form>