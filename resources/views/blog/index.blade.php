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
            <div class="col-md-6 col-sm-12">
                <h2 class="featurette-heading">
                    {{ $post->title }}
                </h2>
                <span class="text-muted fw-light">
                    By <span class="text-bolder fst-italic text-muted">
                    {{ $post->user->name }}
                    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
                <p class="lead mt-sm-0 mt-lg-5" style="">{{ Illuminate\Support\Str::of($post->description)->words(14)}}</p>
                <a href="/blog/{{ $post->id }}" class="btn btn-lg btn-outline-primary mb-3">Keep Reading</a>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('images/' . $post->image) }}" class="rounded mw-100">
            </div>
        </div>
@endforeach

{{ ($posts->links()) }}
</div>   
@endsection
