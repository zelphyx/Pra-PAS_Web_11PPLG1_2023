@extends('layouts.main')

@section('content')
    <h2>Specs Detail</h2>
    <div class="form">
        <div class="form-group my-1">
            <label for="Nomor Seri">Nomor Seri</label>
            <input type="text" class="form-control" name="seri" id="seri" value="{{$kb->SERI}}" disabled>
        </div>
        <div class="form-group my-1">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{$kb->Nama}}" disabled>
        </div>
        <div class="form-group my-1">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$kb->Harga}}" disabled>
        </div>
        <div class="form-group my-1">
            <label for="pembuat">Pembuat</label>
            <input type="text" class="form-control" name="pembuat" id="pembuat" value="{{$kb->Pembuat}}" disabled>
        </div>
        <div class="form-group my-1">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori" value="{{$kb->Kategori}}" disabled>
        </div>
        <div class="form-group my-1">
            <label for="tanggal_rilis">Tanggal Rilis</label>
            <input type="text" class="form-control" name="tanggal_rilis" id="tanggal_rilis" value="{{ $kb->tanggalrilis}}" disabled>
        </div>
    </div>
@endsection
