<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all();
        return view('Staff.index')->with('staff', $staff);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('Staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request -> validate([
            'namastaff' => 'required',
            'alamastaff' => 'required',
            'emailstaff' => 'required'
        ]);

        $staff = new Staff();
        $staff -> namastaff = $validasi['namastaff'];
        $staff -> alamatstaff = $validasi['alamatstaff'];
        $staff -> emailstaff = $validasi['emailstaff'];

        $staff->save();
        return redirect() -> route('Staff.index')-> with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}