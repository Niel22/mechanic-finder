<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('mechanic.pages.home');
    }

    public function about(){
        return view('mechanic.pages.about');
    }

    public function reviews(){
        return view('mechanic.pages.reviews');
    }

    public function contact(){
        return view('mechanic.pages.contact');
    }
}
