@extends('adminlte::page')

@section('title', 'Edit Pelanggan')

@section('content_header')
    <h1>Edit Data Pelanggan</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $pelanggan->nama }}">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text"
                       name="no_hp"
                       class="form-control"
                       value="{{ $pelanggan->no_hp }}">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="form-control"
                          rows="3">{{ $pelanggan->alamat }}</textarea>
            </div>

            <button class="btn btn-success">
                <i class="fas fa-save"></i> Update
            </button>

            <a href="{{ route('pelanggans.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@stop
