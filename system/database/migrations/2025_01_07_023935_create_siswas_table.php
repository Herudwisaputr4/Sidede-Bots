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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('username'); // Untuk memastikan username tidak duplikat
            $table->string('nama')->nullable();
            $table->string('email')->nullable(); // Untuk memastikan email tidak duplikat
            $table->string('tempat_lahir'); // Menggunakan tipe tanggal
            $table->date('tanggal_lahir'); // Menggunakan tipe tanggal
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghuchu']);
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->bigInteger('nis')->unique(); // NIS harus unik
            $table->bigInteger('nisn')->unique(); // NISN harus unik
            $table->string('sekolah_asal')->nullable();
            $table->string('kelas')->nullable(); // Contoh: Kelas 1, 2, 3, dst.
            $table->string('wali_kelas')->nullable(); // Relasi ke tabel wali kelas jika ada
            $table->string('orang_tua')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->date('tahun_masuk')->nullable();
            $table->string('password');
            $table->string('foto_profil')->nullable(); // Enkripsi password di model/controller
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
