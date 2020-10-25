@extends('master')
@section('content')

	<div class="container-float container-carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mytemplateassets/images/sea.jpg')}}" class="d-block w-100" alt="...">
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
                    <!-- <img src="img/icon/si-1.png" alt="">-->                
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
        <P>PROGRAM DETAILS</P>
        <hr class="divider-feature">
    </div>
    <div class="container pricing_item">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4 pricing_item">
                <div class="card pricing_item">
                    <img src="{{ asset('mytemplateassets/images/p7.jpg')}}" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Wedding Ceremony</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" class="btn btn-outline-primary btn-block" role="button">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4">
                <div class="card">
                    <img src="{{ asset('mytemplateassets/images/pp.jpg')}}" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Lunch Time</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" class="btn btn-outline-primary btn-block" role="button">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 my-4">
                <div class="card">
                    <img src="{{ asset('mytemplateassets/images/ppp.jpg')}}" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>We Party Time</h5>
                        <p>Enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" class="btn btn-outline-primary btn-block" role="button">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7">
                <form class="py-4 px-5 bg-secondary text-light">
                    <div class="form-row py-4">
                        <!-- <div class="col-lg-12 text-center">
                            <p>LET'T MEET</p>
                        </div> -->
                        <div class="col-lg-12 text-center">
                            <h2>MAKE A REQUEST</h2>
                        </div>
                        <div class="col-lg-12 text-center">
                            <P>Should you have any enquiries about Wedding Planner, please fill in our enquiry form.</P>
                        </div>
                    </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select id="inputState" class="form-control">
                                <option selected>Services</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select id="inputState" class="form-control">
                                <option selected>Guest</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12 col-md-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <button class="btn btn-light">Send A Request</button>
                    </div>
                    
                    
                </form>
            </div>
        </div>   
    </div>

@endsection