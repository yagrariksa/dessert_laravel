@extends('template.user')

@section('title')
    My Order
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/user/userorder.css') }}">
@endsection

@section('content')
    

    <div class="row search">
        <input type="text" placeholder="Masukkan Kode Transaksi">
    </div>

    <div class="container">
        <div class="col main-info">
            <h1>Kode Transaksi</h1>
            <div class="info">er123r3q</div>
        </div>
        <div class="col main-info">
            <h1>Status Pesanan</h1>
            <div class="info">On Progress / Selesai</div>
        </div>
        <div class="col">
            <h1>Identitas Pembeli</h1>
            <div class="form-group">
                <div class="label">Email</div>
                <div class="info-user">google@google.com</div>
            </div>
            <div class="form-group">
                <div class="label">Nama</div>
                <div class="info-user">Google Company</div>
            </div>
            <div class="form-group">
                <div class="label">Nomor Telepon (WA)</div>
                <div class="info-user">+12 9324 234</div>
            </div>
            <div class="form-group">
                <div class="label">Alamat</div>
                <div class="info-user">San Francisco, America</div>
            </div>
            <div class="form-group">
                <div class="label">Kecamatan</div>
                <div class="info-user">NewBouton west</div>
            </div>
            <div class="form-group">
                <div class="label">Kota</div>
                <div class="info-user">San Francisco</div>
            </div>
            <div class="form-group">
                <div class="label">Kode Pos</div>
                <div class="info-user">99221</div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <h1>Metode Pembayaran</h1>
                <div class="form-group">
                    <div class="label">Pilih Metode Pembayaran</div>
                    <div class="info-user">OVO</div>
                </div>
                <div class="form-group">
                    <div class="label">Status Pembayaran</div>
                    <div class="info-user">Menunggu Pembayaran</div>
                </div>
            </div>
            <div class="row">
                <h1>Detail Pesanan</h1>
                <div class="card">
                    <div class="title">
                        Info Pesanan
                    </div>
                    <div class="body">
                        <div class="items normal">
                            <div class="item-title">
                                Choco Cookies
                            </div>
                            <div class="item-details">
                                <div class="type">
                                    Low Calorine Desert BOX
                                </div>
                                <div class="option">
                                    Sugar Level : 25%
                                </div>
                                <div class="qty">
                                    qty : 3
                                </div>
                                <div class="item-price">
                                    Price : Rp 25.000
                                </div>
                                <div class="sub-total">
                                    Sub-Total : Rp 75.000
                                </div>
                            </div>
                        </div>
                        <div class="items custom">
                            <div class="item-title">
                                Custom Dessert
                            </div>
                            <div class="item-details">
                                <div class="type">
                                    Normal Dessert Box
                                </div>
                                <div class="special-details">
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                    <div class="option">
                                        p1 : a
                                    </div>
                                </div>
                                <div class="qty">
                                    qty : 3
                                </div>
                                <div class="item-price">
                                    Price : Rp 25.000
                                </div>
                                <div class="sub-total">
                                    Sub-Total : Rp 75.000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="total-title">
                            TOTAL
                        </div>
                        <div class="total-price">
                            Rp. 150.000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
@endsection