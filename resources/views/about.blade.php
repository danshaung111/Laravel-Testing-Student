@extends('master')
@section('content')
	<div class="container container-float mt-5 py-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mytemplateassets/images/sky.jpg')}}" class="d-block w-100" alt="...">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption">
                        <h1>About</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-float">
        <div class="row">
            <div class="col-lg-1">
                
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('mytemplateassets/images/h1.jpg')}}" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <p style="font-size: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p style="font-size: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
@endsection