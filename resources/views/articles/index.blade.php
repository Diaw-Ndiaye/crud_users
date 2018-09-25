@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD ARTICLES</h2>
            </div>
            <!--<div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> New Article</a>
            </div>-->
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="button">
        <a href="{{route('articles.create')}}" class="btn btn-primary">ADD</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Body</th>
            <th>Categorie</th>
            <th>User</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        
        <td>{{ $article->title}}</td>
        <td>{{ $article->body}}</td>
        <td>{{ $article->id_categorie}}</td>
        <td>{{ $article->id_user}}</td>
        <td>{{ $article->image_path}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
            
        </td>
    </tr>
    @endforeach
    </table>

@endsection