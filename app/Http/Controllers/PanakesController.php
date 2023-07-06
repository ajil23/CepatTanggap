<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panakes;
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
        $pambulan = new Panakes();
        $pambulan->nama = Auth::user()->name;
        $pambulan->kep = $request->kep;
        $pambulan->lokasi = $request->lokasi;
        $pambulan->tanggal = now();
        $pambulan->save();
        return redirect('redirects');
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
