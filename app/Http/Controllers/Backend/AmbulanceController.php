<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pambulan;

class AmbulanceController extends Controller
{
    public function AmbulanceView(){
        return view('backend.ambulance.view_ambulance')->with(['pambulan' => Pambulan::all()]);
    }
}
