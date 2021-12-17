@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-3 text-muted text-bold text-center">
        Our Creation
    </h1>

    <div class="d-flex justify-content-between py-4 my-4 border-top text-light"></div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2 align-self-center g-md-5">
                <h2 class="featurette-heading">
                    Oh yeah, it’s that good.
                </h2>
                <span class="text-muted fw-light">
                    By <span class="text-bolder fst-italic text-muted">
                    {{-- {{ $post->user->name }} --}}
                {{-- </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }} --}}
                </span>
                <p class="lead">Anim incididunt tempor ut excepteur duis laborum exercitation cillum officia anim. Aute irure veniam eu esse aute dolor nisi. Qui fugiat sint proident elit duis ut fugiat.</p>
            </div>
            <div class="col-md-5 order-md-1 overflow-auto">
                <img src="https://cdn.pixabay.com/photo/2014/11/28/08/03/brownie-548591_1280.jpg" width="500" alt="">
            </div>
        </div>
    </div>  
</div>   

@endsection