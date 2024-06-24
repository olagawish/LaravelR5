@extends('layout.main')

@section('menu')
    <li><a href="/">Home Page</a></li>
@endsection

@push('submenu')
    <li><a href="/">Test Page</a></li>
@endpush

@prepend('submenu')
    <li><a href="/">Test Page2</a></li>
@endprepend
