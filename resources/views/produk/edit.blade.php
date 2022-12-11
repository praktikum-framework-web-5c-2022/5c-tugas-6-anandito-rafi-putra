@extends('layouts.app',['all_produk' => $all_produk]);
@section('title','Edit Produk Gudangku')
@section('content')
<h1 class="mb-3">Produk Edit</h1>
<form action="{{ route('produks.updateproduct',$produk->id) }}" method="POST">
  @method('put')
    @csrf 
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="type_id" value="{{ $produk->type_id }}" hidden>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_produk" value="{{ $produk->kode_produk }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $produk->nama }}">
      @error('nama')
      <div class="text-danger">{{$message}}</div>
       @enderror
    </div>
    <div class="form-floating mb-3">
        <select name="ukuran" id="ukuran" class="form-select">
            <option value="S" {{ old('ukuran') ?? $produk->ukuran == "S" ? "selected" : "" }}>S</option>
            <option value="S" {{ old('ukuran') ?? $produk->ukuran == "M" ? "selected" : "" }}>M</option>
            <option value="L" {{ old('ukuran')?? $produk->ukuran == "L" ? "selected" : "" }}>L</option>
            <option value="XL" {{ old('ukuran')?? $produk->ukuran == "XL" ? "selected" : "" }}>XL</option>
        </select>
        <label for="ukuran">Ukuran</label>
        @error('ukuran')
      <div class="text-danger">{{$message}}</div>
       @enderror
    </div>   
    <div class="input-group mb-3">
        <span class="input-group-text">Rp.</span>
        <div class="form-floating">
        <input type="text" name="harga" id="harga" class="form-control" 
        value="{{ old('harga') ?? $produk->harga }}">
        <label for="harga">Harga</label>
        @error('harga')
      <div class="text-danger">{{$message}}</div>
       @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">INPUT PRODUK BARU</button>
  </form>
@endsection