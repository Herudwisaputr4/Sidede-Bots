<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class sekolah extends Model
{
    protected $table = "sekolahs";
    protected $primaryKey = "id"; // Properti 'primaryKey' menggunakan 'K' kapital.
    public $timestamps = true; // Default pengaturan timestamps.

    // Tentukan kolom yang dapat diisi secara massal.
    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'akreditasi',
        'kurikulum',
        'alamat_lengkap',
        'email_sekolah',
        'telepon_sekolah',
        'status_sekolah',
        'kepemilikan_sekolah',
        'keaktifan_sekolah',
        'jumlah_pengajar',
        'jumlah_siswa',
        'tahun_berdiri',
        'ruang_kelas',
        'ruang_perpustakaan',
        'ruang_laboratorium',
        'ruang_praktik',
        'ruang_pimpinan',
        'ruang_guru',
        'ruang_ibadah',
        'ruang_UKS',
        'ruang_toilet',
        'ruang_gudang',
        'ruang_olahraga',
        'ruang_tu',
        'ruang_konseling',
        'foto_sekolah',
        'logo_sekolah',
        // Tambahkan kolom lain yang dibutuhkan.
    ];

    public function handleUploadFotoSekolah()
    {
        if (request()->hasFile('foto_sekolah')) {
            $foto_sekolah = request()->file('foto_sekolah');
            $destination = "fotosekolah";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $foto_sekolah->extension();
            $url = $foto_sekolah->storeAs($destination, $filename);
            $this->foto_sekolah = "app/" . $url;
        }
    }

    public function handleUploadLogoSekolah()
    {
        if (request()->hasFile('logo_sekolah')) {
            $logo_sekolah = request()->file('logo_sekolah');
            $destination = "logosekolah"; // Perbaikan konsistensi nama folder.
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $logo_sekolah->extension();
            $url = $logo_sekolah->storeAs($destination, $filename);
            $this->logo_sekolah = "app/" . $url;
        }
    }
}
