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
        return view('staff.index')->with('staff', $staff);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $staff = Staff::all();
        return view('staff.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request -> validate([
            'namastaff' => 'required',
            'alamatstaff' => 'required',
            'emailstaff' => 'required'
        ]);

        $staff = new Staff();
        $staff -> namastaff = $validasi['namastaff'];
        $staff -> alamatstaff = $validasi['alamatstaff'];
        $staff -> emailstaff = $validasi['emailstaff'];

        $staff->save();
        
        return redirect() -> route('staff.index')-> with('success', 'Data berhasil disimpan');

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
        return view('staff.edit')
        ->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
        $validasi = $request -> validate([
            'namastaff' => 'required',
            'alamatstaff' => 'required',
            'emailstaff' => 'required'
        ]);

        Staff::where('id', $staff -> id) -> update($validasi);
        return redirect() 
        -> route('staff.index')
        -> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
        $this->authorize('delete', $staff);
        $staff->delete();
        return back();
    }
}