@extends('partials.tmpAdmin')

@section('tittle')
    About Data
@endsection

@section('name')
    Data untuk halaman tentang
@endsection

@section('content')

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
                <th class="text-center">Sub</th>
                <th class="text-center">Visi</th>
                <th class="text-center">Misi</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->sub }}</td>
                <td>{{ $item->visi }}</td>
                <td>{{ $item->misi }}</td>
                <td class="text-center">
                    <a href="{{ route('tentang.edit', $item->id) }}"><button class="btn btn-success btn-sm"><i class="fas fa-pen-to-square"></i>Edit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection