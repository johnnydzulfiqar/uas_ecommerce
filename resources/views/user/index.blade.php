@extends('layout.master')
@section('judul')
Index User
@endsection
@section('content')
       <style>
        

  .card-product:after {
    content: "";
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .price-new, .card-product .price {
    margin-right: 5px; }
  .card-product .price-old {
    color: #999; }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      object-fit: cover; }
      
      .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }</style>    
<div class="row">
    <form action="" method="GET" role="search">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="q" placeholder="Cari" value="{{ @$q }}">
         </div>
    </form>
    @foreach ($result as $item)
    <div class="col-md-3">
        <figure class="card card-product">
            <div class="img-wrap"> 
                <img src="{{ $item->foto_produk}}">
                {{-- <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a> --}}
            </div>
            <figcaption class="info-wrap">
                <h6 class="title text-dots"><a href="/user/{{ $item->id }}/show">{{ $item->nama_produk }}</a></h6>
                <div class="action-wrap">
                    <a href="/user/{{ $item->id }}/show" class="btn btn-primary btn-sm float-right"> Order </a>
                    <div class="price-wrap h5">
                        <span class="price-new">Rp. {{ $item->harga_produk }}</span>
                    </div> <!-- price-wrap.// -->
                </div> <!-- action-wrap -->
            </figcaption>
        </figure> <!-- card // -->
    </div> <!-- col // -->
    @endforeach
    
    

        @endsection
        