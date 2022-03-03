@extends('layouts.app', ['title' => 'Order'])

@section('Main')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!--List Barang-->
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">List Barang</h6>
                </div>
                <div class="bg-light rounded h-100 p-4 ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Barang</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            @foreach ($DataBarang as $Barang)
                            <tbody>
                                <tr>
                                    <td>{{$Barang -> Kode_barang }}</td>
                                    <td>{{$Barang -> Nama_Barang }}</td>
                                    <td>{{$Barang -> Harga_Barang }}</td>
                                    <td>
                                        <a href="Inventory/Edit/{{$Barang -> Kode_barang}}">
                                            <button type="button" class="btn btn-success rounded-pill m-2">Add</button>
                                        </a>
                                    </td>
                                    <td>
                                       
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End List Barang-->

        <!--List Order-->
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Order</h6>
                    
                </div>
                <canvas id="salse-revenue"></canvas>
            </div>
        </div>
        <!--End List Order-->
    </div>
</div>

<!-- Table End -->
@endsection