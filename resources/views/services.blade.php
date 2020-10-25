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
    <div class="container">
    	{{-- <h1>{{$name}}</h1> --}}
	@foreach($students as $row)
		<p>Name: {{$row['name']}}</p>
		<p>Age: {{$row['age']}}</p>
	@endforeach
    </div>
	
@endsection