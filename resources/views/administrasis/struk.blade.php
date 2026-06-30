<!DOCTYPE html>
<html>
<head>
    <title>Struk Laundry</title>

    <style>

        body{
            font-family: Arial;
            width:300px;
            margin:auto;
        }

        h2{
            text-align:center;
        }

        hr{
            border:1px dashed black;
        }

        table{
            width:100%;
        }

        td{
            padding:4px;
        }

        .center{
            text-align:center;
        }

    </style>

</head>

<body onload="window.print()">

<h2>DUOs LAUNDRY</h2>

<p class="center">
Jl. batu giok No.123
<br>
Telp : 08xxxxxxxxxx
</p>

<hr>

<table>

<tr>
<td>Kode</td>
<td>: {{ $administrasi->kode_pesanan }}</td>
</tr>

<tr>
<td>Pelanggan</td>
<td>: {{ $administrasi->nama_pelanggan }}</td>
</tr>

<tr>
<td>Masuk</td>
<td>: {{ $administrasi->tanggal_pengantaran }}</td>
</tr>

<tr>
<td>Ambil</td>
<td>: {{ $administrasi->tanggal_pengambilan }}</td>
</tr>

<tr>
<td>Berat</td>
<td>: {{ $administrasi->jumlah_kg }} Kg</td>
</tr>

<tr>
<td>Total</td>
<td>: Rp {{ number_format($administrasi->total_harga,0,',','.') }}</td>
</tr>

<tr>
<td>Status</td>
<td>: {{ $administrasi->status }}</td>
</tr>

</table>

<hr>

<p class="center">

Terima Kasih 😊

<br>

Semoga Harimu Menyenangkan

</p>

</body>

</html>
