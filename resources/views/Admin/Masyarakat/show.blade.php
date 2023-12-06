@extends('layouts.admin')

@section('title', 'Detail Masyarakat')

@section('header')
    <a href="{{ route('masyarakat.index') }}" class="text-primary">Data Masyarakat</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Detail Masyarakat</a>
@endsection

@section('content')
    <div class="row">
        <div class=" mx-auto col-lg-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    Detail Masyarakat
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>{{ $masyarakat->nik }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $masyarakat->nama }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>{{ $masyarakat->username }}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td>{{ $masyarakat->telp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
