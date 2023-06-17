<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hewan = Hewan::all();
        return view('hewan.index') -> with('hewans', $hewan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customer = Customer::all();
        return view('hewan.create') -> with ('customers', $customer);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validasi = $request -> validate([
            'namaHewan' => 'required',
            'customer_id' => 'required',
            'jenisHewan' => 'required',
            'jkHewan' => 'required',
            'breedHewan' => 'required'
         ]);
 
         $hewan = new Hewan();
         $hewan -> namaHewan = $validasi['namaHewan'];
         $hewan -> customer_id = $validasi['customer_id'];
         $hewan -> jenisHewan = $validasi['jenisHewan'];
         $hewan -> jkHewan = $validasi['jkHewan'];
         $hewan -> breedHewan = $validasi['breedHewan'];
         $hewan -> save();
 
         return redirect() -> route('hewan.index') -> with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hewan $hewan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hewan $hewan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hewan $hewan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hewan $hewan)
    {
        //
    }
}