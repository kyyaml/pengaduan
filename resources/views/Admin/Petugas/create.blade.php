@extends('layouts.admin')

@section('title','Tambah Petugas')


@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Tambah Petugas</a>
@endsection

@section('content')
    <div class="row">
        <div class="mx-auto col-lg-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Petugas
                </div>
                <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="number" name="telp" id="telp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mt-3">
                                <select name="level" id="level" class="custom-select">
                                    <option value="petugas">Pilih Level (Default Petugas)</option>
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-purple w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto col-lg-6 col-12 mt-3">
            @if (Session::has('username'))
                <div class="alert alert-danger">
                    {{ Session::get('username') }}
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger my-1">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection