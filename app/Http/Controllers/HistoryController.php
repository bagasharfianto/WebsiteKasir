<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function Index(Request $request){

        if($request->has('search')){
            $DataPenjualan = DB::table('daftar_pembelian')
                            ->join('pembelian','daftar_pembelian.Kode_Faktur','=','pembelian.Kode_Faktur')
                            ->join('kassa', 'pembelian.ID_Kassa','=','Kassa.ID_Kassa')->groupBy('daftar_pembelian.Kode_Faktur')->where('pembelian.ID_Kassa','like','%'.$request->search.'%')
                                    ->orwhere('Kassa.Nama_Pegawai','like','%'.$request->search.'%')
                                    ->orwhere('daftar_pembelian.Kode_Faktur','like','%'.$request->search.'%');
          }else{
            $DataPenjualan = DB::table('daftar_pembelian')
            ->join('pembelian','daftar_pembelian.Kode_Faktur','=','pembelian.Kode_Faktur')
            ->join('kassa', 'pembelian.ID_Kassa','=','Kassa.ID_Kassa')->groupBy('daftar_pembelian.Kode_Faktur')->paginate(10);
          }
      $DataPenjualan = DB::table('daftar_pembelian')
                            ->join('pembelian','daftar_pembelian.Kode_Faktur','=','pembelian.Kode_Faktur')
                            ->join('kassa', 'pembelian.ID_Kassa','=','Kassa.ID_Kassa')->groupBy('daftar_pembelian.Kode_Faktur')->paginate(10);
        
        $DetaDetail = DB::table('History_penjualan')->get();
        if(request('detail')){
            $DetaDetail = DB::table('History_penjualan')->where('Kode_Faktur','like','%'.request('detail').'%')->get();
        }
        
        return view('History',[
            'DataPenjualan' => $DataPenjualan,
            'DataDetail'    => $DetaDetail
        ]);
    }


    public function Show($Kode_Faktur){
        $DataPenjualan = DB::table('daftar_pembelian')
                            ->join('pembelian','daftar_pembelian.Kode_Faktur','=','pembelian.Kode_Faktur')
                            ->join('kassa', 'pembelian.ID_Kassa','=','Kassa.ID_Kassa')->groupBy('daftar_pembelian.Kode_Faktur')->get();
        $DataShow = $DataPenjualan->where('Kode_Faktur', $Kode_Faktur)->first();
        $DataDetail = DB::table('History_penjualan')->where('Kode_Faktur','like','%'.$Kode_Faktur.'%')->get();
        $TotalHarga = $DataDetail->sum('Harga_total');

      return view('History.Detail',[
            'DaftarPembelian' => $DataShow,
            'DataDetail'    => $DataDetail,
            'Total'         => $TotalHarga
        ]);
    }
}
