<?php

namespace App\Http\Controllers;

use App\Models\Pambulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');

    }

    // public function index(){
    //     $pambulans = Pambulan::count();


    //     return view('admin.index', compact('pambulans'));
    // }
    
}
