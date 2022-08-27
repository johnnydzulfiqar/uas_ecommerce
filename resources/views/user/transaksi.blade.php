@extends('layout.master')
@section('judul')
Transaksi User 
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Konfirmasi Pesanan</strong>
                        <br>
                        Lakukan Pembayaraan Ke Rekening BCA : 139-00-00 
                        <br>
                        Konfirmasi Ke no +6289635440315
                        <br>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>{{ date('Y-M-D H:i:s') }}</em>
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                <h1>Terima Kasih Telah Berbelanja Silahkan Segara Melakukan Konfirmasi Ke Admin/Seller
                    <br>
                    <a href="indextransaksi" class="badge-success">Halaman Transaksi</a>
                </h1>
                
            </div>
        </div>
    </div>
@endsection