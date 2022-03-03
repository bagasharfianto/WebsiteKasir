@extends('layouts.app',['title'=>'History'])

@section('Main')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Invoice</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Kode Faktur</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">ID Kassa</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                @foreach ($DataPenjualan as $Data)
                <tbody>
                    <tr>
                        <td>{{ $Data -> Kode_Faktur }}</td>
                        <td>{{ $Data -> Tanggal_Pembelian }} </td>
                        <td>{{ $Data -> ID_Kassa}}</td>
                        <td>{{ $Data -> Nama_Pegawai}}</td>
                        <td>
                            <a href="{{ url('History/'.$Data -> Kode_Faktur ) }}">
                                <button  class="btn btn-sm btn-primary">Detail </button>
                            </a>
                        </td>
                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->


@endsection