@extends('layouts.app')

@section('content')
<div class="container">
    
    <hr class="featurette-divider">
    <div class="d-grid d-md-block ms-md-3 gap-2 mb-2">
        <form action="{{ route('blog.destroy',$post->id) }}" method="POST"> 
            <a href="/blog/{{ $post->id }}/edit" class="btn btn-secondary btn-sm">Edit</a>

            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </div>
    
    <div class="row featurette">
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
</div>   

@endsection