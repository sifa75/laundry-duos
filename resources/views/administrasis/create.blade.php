@extends('adminlte::page')

@section('title', 'Tambah Administrasi')

@section('content_header')
    <h1>Tambah Data Administrasi</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('administrasis.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Kode Pesanan</label>
                <input type="text"
                    name="kode_pesanan"
                    class="form-control"
                    value="{{ $kode }}"
                    readonly>
            </div>

            <div class="form-group">
                <label>Nama Pelanggan</label>
                <select name="nama_pelanggan" class="form-control">
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->nama }}">
                        {{ $pelanggan->nama }}
                    </option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Pengantaran</label>
                <input type="date" name="tanggal_pengantaran" class="form-control">
            </div>

            <div class="form-group">
                <label>Tanggal Pengambilan</label>
                <input type="date" name="tanggal_pengambilan" class="form-control">
            </div>

            <div class="form-group">
                <label>Jumlah KG</label>
                <input type="number" step="0.01" name="jumlah_kg" class="form-control">
            </div>

            <div class="form-group">
                <label>Total Harga</label>

                <input type="number"
                    name="total_harga"
                    class="form-control"
                    readonly>
            </div>

            <div class="form-group">
                <label>Status Laundry</label>

                <select name="status" class="form-control">
                    <option value="Diproses">Diproses</option>
                    <option value="Dicuci">Dicuci</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Sudah Diambil">Sudah Diambil</option>
                </select>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Simpan
            </button>

            <a href="{{ route('administrasis.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@stop

@section('js')

<script>

const hargaPerKg = 7000;

document.addEventListener('DOMContentLoaded', function () {

    const kg = document.querySelector('input[name="jumlah_kg"]');
    const total = document.querySelector('input[name="total_harga"]');

    kg.addEventListener('input', function () {

        let hasil = parseFloat(this.value) || 0;

        total.value = hasil * hargaPerKg;

    });

});

</script>

@stop
