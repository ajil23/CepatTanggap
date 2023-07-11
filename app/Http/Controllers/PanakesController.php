<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panakes;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PanakesNotification;
use Illuminate\Support\Facades\Auth;

class PanakesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panakes_view');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $panakesData = [
            'nama' => Auth() -> user() -> name,
            'kep' => $request->kep,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'tanggal' => now(),
        ];
        DB::beginTransaction();
        try {
            Panakes::create($panakesData);
            $userSchema = User::where('role', '1')->get();
            Notification::send($userSchema, new PanakesNotification($panakesData)); 
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('redirects')->with('toast_error', 'Pesanan Gagal. Coba Lagi Nanti');
        }
        return redirect('redirects')->with('toast_success', 'Bantuan Segera Datang.');
        // $panakes = new Panakes();
        // $panakes->nama = Auth::user()->name;
        // $panakes->kep = $request->kep;
        // $panakes->lat = $request->lat;
        // $panakes->lng = $request->lng;
        // $panakes->tanggal = now();
        // $panakes->save();
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

    public function changeBantuanStatus(Request $request)
    {
        $pambulan = Panakes::find($request->id);
        $pambulan->status = $request->status;
        $pambulan->save();
    }
}
