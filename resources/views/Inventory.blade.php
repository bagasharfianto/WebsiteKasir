@extends('layouts.app', ['title' => 'Inventory'])

@section('Main')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4 ">
                <tr>
                    <td>
                        <h6 class="mb-4">Daftar Barang</h6>
                    </td>
                    <td>
                        <a href="Inventory/Add">
                            <button type="button" class="btn btn-success rounded-pill m-2">ADD</button>
                        </a>
                    </td>
                </tr>
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
                                        <button type="button" class="btn btn-success rounded-pill m-2">Update</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ url('Inventory/'.$Barang -> Kode_barang)}}" method="post" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger rounded-pill m-2" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection