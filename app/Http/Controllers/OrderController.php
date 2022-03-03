<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(Request $request)
    {
      if($request->has('search')){
        $DataBarang = DB::table('daftar_barang')->where('Nama_Barang','like','%'.$request->search.'%')
                                ->orwhere('Kode_Barang','like','%'.$request->search.'%')->get();
      }else{
        $DataBarang = DB::table('daftar_barang')->get();
      }
      return view('Order', ['DataBarang' => $DataBarang]);
    }

    public function Show(){
      
    }
}
