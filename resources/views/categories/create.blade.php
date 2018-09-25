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
                    <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                <form class="" action="{{route('categories.store')}}" method="post" class="form-group">
                    <input type="text" name="libelle" placeholder="libelle" class="form-control">
                    <br/><br/>
                    <input type="text" name="resume"  placeholder="resume" class="form-control">
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
