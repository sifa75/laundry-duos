@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Laundry</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang</h3>
    </div>

    <div class="card-body">
        <h4>Selamat datang di Sistem Informasi Laundry</h4>

        <p>
            Gunakan menu di sebelah kiri untuk mengelola data pelanggan,
            administrasi laundry, mencetak struk, dan membuat laporan.
        </p>
    </div>
</div>

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
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
        <div class="small-box bg-success">
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
        <div class="small-box bg-danger">
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
