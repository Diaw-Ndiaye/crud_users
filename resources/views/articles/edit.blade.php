@extends('layouts.app')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <form action="{{ route('articles.update', ['id' => $article->id]) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Title</label>

                <input type="text" class="form-control col-md-10" id="name" name="title" value="{{ $article->title }}">

                <label for="name" class="control-label col-md-2">Body</label>
                <input type="text" class="form-control col-md-10" id="name" name="body" value="{{ $article->body }}">
                <label for="name" class="control-label col-md-2">Image</label>
                <input type="text" class="form-control col-md-10" id="iamge_path" name="iamge_path" value="{{ $article->image_path }}">
            </div>
            <button type="submit" class="col-md-offset-2 btn btn-raised btn-success">Modifier</button>
        </form>
    </div>

@endsection