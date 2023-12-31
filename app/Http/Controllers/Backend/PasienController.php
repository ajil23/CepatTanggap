<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Papasien;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\User;
use App\Exports\PasienExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function PasienView(){
        // $role=Auth::user()->role;
        // if($role=='1'){
        //     return view('admin.index');
        // }
        // else{
        //    return view('pasien');
        // }
        // $email = DB::table('users')->where('role', '0')->value('name');
        return view('backend.pasien.view_pasien')->with(['user' => User::where('role', 0)->get(), User::orderBy('name', 'asc')->get()]);
    }

    public function search(Request $request){
        if($request -> has('search')){
            $user = User::where('name','LIKE','%'.$request->search.'%')->get();
        } else {
            $user = User::all();
        }
        return view('backend.pasien.view_pasien',['user' => $user]);
    }

    public function pasienExport(){
        return Excel::download(new PasienExport, 'Data_Pasien.xlsx');
    }
}
