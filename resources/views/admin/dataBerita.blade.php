@extends('partials.tmpAdmin')


@section('tittle')
    News Data
@endsection

@section('name')
    List berita Tasty Food
@endsection

@section('content')

    <a href="{{ url('admin/berita/add') }}"><button class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-plus"></i>Add Data</button></a>
    
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <b>{{ Session::get('success') }}</b>
    </div>
    @elseif (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <b>{{ Session::get('error') }}</b>
    </div>
    @endif
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Preview</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->judul }}</td>
                <td class="text-center">
                    <img src="http://rizky.ypc.23.cyberwarrior.co.id/laravel/storage/app/public/{{ $item->foto }}" alt="" width="200" height="100">
                </td>
                <td>{{ Str::limit($item->deskripsi) }}</td>
                <td class="text-center">
                    <a href="berita/edit/{{ $item -> id }}"><button class="btn btn-success btn-sm"><i class="fas fa-pen-to-square"></i>Edit</button></a>
                    <a href="berita/delete/{{ $item -> id }}"><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Hapus</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection