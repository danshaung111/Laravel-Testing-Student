<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home($value='')
    {
    	return view('home');
    }
    public function service($value='')
    {
    	return view('service');
    }
    public function gallary($value='')
    {
    	return view('gallary');
    }
    public function blog($value='')
    {
    	return view('blog');
    }
    public function about($value='')
    {
    	return view('about');
    }
    public function contact($value='')
    {
    	return view('contact');
    }
}
