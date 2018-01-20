<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index.home');
    }
    public function location($location){
        return view('frontend.index.location.'.$location);
        
    }

}
