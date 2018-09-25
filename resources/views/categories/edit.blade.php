@extends('layouts.app')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <form action="{{ route('categories.update', ['id' => $categorie->id]) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Libelle</label>

                <input type="text" class="form-control col-md-10" id="name" name="name" value="{{ $categorie->libelle }}">

                <label for="name" class="control-label col-md-2">resume</label>
                <input type="text" class="form-control col-md-10" id="name" name="name" value="{{ $categorie->resume }}">
            </div>
            <button type="submit" class="col-md-offset-2 btn btn-raised btn-success">Modifier</button>
        </form>
    </div>

@endsection