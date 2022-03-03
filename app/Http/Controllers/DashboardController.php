<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Index(){
        $TotalPegawai = DB::table('kassa')->count('Nama_Pegawai');
        $TotalInventory = DB::table('daftar_barang')->count('Kode_barang');
        $TotalPenjualan = DB::table('History_penjualan')->sum('Harga_total');
        $TotalInvoice = DB::table('daftar_pembelian')->count('Kode_Faktur');

        $DataPenjualan = DB::table('daftar_pembelian')
                            ->join('pembelian','daftar_pembelian.Kode_Faktur','=','pembelian.Kode_Faktur')
                            ->join('kassa', 'pembelian.ID_Kassa','=','Kassa.ID_Kassa')->groupBy('daftar_pembelian.Kode_Faktur')->paginate(10);

      return view('welcome',[
          'Inventory' => $TotalInventory,
          'TotalPegawai' => $TotalPegawai,
          'TotalPenjualan' => $TotalInvoice,
          'TotalPendapatan' => $TotalPenjualan,
          'DataPenjualan' => $DataPenjualan
      ]);
    }
}
