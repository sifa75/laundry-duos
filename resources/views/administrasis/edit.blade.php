@extends('adminlte::page')

@section('title', 'Edit Administrasi')

@section('content_header')
    <h1>Edit Data Administrasi</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('administrasis.update',$administrasi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Kode Pesanan</label>
                <input type="text" name="kode_pesanan" class="form-control"
                    value="{{ $administrasi->kode_pesanan }}">
            </div>

            <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control"
                    value="{{ $administrasi->nama_pelanggan }}">
            </div>

            <div class="form-group">
                <label>Tanggal Pengantaran</label>
                <input type="date" name="tanggal_pengantaran" class="form-control"
                    value="{{ $administrasi->tanggal_pengantaran }}">
            </div>

            <div class="form-group">
                <label>Tanggal Pengambilan</label>
                <input type="date" name="tanggal_pengambilan" class="form-control"
                    value="{{ $administrasi->tanggal_pengambilan }}">
            </div>

            <div class="form-group">
                <label>Jumlah KG</label>
                <input type="number" step="0.01" name="jumlah_kg" class="form-control"
                    value="{{ $administrasi->jumlah_kg }}">
            </div>

            <div class="form-group">
                <label>Total Harga</label>
                <input type="number" name="total_harga" class="form-control"
                    value="{{ $administrasi->total_harga }}">
            </div>

            <div class="form-group">
                <label>Status Laundry</label>

                <select name="status" class="form-control">

                    <option value="Diproses"
                        {{ $administrasi->status == 'Diproses' ? 'selected' : '' }}>
                        Diproses
                    </option>

                    <option value="Dicuci"
                        {{ $administrasi->status == 'Dicuci' ? 'selected' : '' }}>
                        Dicuci
                    </option>

                    <option value="Selesai"
                        {{ $administrasi->status == 'Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                    <option value="Sudah Diambil"
                        {{ $administrasi->status == 'Sudah Diambil' ? 'selected' : '' }}>
                        Sudah Diambil
                    </option>

                </select>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Update
            </button>

            <a href="{{ route('administrasis.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@stop
