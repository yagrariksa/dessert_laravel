@extends('template.admin')

@section('title')
    Atur Order
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/aturorder.css') }}">
@endsection

@section('content')

    <table>
        <thead>
            <tr>
                <th class="kode">Kode</th>
                <th class="nama">Nama</th>
                <th class="status">Status</th>
                <th class="total">Total Biaya</th>
                <th class="aksi">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)  
            <tr>
                <td>{{$d->kode}}</td>
                <td>{{$d->namaewa}}</td>
                <td>{{$d->status}}</td>
                <td>Rp {{$d->total}}</td>
                <td>
                    <div class="btn">Details</div>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>92is36jo</td>
                <td>Alya Nufaisah</td>
                <td>Barang Sedang Disiapkan</td>
                <td>Rp 700.000</td>
                <td>
                    <div class="btn">Details</div>
                </td>
            </tr>
            <tr>
                <td>12rf32yt</td>
                <td>Richard Ade</td>
                <td>Menunggu Pembayaran</td>
                <td>Rp 325.000</td>
                <td>
                    <div class="btn">Details</div>
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection