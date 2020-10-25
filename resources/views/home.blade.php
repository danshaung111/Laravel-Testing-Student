@extends('master')
@section('content')
    <div class="container-float container-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mytemplateassets/images/kachin1.png')}}" class="d-block w-100 img-fluid" alt="Responsive image">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption hero">
                        <h5>Welcom to Website</h5>
                        <h2 style="letter-spacing: 2px">Plan the perfect wedding</h2>                   
                        <!-- <p style="letter-spacing: 1px">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        <p style="letter-spacing: 1px">Nulla vitae elit libero.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4 text-center txt">
        <p>OUR SERVICE</p>
        <hr class="divider">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-camera fa-5x"></i>
                    <!-- <img src="images/sea.jpg" class="img-fluid py-2" alt=""> -->                
                    <h4>Photos & Video</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-crown fa-5x"></i>
                    <!-- <img src="img/icon/si-2.png" alt=""> -->
                    <h4>Wedding Makeup</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-utensils fa-5x"></i>
                    <!-- <img src="img/icon/si-3.png" alt="">-->                    
                    <h4>Restaurant</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-music fa-5x"></i>
                    <!-- <img src="img/icon/si-4.png" alt="">-->                    
                    <h4>Live Music & DJ</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-birthday-cake fa-5x"></i>
                    <!-- <img src="img/icon/si-5.png" alt="">-->                    
                    <h4>Wedding cake</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services_item">
                    <i class="fas fa-car fa-5x"></i>
                    <!-- <img src="img/icon/si-6.png" alt=""> -->
                    <h4>Honeymoons</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4 text-center txt">
        <P>OUR WEDDING FEATURE</P>
        <hr class="divider-feature">
    </div>

    <div class="container container-fluid">
        <div class="row"> 
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/tsawn.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/p10.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/sea.jpg')}}" style="width:100%" class="mt-4">
          </div>
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/h3.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/white.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/p7.jpg')}}" style="width:100%" class="mt-3">
          </div>  
          <div class="column col-lg-4 col-md-12">
            <img src="{{ asset('mytemplateassets/images/p5.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/rom.png')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/sea.jpg')}}" style="width:100%">
            <img src="{{ asset('mytemplateassets/images/sam.jpg')}}" style="width:100%">
          </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="load__more">
                        <a href="#" class="btn" style="width: 180px; background-color:#808080; color: white ">View more</a>
                    </div>
                </div>
            </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4 px-2">
                <div class="card border-light holiday">
                    <img src="{{ asset('mytemplateassets/images/place.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">LOCATIONS : 08/07/20</small></p>
                        <h5>8 Places to Virtually Travel as You Honeymoon Hunt</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <!-- <a href="#" class="btn btn-outline-danger btn-block" role="button">Detail</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4 px-2">
                <div class="card border-light holiday">
                    <img src="{{ asset('mytemplateassets/images/dry.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">LOCATIONS : 08/07/20</small></p>
                        <h5>Costa Rica's Gorgeous New Glamping Honeymoon</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <!-- <a href="#" class="btn btn-outline-danger btn-block" role="button">Detail</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4 px-2">
                <div class="card border-light holiday">
                    <img src="{{ asset('mytemplateassets/images/japan.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">LOCATIONS : 08/07/20</small></p>
                        <h5>Where to Venture Off the Beaten Path for A Dereamy Japan</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <!-- <a href="#" class="btn btn-outline-danger btn-block" role="button">Detail</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection