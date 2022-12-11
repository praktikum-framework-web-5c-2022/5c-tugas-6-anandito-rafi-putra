@extends('layouts.app',['all_produk' => $all_produk]);
@section('title','Daftar Produk Gudangku')
@section('content')


    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-8">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                @error(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal diubah, silahkan cek kembali form yang anda isi!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            <h1>Produk <span style="text-transform: uppercase">{{ $type->nama }}</span></h1>
            <table class="table">
                <thead>
                    <tr class="align-middle" style="text-align: center">
                    <th scope="col">#</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($produk as $item)
                    <tr @if($loop->odd)  style="background-color: #f1f3f5;"  @endif>
                        <td scope="row" align="center">{{ $no++ }}</td>
                        <td align="center">{{ $item->kode_produk }}</td>
                        <td align="center">{{ $item->nama }}</td>
                        <td align="center">{{ $item->ukuran }}</td>
                        <td align="center">@currency( $item->harga)</td>
                        <td align="center">
                            <form action="{{ route('produks.destroy',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('produks.edit',$item->id) }}" class="btn btn-primary">UBAH</a>
                                <button type="submit" class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection