@extends('layouts.app')

@section('content')
<div class="container">
    <hr class="featurette-divider">

    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
    <div class="d-grid d-md-block ms-md-3 gap-2 mb-2 float-end">
        <form action="{{ route('blog.destroy',$post->id) }}" method="POST"> 
            <a href="/blog/{{ $post->id }}/edit" class="btn btn-secondary btn-sm">Edit</a>

            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
    @endif
    <div class="row featurette mb-5">
        <div class="col-sm-12 col-md-6 order-md-2">
            <h2 class="featurette-heading">
                {{ $post->title }}
            </h2>
            <span class="text-muted fw-light">
                By <span class="text-bolder fst-italic text-muted">
                {{ $post->user->name }}
                </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            <p class="lead mt-sm-0 mt-lg-5">{{$post->description}}</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <img src="{{ asset('images/' . $post->image) }}" class="rounded mw-100">
        </div>
    </div>

    {{-- <div class="row">
        <div id="comment-form" class="col-md-8 offset-2">
            <form action="{{ route('comment.store')}}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="name" class="form-control" name="" id="" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="" id="" placeholder="">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Comment</label>
                        <textarea class="form-control" name="comment" id="" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
</div>   

@endsection