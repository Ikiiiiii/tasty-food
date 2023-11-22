@extends('user.layout.skeleton')

@section('app')
    
@include('user.components.navbar')

@yield('page')

@include('user.components.footer')

@endsection