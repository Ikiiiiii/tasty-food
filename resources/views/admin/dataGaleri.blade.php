@extends('partials.tmpAdmin')

@section('tittle')
    Showcase
@endsection

@section('name')
    List Product Tasty Food
@endsection

@section('content')
<a href="{{ url('admin/galeri/add') }}"><button class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-plus"></i>Add Data</button></a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Product</th>
            <th class="text-center">Preview</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->nama_product }}</td>
                <td class="text-center">
                    <img src="http://rizky.ypc.23.cyberwarrior.co.id/laravel/storage/app/public/{{ $item->foto_product }}" alt="" width="100" height="100">
                </td>
                <td class="text-center">
                    <a href="galeri/edit/{{ $item -> id }}"><button class="btn btn-success btn-sm"><i class="fas fa-pen-to-square"></i>Edit</button></a>
                    <a href="galeri/delete/{{ $item -> id }}"><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Hapus</button></a>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection