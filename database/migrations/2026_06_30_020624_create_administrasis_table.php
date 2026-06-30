<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan', 20);
            $table->string('nama_pelanggan');
            $table->date('tanggal_pengantaran');
            $table->date('tanggal_pengambilan');
            $table->decimal('jumlah_kg', 5, 2);
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrasis');
    }
};
