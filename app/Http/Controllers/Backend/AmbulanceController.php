<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\PambulanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Notification;
use App\Models\Pambulan;

class AmbulanceController extends Controller
{
    public function AmbulanceView(){
        return view('backend.ambulance.view_ambulance')->with(['pambulan' => Pambulan::orderBy('id', 'desc')->get()]);
    }

    public function MarkAsRead(){
        $id = request()->input('id');
        if($hasNotification = Notification::find($id)){
            $hasNotification->hasread = 1;
            $hasNotification->save();
        }
        return back();
        // $id = auth()->user()->unreadNotifications[0]->id;
        // auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    }

    public function search(Request $request){
        if($request -> has('search')){
            $pambulans = Pambulan::where('nama','LIKE','%'.$request->search.'%')->get();
        } else {
            $pambulans = Pambulan::all();
        }
        return view('backend.ambulance.view_ambulance',['pambulan' => $pambulans]);
    }

    public function pambulansExport(){
        return Excel::download(new PambulanExport, 'Panggilan_Ambulan.xlsx');
    }
}
