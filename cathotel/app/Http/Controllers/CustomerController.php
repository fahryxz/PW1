<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $customer = Customer::all();
        return view('customer.index') -> with('customers', $customer);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customer = Customer::all();
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request -> validate([
            'namaCustomer' => 'required',
            'alamatCustomer' => 'required',
            'nohpCustomer' => 'required',
            'emailCustomer' => 'required'
         ]);
 
         $customer = new Customer();
         $customer -> namaCustomer = $validasi['namaCustomer'];
         $customer -> alamatCustomer = $validasi['alamatCustomer'];
         $customer -> nohpCustomer = $validasi['nohpCustomer'];
         $customer -> emailCustomer = $validasi['emailCustomer'];
 
         $customer -> save();
 
         return redirect() 
         -> route('customer.index') 
         -> with('success', 'Data berhasil disimpan');
 
    }

    
    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
        return view('customer.edit')
        ->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $validasi = $request -> validate([
            'namaCustomer' => 'required',
            'alamatCustomer' => 'required',
            'nohpCustomer' => 'required',
            'emailCustomer' => 'required'
         ]);
         Customer::where('id', $customer -> id) -> update($validasi);
            return redirect() 
            -> route('customer.index') 
            -> with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
        $this->authorize('delete', $customer);
        $customer->delete();
        return back();
    }
}