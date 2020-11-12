@extends('template.admin')

@section('title')
    List Barang
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/adminlist.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="img">
            <img src="https://drive.google.com/uc?export=view&id=1yPApSJK5_oe0nTB4W35CWZI8Q1HeuigW" alt="Gambar Produk">
        </div>
        <div class="main">
            <div class="title text t-m t-bold t-nospace">Dessert Choco Cookies</div>
            <div class="price">Rp. 20.000</div>
        </div>
        <div class="action">
            <div class="btn btn-green text t-uppercase t-sm">edit</div>
            <div class="btn btn-red text t-uppercase t-sm">delete</div>
        </div>
    </div>

    @foreach ($data as $d)
    <div class="card">
        <div class="img">
            <img src="https://drive.google.com/uc?export=view&id={{$d->imagelink}}" alt="Gambar Produk">
        </div>
        <div class="main">
            <div class="title text t-m t-bold t-nospace">{{$d->name}}</div>
            <div class="price">Rp. {{$d->price}}</div>
        </div>
        <div class="action">
            <a style="text-decoration: none;" href="/admin/edit/{{$d->id}}" class="btn btn-green text t-uppercase t-sm">edit</a>
            <a style="text-decoration: none;" href="/admin/list/{{$d->id}}" class="btn btn-red text t-uppercase t-sm">delete</a>
        </div>
    </div>
    @endforeach
    
@endsection