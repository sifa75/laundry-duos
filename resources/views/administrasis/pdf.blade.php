<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Laundry</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            font-size:12px;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:8px;
            text-align:center;
        }

        tfoot th{
            text-align:right;
        }
    </style>

</head>
<body>

<h2>LAPORAN LAUNDRY</h2>

<table>

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
        <td>{{ $index + 1 }}</td>
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
            <th colspan="6">
                Total Pendapatan
            </th>

            <th>
                Rp {{ number_format($total,0,',','.') }}
            </th>
        </tr>
    </tfoot>

</table>

<br><br>

<p>Tanggal Cetak : {{ date('d-m-Y') }}</p>

</body>
</html>
