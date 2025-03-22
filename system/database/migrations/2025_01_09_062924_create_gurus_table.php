<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghuchu']);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('password');
            $table->string('foto_profil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
