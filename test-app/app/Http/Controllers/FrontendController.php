<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
    return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function price(){
        return view('price');
    }

    public function contact(){
        return view('contact');
    }
}
