@extends('layouts.admin')

@section('title', 'Halaman Petugas')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }
        .text-grey:hover{
            color: #6c757d
        }
        .text-grey{
            color: #6c757d
        }
        .btn-purple{
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
        }
        .btn-purple:hover{
            color: rgb(209, 207, 207);
        }
    </style>
@endsection


@section('header', 'Data Petugas')

@section('content')

    {{-- <form action="{{ route('pengaduan.index') }}" method="GET">
        <div class="form-group mb-4">
            <label for="category_id">Cari Berdasarkan Kategori</label>
            <select name="id_kategori" class="form-control col-md-3" onchange="this.form.submit()">
                <option value="">Semua Kategori</option>
                @foreach ($kategori as $kategoris)
                    <option value="{{ $kategoris->id_kategori }}" @if (request('id_kategori') == $kategoris->id_kategori) selected @endif>
                        {{ $kategoris->nama }}</option>
                @endforeach
            </select>
        </div>
    </form> --}}

    <a href="{{ route('petugas.create') }}" class="btn btn-purple mb-4">Tambah Petugas</a>

    <table id="petugas" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $k => $v )
                <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->nama_petugas }}</td>
                    <td>{{ $v->username }}</td>
                    <td>{{ $v->telp }}</td>
                    <td>{{ $v->level }}</td>
                    <td><a href="{{ route('petugas.edit', $v->id_petugas) }}" style="text-decoration: underline">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#petugas').DataTable();
        });
    </script>
@endsection
