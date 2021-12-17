@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="image">Post a picture</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <div class="form-group row">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                        <label for="body">Descrition</label>
                        <input class="form-control" type="text" name="body" id="body">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Post!</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection