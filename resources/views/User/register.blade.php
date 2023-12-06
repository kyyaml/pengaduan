@extends('layouts.user')

@section('css')
    <style>
        body {
            background: linear-gradient(#d0021b, #d6d6d6);
        }
        .btn-purple {
            background: #d0021b;
            width: 100%;
            color: #ffffff;
        }
        .btn-purple:focus {
            outline: none;
            box-shadow: none;
        }
    </style>
@endsection

@section('title', 'Halaman Daftar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-4">
                <h2 class="text-center text-white  mb-0 mt-5 pt-2">PEKAT</h2>
                <P class="text-center text-white mb-5 pb-2">Pengaduan Masyarakat</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center text-bold mb-5">FORM DAFTAR</h2>
                        <form action="{{ route('pekat.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="number" name="nik" placeholder="NIK" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telp" placeholder="No. Telp" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">REGISTER</button>
                        </form>
                    </div>
                </div>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
                <a href="{{ route('pekat.index') }}" class="btn btn-warning  text-white mt-3  mb-3"
                    style="width: 100%">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
@endsection
