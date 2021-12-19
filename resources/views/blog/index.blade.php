@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-3 text-muted text-bold text-center">
        Our Creation
    </h1>

@if (session()->has('message'))
    <div class="alert alert-info" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

@if (Auth::check())
    <div>
        <a href="/blog/create" class="btn btn-primary btn-sm">Create</a>
    </div>
@endif

@foreach ($posts as $post)
    
    <hr class="featurette-divider">

        <div class="row featurette mb-5 mx-5">
            <div class="col-7">
                <h2 class="featurette-heading">
                    {{ $post->title }}
                </h2>
                <span class="text-muted fw-light">
                    By <span class="text-bolder fst-italic text-muted">
                    {{ $post->user->name }}
                    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
                <p class="lead mb-3">{{$post->description}}</p>
                <a href="/blog/{{ $post->id }}" class="btn btn-lg btn-outline-primary">Keep Reading</a>
            </div>
            <div class="col-5">
                <img src="{{ asset('images/' . $post->image) }}" class="rounded mw-100">
            </div>
        </div>
@endforeach
</div>   
@endsection
