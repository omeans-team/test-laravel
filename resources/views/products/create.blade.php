@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Daftar Produk > Tambah Produk</h4>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-md-4">
            <!-- <div class="form-group">
                <strong>Kategori :</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div> -->
            <div class="form-group">
                <strong>Kategori :</strong>
                <select name="kategori" class="form-control">
                    <option value="">Pilih kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    <!-- <option value="{{ $category->id }}">{{ $category->name }}</option> -->
                    @endforeach
                </select>
            </div>

        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="name" class="form-control" placeholder="Masukan nama barang">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>Harga Beli :</strong>
                <!-- <input type="number" class="form-control" name="hargabeli"> -->
                <input type="number" class="form-control" name="hargabeli" value="0">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>Harga Jual :</strong>
                <input type="number" name="hargajual" class="form-control" value="0">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>Stok Barang :</strong>
                <input step="1" type="number" name="stok" class="integer form-control" placeholder="Masukan jumlah stok barang">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Upload Image :</strong>
                <!-- <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea> -->
                <input type="file" name="image" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                </div> -->
            </div>
        </div>
    </div>
   
</form>
@endsection