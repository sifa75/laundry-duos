@extends('adminlte::page')

@section('title', 'Laporan Laundry')

@section('content_header')
    <h1>Laporan Laundry</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
            <a href="{{ route('administrasis.pdf') }}" class="btn btn-danger">
                <i class="fas fa-file-pdf"></i> Export PDF
            </a>
        <button onclick="window.print()" class="btn btn-success">
                <i class="fas fa-print"></i> Print Laporan
        </button>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tgl Antar</th>
                    <th>Tgl Ambil</th>
                    <th>KG</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                @php
                    $total = 0;
                @endphp

                @foreach($administrasis as $index => $administrasi)

                @php
                    $total += $administrasi->total_harga;
                @endphp

                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $administrasi->kode_pesanan }}</td>
                    <td>{{ $administrasi->nama_pelanggan }}</td>
                    <td>{{ $administrasi->tanggal_pengantaran }}</td>
                    <td>{{ $administrasi->tanggal_pengambilan }}</td>
                    <td>{{ $administrasi->jumlah_kg }}</td>
                    <td>Rp {{ number_format($administrasi->total_harga,0,',','.') }}</td>
                </tr>

                @endforeach

            </tbody>

            <tfoot>
                <tr>
                    <th colspan="6" class="text-right">
                        Total Pendapatan
                    </th>
                    <th>
                        Rp {{ number_format($total,0,',','.') }}
                    </th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>

@stop
