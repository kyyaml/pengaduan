@extends('layouts.admin')

@section('title','Detail Petugas')


@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Detail Petugas</a>
@endsection

@section('content')
    <div class="row">
        <div class="mx-auto col-lg-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    Detail Petugas
                </div>
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" name="nama_petugas" id="nama_petugas" value="{{ $petugas->nama_petugas }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="{{ $petugas->username }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="number" name="telp" id="telp" value="{{ $petugas->telp }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mt-3">
                                <select name="level" id="level" class="custom-select">
                                    @if ($petugas->level == 'admin')
                                        <option value="admin" selected>Admin</option>
                                        <option value="petugas" >Petugas</option>
                                    @else
                                    <option value="admin" >Admin</option>
                                    <option value="petugas" selected>Petugas</option>
                                    @endif
                                    
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-100">Update</button>
                    </form>
                    <form action="{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100 mt-2">Hapus</button>
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