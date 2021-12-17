@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2021/07/05/01/44/brownies-6387936_1280.jpg" class="img-fluid" />
                
                
                
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#subscribe">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2019/10/11/06/33/brownie-cake-4541198_1280.jpg" class="img-fluid" />


                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/25/12/52/chocolate-cake-4967195_1280.jpg" class="img-fluid" />


                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- START THE FEATURETTES -->

    <div class="container marketing">

    <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2 align-self-center">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1 overflow-auto">
                <img src="https://cdn.pixabay.com/photo/2014/11/28/08/03/brownie-548591_1280.jpg" width="500" alt="">
            </div>
        </div>  
    </div>
    
    <div class="container mw-100 bg-dark mt-5">
        <div class="row text-center text-uppercase text-light p-5">
            <h2 class="fw-bold h2 opacity-50">
            My Specialties ...
            </h2>
            <span class="fw-bolder h2">
            Brownies
            </span>
            <span class="fw-bolder h3">
            Biscuits
            </span>
            <span class="fw-bolder h4">
            BB-Bons
            </span>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center text-uppercase mt-5">
            BLOG
        </h4>
    </div>
    <div class="container mb-3 m-auto">
        <div class="row g-0">
            <div class="col-sm-6 bg-warning rounded-start align-items-center" style="width: 500px;">
                <div class="badge text-start px-5 py-2 justify-content-between">
                    <span class="text-muted fw-bold ">Latest Creation</span>
                    <h5 class="py-3 text-wrap">
                        Non mollit consectetur pariatur fugiat occaecat occaecat magna ipsum elit ea exercitation veniam nulla magna. Laborum Lorem exercitation cillum quis Lorem excepteur velit excepteur adipisicing. Incididunt dolor nisi duis nostrud Lorem sunt.
                    </h5>
                    <a class="btn btn-outline-success" href="" class="uppercase bg-transparent font-extrabold">
                        Find Out More
                    </a>
                </div>       
            </div>
            <div class="col-sm-6">
                <img src="https://cdn.pixabay.com/photo/2019/02/25/19/27/brownie-4020349_1280.jpg" class="rounded-end" style="width: 500px;" alt="...">                
            </div>                
        </div>
    </div>
    

        
    
@endsection

