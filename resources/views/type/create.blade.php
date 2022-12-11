@extends('layouts.app',['all_produk' => $all_produk]);
@section('title','Input Tipe')
@section('content')
<h1>Tipe Baru</h1>
<form action="{{ route('types.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Tipe</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"  value="{{old('nama')}}">
      @error('nama')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">INPUT TIPE BARU</button>
  </form>
@endsection