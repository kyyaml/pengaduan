@extends('layouts.admin')


@section('title','Tambah Kategori Pengaduan')

@section('header')
    <a href="{{ route('kategori.index') }}" class="text-primary">Data Kategori</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Tambah Kategori</a>
@endsection

@section('content')
<div class="row">
    <div class="mx-auto col-lg-6 col-12">
        <div class="card">
            <div class="card-header text-center">
                Tambah Kategori
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nama Kategori</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="nama" rows="3" required></textarea>
                          </div>
                    <button type="submit" class="btn btn-purple w-100">Kirim</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
  @endsection