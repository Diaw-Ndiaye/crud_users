@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="pull-left">
                <h2>CRUD USERS</h2>

            </div>
        </div>
            <div  class="col-md-6 col-md-offset-9">
                <a href="{{route('users.index')}}" class="btn btn-primary">Add</a>
                
            </div>
            <div>
                
            </div>
                    <div class="col-md-8 col-md-offset-2">

             <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Password</th>           
            <th>Avatar</th>           
            <th width="200px">Action</th>
        </tr>

    @foreach($users as $user)
    <tr>
        
        <td>{{ $user->name}}</td>
        <td>{{ $user->prenom}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->password}}</td>
        <td>{{ $user->avatar}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('users.show',$users->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
            
        </td>
    </tr>
    @endforeach

    </table> 
        </div>           
        </div>
    </div>
@endsection