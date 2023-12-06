@extends('layouts.admin')

@section('title', 'Halaman Pengaduan')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Pengaduan')

@section('content')

    <form action="{{ route('pengaduan.index') }}" method="GET">
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
    </form>

    <table id="pengaduan" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Isi Laporan</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $v)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td>
                    <td>{{ $v->judul }}</td>
                    <td>{{ $v->isi_laporan }}</td>
                    <td>{{ $v->kategori->nama }}</td>
                    <!-- Mengakses nama kategori dengan asumsi ada relasi dengan model Pengaduan -->
                    <td>
                        @if ($v->status == '0')
                            <a href="#" class="badge badge-danger">Pending</a>
                        @elseif ($v->status == 'proses')
                            <a href="#" class="badge badge-warning text-white">Proses</a>
                        @else
                            <a href="#" class="badge badge-success">Selesai</a>
                        @endif
                    </td>
                    <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}"
                            style="text-decoration: underline">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengaduan').DataTable();
        });
    </script>
@endsection
