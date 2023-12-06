@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')

{{-- @section('header', 'Data Masyarakat') --}}


@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <table id="masyarakat" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $k => $v)
                <tr>
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $v->nik }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->username }}</td>
                    <td>{{ $v->telp }}</td>
                    <td><a href="{{ route('masyarakat.show', $v->nik) }}" style="text-decoration: underline">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakat').DataTable();
        });
    </script>
@endsection
