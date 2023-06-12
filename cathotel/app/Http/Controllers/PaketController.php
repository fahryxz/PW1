<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paket = Paket::all();
        return view('paket.index')->with('paket', $paket);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request -> validate([
            'tiperuang' => 'required',
            'makanan' => 'required',
            'grooming' => 'required',
            'hargaperhari' => 'required'
        ]);

        $paket = new Paket();
        $paket -> tiperuang = $validasi['tiperuang'];
        $paket -> makanan = $validasi['makanan'];
        $paket -> grooming = $validasi['grooming'];
        $paket -> hargaperhari = $validasi['hargaperhari'];

        $paket->save();
        
        return redirect() -> route('paket.index')-> with('success', 'Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        //
    }
}