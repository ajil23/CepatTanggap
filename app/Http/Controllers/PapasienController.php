<?php

namespace App\Http\Controllers;

use App\Models\Papasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PapasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('papasien_view');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('papasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $papasiens = new Papasien();
        $papasiens->name = $request->name;
        $papasiens->tempat_lahir = $request->tempat_lahir;
        $papasiens->tanggal_lahir = $request->tanggal_lahir;
        $papasiens->umur = $request->umur;
        $papasiens->riwayat_penyakit = $request->riwayat_penyakit;
        $papasiens->alamat = $request->alamat;
        $papasiens->save();
        return redirect('redirects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Papasien $papasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Papasien $papasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Papasien $papasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Papasien $papasien)
    {
        //
    }
}
