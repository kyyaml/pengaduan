@extends('layouts.admin')


@section('title','Halaman Kategori')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection


@section('header','Data Kategori')

@section('content')

<a href="{{ route('kategori.create') }}" class="btn btn-purple mb-4 ">Tambah Kategori</a>


<table class="table" id="kategori">
    <thead>  
      <tr>
        <th >No</th>
        <th >Nama Kategori</th>
        <th >Actions</th>
      </tr> 
    </thead>
    <tbody>
      @php
          $index=1;
      @endphp
      @foreach ($kategori as $kategoris)
      <tr>
        <td>{{ $index++ }}</td> 
          <td> {{ $kategoris->nama }}</td>
        <td>
          <a href="{{ route('kategori.edit', $kategoris->id_kategori) }}" class="mr-3 btn btn-warning">Edit</a>
          <form method="POST" action="{{ route('kategori.destroy', $kategoris->id_kategori) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Kategori ini?')">Hapus</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{-- <table class="table table-bordered ">
    <thead>
      
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Kategori</th>
        
        <th scope="col">Actions</th>
      </tr> 
    </thead>
    <tbody>
      @php
          $index=1;
      @endphp
      @foreach ($kategori as $kategoris)
      <tr>
        <th scope="row">{{ $index++ }}</td> 
          <td> {{ $kategoris->nama }}</td>
        <td>
          <a href="{{ route('kategori.edit', $kategoris->id_kategori) }}" class="mr-3 btn btn-warning">Edit</a>
          <form method="POST" action="{{ route('kategori.destroy', $kategoris->id_kategori) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Kategori ini?')">Hapus</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> --}}
  @endsection

  @section('js')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#kategori').DataTable();
        });
    </script>
@endsection