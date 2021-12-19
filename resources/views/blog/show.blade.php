@extends('layouts.app')

@section('content')
<div class="container">
    
    <hr class="featurette-divider">
    <div class="d-grid gap-2 d-md-block mb-3 ms-md-3 gap-2">
        <form action="{{ route('blog.destroy',$post->id) }}" method="POST"> 
            <a href="{{ route('blog.edit',$post->id) }}" class="btn btn-secondary btn-sm">Edit</a>

            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </div>
    
    <div class="row featurette">
        <div class="col-md-7 order-md-2 align-self-center g-md-5">
            <h2 class="featurette-heading">
                {{ $post->title }}
            </h2>
            <span class="text-muted fw-light">
                By <span class="text-bolder fst-italic text-muted">
                {{ $post->user->name }}
                </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            <p class="lead">{{$post->description}}</p>
        </div>
        <div class="col-5">
            <img src="{{ asset('images/' . $post->image) }}" class="rounded mw-100">
        </div>
    </div>
</div>   

@endsection