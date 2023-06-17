<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\Room;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $data['customers'] = Customer::all();
        $data['hewans'] = Hewan::all();
        $data['rooms'] = Room::all();

        // $data['mahasiswaprodi'] = DB::select('select 
        // p.nama_prodi, count(*) as jumlah from mahasiswas m 
        // join prodis p on m.prodi_id = p.id 
        // GROUP BY p.nama_prodi');

        // dd($data['mahasiswaprodi']);
        return view('dashboardapp', $data);
    }
}