@extends('partials.tmpAdmin')

@section('tittle')
    Edit Data
@endsection

@section('name')
    Edit data tentang
@endsection

@section('content')
    <form action="{{ route('tentang.update', $about->id) }}" method="post">
        @method('PUT')
        @csrf
        <table>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Sub</label>
                <input class="form-control" type="text" placeholder="Masukkan Judul" name="judul" id="judul" 
                value="{{ $about->sub }}">
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Visi</label> 
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5" value="{{ $about->visi }}"></textarea>
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Misi</label> 
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5" value="{{ $about->misi }}"></textarea>
            </div>
            <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </table>
    </form>
@endsection