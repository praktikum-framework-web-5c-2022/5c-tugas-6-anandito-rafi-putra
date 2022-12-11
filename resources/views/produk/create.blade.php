@extends('layouts.app',['all_produk' => $all_produk]);
@section('title','Input Produk')
@section('content')
<h1 class="mb-3 pt-4">Produk Baru</h1>
<form action="{{ route('types.storeproduct') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tipe</label>
      <select class="form-select" aria-label="Default select example" name="type_id">
          @foreach ($type as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex : BJ000" aria-describedby="emailHelp" name="kode_produk" value="{{old('kode_produk')}}">
      @error('kode_produk')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{old('nama')}}">
      @error('nama')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-floating mb-3">
        <select name="ukuran" id="ukuran" class="form-select">
            <option value="S" {{ old('ukuran') == "S" ? "selected" : "" }}>S</option>
            <option value="M" {{ old('ukuran') == "M" ? "selected" : "" }} >M</option>
            <option value="L" {{ old('ukuran') == "L" ? "selected" : "" }}>L</option>
            <option value="XL" {{ old('ukuran') == "XL" ? "selected" : "" }}>XL</option>
        </select>
        <label for="produk">Ukuran</label>
        @error('ukuran')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>    
    <div class="input-group mb-3">
        <span class="input-group-text">Rp.</span>
        <div class="form-floating">
        <input type="text" name="harga" id="harga" class="form-control" value="{{old('harga')}}">
        <label for="harga">Harga</label>
        @error('harga')
        <div class="text-danger">{{$message}}</div>
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">INPUT PRODUK BARU</button>
  </form>
@endsection