<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\PasienAmbulans;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function ambustore(Request $request){
        $datapasien = new PasienAmbulans();
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $tgl = date ("Y-m-d");
    }
}
