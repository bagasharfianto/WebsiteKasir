@extends('layouts.app',['title'=>'History'])

@section('Main')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Detail Pembelian</h6>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Kode_Faktur</th>
                        <th scope="col">Tanggal_Pembelian</th>
                        <th scope="col">ID_Kassa</th>
                        <th scope="col">Nama_Pegawai</th>
                    </tr>
                    <tr>
                        <td>{{ $DaftarPembelian -> Kode_Faktur }}</td>
                        <td>{{ $DaftarPembelian -> Tanggal_Pembelian }} </td>
                        <td>{{ $DaftarPembelian -> ID_Kassa}}</td>
                        <td>{{ $DaftarPembelian -> Nama_Pegawai}}</td>
                    </tr>
                    <br>
                    <tr>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Jumlah Pesanan</th>
                        <th scope="col">Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataDetail as $Data)
                    <tr>
                        <th scope="row">{{ $Data -> Kode_Barang }}</th>
                        <td>{{ $Data -> Nama_Barang }}</td>
                        <td>{{ $Data -> Harga_Barang }}</td>
                        <td>{{ $Data -> QTY }}</td>
                        <td>{{ $Data -> Harga_total }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">TOTAL</td>
                        <td>{{ $Total }}</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/History">
                                <button type="button" class="btn btn-danger rounded-pill m-2">Back</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection