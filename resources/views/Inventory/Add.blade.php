@extends('layouts.app',['title'=>'Inventory'])
@section('Main')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <form action="{{ url('Inventory') }}" method="post">
                @csrf
                <h6 class="mb-4">Add Barang</h6>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" placeholder="KodeBarang">
                    <label for="KodeBarang">Kode Barang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="NamaBarang">
                    <label for="floatingPassword">Nama Barang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="HargaBarang" name="HargaBarang"
                        placeholder="HargaBarang">
                    <label for="HargaBarang">Harga Barang</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary rounded-pill m-2">Add</button>
                    <a href="/Inventory">
                        <button type="button" class="btn btn-danger rounded-pill m-2">Cencel</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection