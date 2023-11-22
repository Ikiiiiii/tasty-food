@extends('partials.tmpAdmin')

@section('tittle')
    Add Data
@endsection

@section('name')
    Menambah data berita
@endsection

@section('content')
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Judul Berita</label>
                <input class="form-control" type="text" placeholder="Masukkan Judul Berita" name="judul" id="judul" 
                value="{{ $news->judul }}">
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Deskripsi</label> 
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5" value="{{ $news->deskripsi }}"></textarea>
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Foto Berita</label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </table>
    </form>
@endsection