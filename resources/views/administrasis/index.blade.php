@extends('adminlte::page')

@section('title', 'Data Administrasi')

@section('content_header')
    <h1>Data Administrasi</h1>
@stop

@section('content')

<a href="{{ route('administrasis.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<a href="{{ route('administrasis.laporan') }}" class="btn btn-success mb-3">
    <i class="fas fa-print"></i> Cetak Laporan
</a>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pesanan</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Pengantaran</th>
                    <th>Tanggal Pengambilan</th>
                    <th>Jumlah KG</th>
                    <th width="100">Total Harga</th>
                    <th>Status</th>
                    <th width="100">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($administrasis as $index => $administrasi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $administrasi->kode_pesanan }}</td>
                    <td>{{ $administrasi->nama_pelanggan }}</td>
                    <td>{{ $administrasi->tanggal_pengantaran }}</td>
                    <td>{{ $administrasi->tanggal_pengambilan }}</td>
                    <td>{{ $administrasi->jumlah_kg }}</td>
                    <td>Rp {{ number_format($administrasi->total_harga,0,',','.') }}</td>
                    <td>@if($administrasi->status == 'Diproses')
                            <span class="badge bg-warning">Diproses</span>

                        @elseif($administrasi->status == 'Dicuci')
                            <span class="badge bg-info">Dicuci</span>

                        @elseif($administrasi->status == 'Selesai')
                            <span class="badge bg-success">Selesai</span>

                        @else
                            <span class="badge bg-secondary">Sudah Diambil</span>
                        @endif
                    </td>

                    <td style="width:130px">

                        <a href="{{ route('administrasis.edit', $administrasi->id) }}"
                        class="btn btn-warning btn-sm btn-block mb-1">
                            Edit
                        </a>

                        <form action="{{ route('administrasis.destroy', $administrasi->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm btn-block mb-1"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </button>
                        </form>

                        <a href="{{ route('administrasis.struk', $administrasi->id) }}"
                        class="btn btn-info btn-sm btn-block">
                            Cetak Struk
                        </a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@stop
