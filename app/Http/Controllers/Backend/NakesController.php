<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Panakes;
use Illuminate\Http\Request;
use App\Models\Nakes;

class NakesController extends Controller
{
    public function NakesView(){
        return view('backend.nakes.view_nakes')->with(['panakes' => Panakes::all()]);
    }
}
