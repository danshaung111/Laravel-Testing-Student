@extends('master')
@section('content')
	<div class="container container-float mt-5 py-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mytemplateassets/images/sky.jpg')}}" class="d-block w-100" alt="...">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('mytemplateassets/images/sky1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('mytemplateassets/images/sky2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container text-center txt">
        <P>GALLERY & PHOTO</P>
        <hr class="divider-feature">
    </div>

    <div class="container container-fluid">
        <div class="row"> 
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/tsawn.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/p10.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/kachin.png')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/beaut.jpg')}}" style="width:100%">
          </div>
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/h3.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/white.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/cake.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/p7.jpg')}}" style="width:100%">
          </div>  
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/p5.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/flow.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/sea.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/only4.jpg')}}" style="width:100%">
          </div>
        </div>
    </div>
@endsection