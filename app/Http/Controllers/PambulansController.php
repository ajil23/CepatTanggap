<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pambulan;

class PambulansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('backend.ambulance.view_ambulance')->with(['pambulan' => Pambulan::all()]);
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
        $pambulan = new Pambulan;
        $pambulan->nama = $request->namapasien;
        $pambulan->kep = $request->kep;
        $pambulan->lokasi = $request->lokasi;
        $pambulan->tanggal = now();
        $pambulan->save();
        return redirect('redirects')->with('success', 'Pertolongan akan segera datang');
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
}
