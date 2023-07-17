<?php

namespace App\Http\Controllers;

use App\Models\Pambulan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role=='1'){
            return view('admin.index');
        }
        else{
           return view('pasien');
        }

        
    }
}
