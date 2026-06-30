<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrasi;
use App\Models\Pelanggan;
use Barryvdh\DomPDF\Facade\Pdf;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrasis = Administrasi::all();
        return view('administrasis.index', compact('administrasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $last = Administrasi::latest()->first();

        if ($last) {
            $number = (int) substr($last->kode_pesanan, 2) + 1;
        } else {
            $number = 1;
        }

        $kode = 'PS' . str_pad($number, 3, '0', STR_PAD_LEFT);

        $pelanggans = Pelanggan::all();
        return view('administrasis.create', compact('kode','pelanggans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pesanan' => 'required',
            'nama_pelanggan' => 'required',
            'tanggal_pengantaran' => 'required',
            'tanggal_pengambilan' => 'required',
            'jumlah_kg' => 'required|numeric',
            'total_harga' => 'required|numeric',
        ]);

        Administrasi::create($request->all());

        return redirect()->route('administrasis.index')
            ->with('success', 'Data administrasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $administrasi = Administrasi::findOrFail($id);
        return view('administrasis.edit', compact('administrasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_pesanan' => 'required',
            'nama_pelanggan' => 'required',
            'tanggal_pengantaran' => 'required',
            'tanggal_pengambilan' => 'required',
            'jumlah_kg' => 'required|numeric',
            'total_harga' => 'required|numeric',
        ]);

        $administrasi = Administrasi::findOrFail($id);
        $administrasi->update($request->all());

        return redirect()->route('administrasis.index')
            ->with('success', 'Data administrasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = Administrasi::findOrFail($id);
        $administrasi->delete();

        return redirect()->route('administrasis.index')
            ->with('success', 'Data administrasi berhasil dihapus');
    }
    public function struk($id)
    {
        $administrasi = Administrasi::findOrFail($id);

        return view('administrasis.struk', compact('administrasi'));
    }

    public function laporan()
    {
        $administrasis = Administrasi::all();
        return view('administrasis.laporan', compact('administrasis'));
    }

    public function pdf()
    {
        $administrasis = Administrasi::all();

        $pdf = Pdf::loadView('administrasis.pdf', compact('administrasis'));

        return $pdf->download('Laporan_Laundry.pdf');
    }
}
