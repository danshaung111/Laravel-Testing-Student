<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	return view('welcome');
    }

    public function a($value='')
    {
    	return 'Hello / Route';
    }

    public function testing($value='')
    {
    	return view('testing');
    }

    public function services($value='')
    {
        // return view('services',['name' => 'Dan Shaung']);
        $students = array(
            array('name'=>'mgmg','age'=>26),
            array('name'=>'susu','age'=>23)
        );
        // dd($students);

        return view('services',['students'=>$students]);
    }
}
