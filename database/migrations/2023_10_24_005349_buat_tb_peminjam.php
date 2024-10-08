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
        Schema::create('tb_peminjam', function (Blueprint $table) {
            $table->id('id_pinjam')->unique();
            $table->bigInteger('id_buku');
            $table->bigInteger('id_member');
            $table->date('tanggal_pinjam', 100);
            $table->date('tanggal_kembali', 100);
            $table->string('status_pinjam', 100);
            $table->string('denda', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
