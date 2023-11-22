@extends('partials.tmpAdmin')

@section('tittle')
    Add Data
@endsection

@section('name')
    Menambah data product
@endsection

@section('content')
<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <div class="mt-3 mb-2">
            <label for="" class="form-label">Nama Product</label>
            <input class="form-control" type="text" placeholder="Masukkan Nama Product" name="nama_product" id="nama_product" 
            value="{{ $product->nama_product }}">
        </div>
        <div class="mt-3 mb-2">
            <label for="" class="form-label">Foto Product</label>
            <input class="form-control" type="file" name="foto_product" id="foto">
        </div>
        <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </table>
</form>
@endsection