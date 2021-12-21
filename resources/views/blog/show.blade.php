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

    <hr class="featurette-divider">

    @foreach ($post->comments as $comment)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="comment">
                <span><strong>post by:</strong></span> {{ $comment->author }}
                <span><strong>, on:</strong> {{ date('jS M Y', strtotime($comment->created_at)) }}</span>
            </div>
            <div>
                <label for="comment" class="form-label text-muted">Comment:</label>
                <textarea class="form-control mb-3" id="comment" rows="2">{{ $comment->comment }}</textarea>    
                {{-- <p><strong>Comment:</strong><br/>{{ $comment->comment }}</p> --}}
            </div>    
        </div>
    </div>
    @endforeach

    <hr class="featurette-divider">

    <div class="row">
        <div id="comment-form" class="col-md-8 offset-2">
            <form action="{{ route('comments.add', $post->id) }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-6 pb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="name" class="form-control" name="author" id="" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" placeholder="">
                    </div>
                    <div class="col-md-12 pb-3">
                        <label for="" class="form-label">Comment</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" value="Add Comment">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>   

@endsection