@extends('layouts.app')

@section('content')
<div class="container" style="background-color: blue">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="pull-left">
                <h2>CRUD CATEGORIE</h2>

            </div>
        </div>
            <div  class="col-md-6 col-md-offset-9">
                <a href="{{route('categories.create')}}" class="btn btn-primary">Add</a>
                
            </div>
            <div>
                
            </div>
                    <div class="col-md-8 col-md-offset-2">

             <table class="table table-bordered">
        <tr>
            <th>Libelle</th>
            <th>resume</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($categories as $categorie)
    <tr>
        
        <td>{{ $categorie->libelle}}</td>
        <td>{{ $categorie->resume}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('categories.show',$categorie->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('categories.edit',$categorie->id) }}">Edit</a>
            
        </td>
    </tr>
    @endforeach
    </table> 
        </div>           
        </div>
    </div>
@endsection