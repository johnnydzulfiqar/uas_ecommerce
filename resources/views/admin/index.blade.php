@extends('layout.master')
@section('judul')
Test
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

          <div class="col-lg-4 mb-2">
              <form action="" method="GET" role="search">
                  <div class="input-group">
                      <input type="text" class="form-control" name="q" placeholder="Cari" value="{{ @$q }}">
                   </div>
              </form>
          </div>
          <div class="col-lg-8 text-end mb-2">
              <a href="{{ url('admin/create') }}" class="btn btn-primary">Tambah</a>
              </div>
          <div class="col-lg-12">
              <table class="table">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Foto Produk</th>
                      <th>Kategori Produk</th>
                      <th>Nama Produk</th>
                      <th>Stok</th>
                      <th>Harga Produk</th>
                      <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                      @foreach ($result as $item)
                          
                     
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ $item->foto_produk}}" alt="foto" width="100px"></td>
                      <td>{{ $item->kategori_produk }}</td>
                      <td>{{ $item->nama_produk }}</td>
                      <td>{{ $item->stok }}</td>
                      <td>{{ $item->harga_produk  }}</td>
                      <td><form action="/admin/{{  $item->id }}" method="POST">
                          @csrf
                         @method('delete')
                         <a href="/admin/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                         <a href="/admin/{{ $item->id }}/show" class="btn btn-primary btn-sm">Show</a>
                         <input type="submit" class="btn btn-danger btn-sm" value="delete">
                         </form></td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
              {!! $result->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
      </div>
  </div>
</main>



@endsection