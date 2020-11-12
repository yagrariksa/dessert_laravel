@extends('template.admin')

@section('title')
    Tambah Barang
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/selectform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admintambah.css') }}">
@endsection
@section('content')
@livewire('atur-pembayaran')
@endsection

@section('js')
<script src="{{ asset('js/selectform.js') }}"></script>
@endsection