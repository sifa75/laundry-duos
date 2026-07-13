@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="mb-2">
        🧺 Dashboard DUOs~Laundry
    </h1>


@stop

@section('content')

<div class="card">
    <div class="card-header">
        👋 Informasi Pengguna
    </div>

    <div class="card-body">
        <h3>Halo, {{ Auth::user()->name }} 👋</h3>

        <p>Selamat datang di <b>DUOs~Laundry</b>.</p>

        <p class="text-muted">
            Kelola data pelanggan, administrasi, transaksi, dan laporan laundry dengan mudah.
        </p>
        <hr>

        <div class="row mt-4">

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <b>👩 Profil 1</b>
                    </div>

                    <div class="card-body">
                        <p><b>Nama</b> : Assyifa Nuraini</p>
                        <p><b>NIM</b> : 8040240116</p>
                        <p><b>Program Studi</b> : Sistem Informasi</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-white" style="background:#7c3aed;">
                        <b>👩 Profil 2</b>
                    </div>

                    <div class="card-body">
                        <p><b>Nama</b> : Selvia Nurun Najah</p>
                        <p><b>NIM</b> : 8040240107</p>
                        <p><b>Program Studi</b> : Sistem Informasi</p>
                    </div>
                </div>
            </div>

        </div>

        <p class="mt-3">
            Gunakan menu di sebelah kiri untuk mengelola data pelanggan, administrasi, transaksi, dan laporan laundry.
        </p>
    </div>
</div>

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ \App\Models\Pelanggan::count() }}</h3>
                <p>Total Pelanggan</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box" style="background:#7c3aed; color:white;">
            <div class="inner">
                <h3>{{ \App\Models\Administrasi::count() }}</h3>
                <p>Total Administrasi</p>
            </div>
            <div class="icon">
                <i class="fas fa-clipboard-list"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ \App\Models\Administrasi::sum('jumlah_kg') }} Kg</h3>
                <p>Total KG</p>
            </div>
            <div class="icon">
                <i class="fas fa-weight-hanging"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-gradient-success">
            <div class="inner">
                <h3>Rp {{ number_format(\App\Models\Administrasi::sum('total_harga'),0,',','.') }}</h3>
                <p>Total Pendapatan</p>
            </div>
            <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
        </div>
    </div>

</div>

@stop
