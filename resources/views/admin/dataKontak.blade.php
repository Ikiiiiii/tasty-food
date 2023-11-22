@extends('partials.tmpAdmin')

@section('tittle')
    Inbox
@endsection

@section('name')
    Pesan masuk
@endsection

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Subject</th>
            <th class="text-center">Nama Pengirim</th>
            <th class="text-center">Email</th>
            <th class="text-center">Pesan</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contact as $item)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $item->subject }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->message }}</td>
            <td class="text-center">
                <a href="kontak/delete/{{ $item -> id }}"><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection