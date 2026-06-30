@extends('adminlte::page')

@section('title', 'Tambah Pelanggan')

@section('content_header')
    <h1>Tambah Data Pelanggan</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('pelanggans.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       placeholder="Masukkan nama pelanggan">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       placeholder="08xxxxxxxxxx">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="form-control"
                          rows="3"
                          placeholder="Masukkan alamat"></textarea>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Simpan
            </button>

            <a href="{{ route('pelanggans.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@stop
