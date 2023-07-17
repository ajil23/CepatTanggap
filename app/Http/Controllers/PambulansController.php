<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pambulan;
use App\Models\User;
use App\Notifications\PambulanNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class PambulansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pambulan_view');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pambulan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pambulanData = [
            'nama' => Auth() -> user() -> name,
            'kep' => $request->kep,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'tanggal' => now(),
        ];
        DB::beginTransaction();
        try {
            Pambulan::create($pambulanData);
            $userSchema = User::where('role', '1')->get();
            Notification::send($userSchema, new PambulanNotification($pambulanData)); 
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('redirects')->with('toast_error', 'Pesanan Gagal. Coba Lagi Nanti');
        }
        return redirect('redirects')->with('toast_success', 'Ambulans Segera Datang.');
       
        // $pambulan = new Pambulan;
        // $pambulan->nama = Auth::user()->name;
        // $pambulan->kep = $request->kep;
        // $pambulan->lat = $request->lat;
        // $pambulan->lng = $request->lng;
        // $pambulan->tanggal = now();
        // $pambulan->save();
        // return redirect('redirects')->with('toast_success', 'Pesanan Sukses.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function changeAmbulansStatus(Request $request)
    {
        $pambulan = Pambulan::find($request->id);
        $pambulan->status = $request->status;
        $pambulan->save();
    }
}
