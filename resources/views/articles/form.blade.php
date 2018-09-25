@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <div class="content">
                <div class="form-group">
                    @if(count($errors) > 0)
        <div class="alert alert-danger">Erreur de validation<br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($message = Session::get('success'))
    <div class="alert alert-success alert block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message}}</strong></div>
      @endif
      @if(Session::has('path'))
            <img src="{{ Session::get('path')}}" width="300"/>
      @endif
                <form class="" action="{{route('articles.store')}}" method="post" class="form-group" enctype="multipart/form-data" >
                    <input type="text" name="title" placeholder="title" class="form-control">
                    <br/><br/>
                    <textarea type="text" name="body" placeholder="body" class="form-control"></textarea>
                   <br/><br/>

                    <input type="text" name="id_categorie"  placeholder="id_categorie" class="form-control">
                    <br/><br/>
                    <input type="text" name="id_user"  placeholder="id_user" class="form-control">
                    <br/><br/>

                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    {{csrf_field()}}
                    <tr>
                            <td width="40%" align="right"><label>Choisir un fichier</label></td>
                            <td width="30%">
                            <input type="file" name="image_path"/></td>
                            <td width="30%" align="left">
                    </tr>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                  


                 
            </div>               
            </div>
        </div>
    </div>   
</div>
@endsection
