@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="pull-left">
                <h2>Tags</h2>
            </div>
             <table class="table table-bordered">
        <tr>
            <th>Libelle</th>
            <th>id</th>
        </tr>
    @foreach ($tags as $tag)
    <tr>
        
        <td>{{$tag->libelle}}</td>
        <td>{{$tag->id}}</td> 
    </tr>
    @endforeach
    </table>
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
                <div class="form-group">

                <form class="" action="{{route('tags.store')}}" method="post" class="form-group">
                    <input type="text" name="libelle" placeholder="libelle" class="form-control">
                    <br/><br/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>              
            </div>
        </div>          
        </div>
    </div>
@endsection