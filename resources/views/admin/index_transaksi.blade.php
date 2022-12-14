@extends('layout.master')
@section('judul')
Transaksi Status
@endsection
@section('content')
<main style="margin-top: 70px">
  <div class="container">
      <div class="row">
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          {{-- <div class="col-lg-4 mb-2">
              <form action="" method="GET" role="search">
                  <div class="input-group">
                      <input type="text" class="form-control" name="q" placeholder="Cari" value="{{ @$q }}">
                   </div>
              </form>
          </div> --}}
          <div class="col-lg-8 text-end mb-2">
              {{-- <a href="{{ url('admin/create') }}" class="btn btn-primary">Tambah</a> --}}
              </div>
          <div class="col-lg-12">
              <table class="table">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>ID Transaksi</th>
                      <th>Nama Produk</th>
                      <th>Nama Kategori</th>
                      
                      <th>Harga Produk</th>
                      <th>Stok</th>
                      <th>Pembeli</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                      @foreach ($transaksi as $item)
                          
                     
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      {{-- <td><img src="{{ $item->foto_produk}}" alt="foto" width="100px"></td> --}}
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->admin->nama_produk }}</td>
                      <td>{{ $item->admin->kategori_produk }}</td>
                      <td>{{ $item->admin->harga_produk  }}</td>
                      <td>{{ $item->admin->stok  }}</td>
                      <td>{{ $item->user->name  }}</td>
                      
                        @if($item->status === 'Belum Konfirmasi')
                        <td style="color: red">
                        {{ $item->status  }}</td>
                        
                        @else
                        <td style="color: green">
                            {{ $item->status  }}</td>
                            @endif
                      <td><form action="/admin/{admin}/transaksi" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input style="display: none;" type="text" hidden name="id" value="{{ $item->id }}" class="form-control">
                        <input style="display: none;" type="text" hidden name="admin_id" value="{{ $item->admin->id }}" class="form-control">
                        <input style="display: none;" type="text" hidden name="stok" value="{{ $item->admin->stok-1 }}" class="form-control">
                        <input style="display: none;" type="text" hidden name="status" value="Sudah Konfirmasi" class="form-control">
                    @if ($item->status == 'Belum Konfirmasi')
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                    @else
                    @endif
                       
                </form>  </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
              {{-- {!! $result->withQueryString()->links('pagination::bootstrap-5') !!} --}}
          </div>
      </div>
  </div>
</main>



@endsection