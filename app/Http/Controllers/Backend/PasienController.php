<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Papasien;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function PasienView(){
        return view('backend.pasien.view_pasien')->with(['papasien' => Papasien::all()]);
    }
}
