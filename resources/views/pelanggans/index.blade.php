@extends('adminlte::page')

@section('title', 'Data Pelanggan')

@section('content_header')
    <h1>Data Pelanggan</h1>
@stop

@section('content')

<a href="{{ route('pelanggans.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th width="170">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pelanggans as $index => $pelanggan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->no_hp }}</td>
                    <td>{{ $pelanggan->alamat }}</td>

                    <td>
                        <a href="{{ route('pelanggans.edit', $pelanggan->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('pelanggans.destroy', $pelanggan->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@stop
