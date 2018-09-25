@extends('layouts.app')
@section('content')

  @if(count($errors) > 0)
        <div class="alert alert-danger">Erreur de validation<br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="form-group">
            <div class="content">
            	<div class="row">
            		<div class="col-md-6 col-md-offset-3">
                <div class="form-group">
  
    @if($message = Session::get('success'))
    <div class="alert alert-success alert block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message}}</strong></div>
      @endif
                <form  action="{{route('users.store')}}" method="post" class="form-group" enctype="multipart/form-data">
                   <div class="form-group">
                    <input type="text" name="name" placeholder="name" class="form-control">
                </div>
                    
                   <div class="form-group"> 
                   	<input type="text" name="prenom"  placeholder="prenom" class="form-control">

                   </div>
                    <div class="form-group">
                    	<input type="text" name="email"  placeholder="email" class="form-control">
                    </div>
                   <div> 
                   	<input type="password" name="password"  placeholder="password" class="form-control">
                   </div>
                   <div class="form-group"></div>
                   <div> 
                   	{{csrf_field()}}
                   	<input type="file" name="avatar"  class="form-control">
                   </div
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div class="form-group"></div>

                    <div>
                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>              
            </div>
        </div>
    </div>
</div>

@endsection