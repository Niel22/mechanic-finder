<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class MechanicController extends Controller
{
    public function index(){
        return view('user.pages.mechanic-listing', [
            'mechanics' => Mechanic::where('state', Auth::guard('web')->user()->state)->where('town_city', Auth::guard('web')->user()->town_city)->get()
        ]);
    }

    public function show($id){
        $mechanicId = Crypt::decrypt($id);

        $mechanic = Mechanic::findOrFail($mechanicId);

        return view('user.pages.mechanic-details', [
            'mechanic' => $mechanic
        ]);
    }

    public function search(Request $request){
        $mechanics = Mechanic::where('town_city', 'like', '%'.$request->mechanic_city.'%')->get();

        return view('user.pages.search', [
            'mechanics' => $mechanics,
            'location' => $request->mechanic_city,
            'search' => $request->mechanic_city,
        ]);
    }
}
