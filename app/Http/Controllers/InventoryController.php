<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
  public function Index(Request $request)
  {
    if($request->has('search')){
      $DataBarang = DB::table('daftar_barang')->where('Nama_Barang','like','%'.$request->search.'%')
                              ->orwhere('Kode_Barang','like','%'.$request->search.'%')->get();
    }else{
      $DataBarang = DB::table('daftar_barang')->get();
    }
    
    return view('Inventory', ['DataBarang' => $DataBarang]);
  }

  public function Add()
  {
    return view('Inventory.add');
  }

  public function AddProses(Request $request)
  {
    DB::table('daftar_barang')->insert([
      'Kode_barang' => $request->KodeBarang,
      'Nama_Barang' => $request->NamaBarang,
      'Harga_Barang' => $request->HargaBarang
    ]);

    return redirect('Inventory')->with('status', 'Data berhasil di tambah');
  }

  public function Edit($Kode_Barang)
  {
    $DataEdit = DB::table('daftar_barang')->where('Kode_barang', $Kode_Barang)->first();
    return view('Inventory/Edit', compact('DataEdit'));
  }

  public function EditProses(Request $request, $Kode_Barang)
  {
    DB::table('daftar_barang')->where('Kode_barang', $Kode_Barang)
      ->update([
        'Kode_barang' => $request->KodeBarang,
        'Nama_Barang' => $request->NamaBarang,
        'Harga_Barang' => $request->HargaBarang
      ]);
      return redirect('Inventory')->with('status', 'Data berhasil di Update');
  }

  public function Delete($Kode_Barang){
    DB::table('daftar_barang')->where('Kode_barang',$Kode_Barang)->delete();
    return redirect('Inventory')->with('status', 'Data berhasil di Dihapus');
    
  }
}
