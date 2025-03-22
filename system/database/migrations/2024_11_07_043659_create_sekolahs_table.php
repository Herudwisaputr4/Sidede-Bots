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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->bigInteger('npsn')->unique();
            $table->enum('akreditasi', ['A', 'B', 'C', 'Tidak terakreditasi'])->nullable();
            $table->enum('kurikulum', ['Kurikulum KTSP', 'Kurikulum K-13', 'Kurikulum Merdeka'])->default('Kurikulum Merdeka');
            $table->string('kepala_sekolah')->nullable();
            $table->string('alamat_lengkap');
            $table->string('email_sekolah')->unique();
            $table->bigInteger('telepon_sekolah')->unsigned();
            $table->enum('status_sekolah', ['Negeri', 'Swasta'])->default('Negeri');
            $table->enum('kepemilikan_sekolah', ['Pemerintah', 'Yayasan'])->default('Pemerintah');
            $table->enum('keaktifan_sekolah', ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->integer('tahun_berdiri')->nullable(); // Ganti number dengan integer

            // Kolom untuk ruang-ruang sekolah
            $table->integer('ruang_kelas')->nullable(); // Jumlah ruang kelas
            $table->integer('ruang_perpustakaan')->nullable(); // Jumlah ruang perpustakaan
            $table->integer('ruang_laboratorium')->nullable(); // Jumlah ruang laboratorium
            $table->integer('ruang_praktik')->nullable(); // Jumlah ruang praktik
            $table->integer('ruang_pimpinan')->nullable(); // Jumlah ruang pimpinan
            $table->integer('ruang_guru')->nullable(); // Jumlah ruang guru
            $table->integer('ruang_ibadah')->nullable(); // Jumlah ruang ibadah
            $table->integer('ruang_UKS')->nullable(); // Jumlah ruang UKS
            $table->integer('ruang_toilet')->nullable(); // Jumlah ruang toilet
            $table->integer('ruang_gudang')->nullable(); // Jumlah ruang gudang
            $table->integer('ruang_olahraga')->nullable(); // Jumlah ruang olahraga
            $table->integer('ruang_tu')->nullable(); // Jumlah ruang TU (Tata Usaha)
            $table->integer('ruang_konseling')->nullable(); // Jumlah ruang konseling
            $table->string('foto_sekolah')->nullable();
            $table->string('logo_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
