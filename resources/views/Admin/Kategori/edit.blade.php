@extends('layouts.admin')



@section('title',' Update Kategori Pengaduan')

@section('header')
    <a href="{{ route('kategori.index') }}" class="text-primary">Data Kategori</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Edit Kategori</a>
@endsection

@section('content')


<div class="row">
    <div class="mx-auto col-lg-6 col-12">
        
        <div class="card">
            <div class="card-header text-center">
                Update Kategori
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nama Kategori</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"" name="nama" rows="3">{{ $kategori->nama }}</textarea>
                      </div>
                    <button type="submit" class="btn btn-purple w-100">Simpan Perubahan</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
  @endsection