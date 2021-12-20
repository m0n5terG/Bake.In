@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div>
                <h1 class="display-3 text-center text-muted" >Create Post</h1>
            </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 

    @if (session()->has('message'))
    <div class="alert alert-success">
        <p>
            {{ session()->get('message') }}
        </p>
    </div>
    @endif 

        <hr class="featurette-divider">
 
            <div class="col-3"></div>
            <div class="col-6">
                <form action="/blog" enctype="multipart/form-data" method="POST">
                    @csrf
                    
                    <div class="form-group row mb-3">
                        <label class="h2" for="title">Title</label>
                        <input class="form-control mb-3" type="text" name="title" id="title">
                        <label class="h3" for="description">Descrition</label>
                        <textarea class="form-control" type="text" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="h5 text-success" for="image">Post picture</label>
                        <input type="file" name="image" id="image">
                    </div>


                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Post!</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection