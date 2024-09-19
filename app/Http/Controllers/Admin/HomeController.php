<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.pages.home', [
            'mechanics' => Mechanic::count(),
            'users' => User::count(),
            'reviews' => Review::count(),
        ]);
    }

    public function mechanics(){
        return view('admin.pages.mechanics', [
            'mechanics' => Mechanic::all()
        ]);
    }

    public function users(){
        return view('admin.pages.users', [
            'users' => User::all()
        ]);
    }

    public function reviews(){
        return view('admin.pages.reviews', [
            'reviews' => Review::all()
        ]);
    }
}
