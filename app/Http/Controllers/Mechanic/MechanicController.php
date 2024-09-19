<?php

namespace App\Http\Controllers\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MechanicController extends Controller
{
    public function index(){
        return view('mechanic.pages.mechanic-listing', [
            'mechanics' => Mechanic::all()
        ]);
    }

    public function show($id){
        $mechanicId = Crypt::decrypt($id);

        $mechanic = Mechanic::findOrFail($mechanicId);

        return view('mechanic.pages.mechanic-details', [
            'mechanic' => $mechanic
        ]);
    }

    public function search(Request $request){
        $mechanics = Mechanic::where('town_city', 'like', '%'.$request->mechanic_city.'%')->get();

        return view('mechanic.pages.search', [
            'mechanics' => $mechanics,
            'location' => $request->mechanic_city,
            'search' => $request->mechanic_city,
        ]);
    }
}
