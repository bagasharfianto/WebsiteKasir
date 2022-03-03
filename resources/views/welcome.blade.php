@extends('layouts.app',['title'=>'Dashboard'])

@section('Main')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Inventory</p>
                    <h6 class="mb-0">{{ $Inventory }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Pegawai</p>
                    <h6 class="mb-0">{{ $TotalPegawai }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Penjualan</p>
                    <h6 class="mb-0">{{ $TotalPenjualan }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Pendapatan</p>
                    <h6 class="mb-0">Rp. {{ number_format($TotalPendapatan,2,',','.') }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Invoice</h6>
            <a href="History">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Kode_Faktur</th>
                        <th scope="col">Tanggal_Pembelian</th>
                        <th scope="col">ID_Kassa</th>
                        <th scope="col">Nama_Pegawai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataPenjualan as $Data)
                    <tr>
                        <td>{{ $Data -> Kode_Faktur }}</td>
                        <td>{{ $Data -> Tanggal_Pembelian }} </td>
                        <td>{{ $Data -> ID_Kassa}}</td>
                        <td>{{ $Data -> Nama_Pegawai}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection