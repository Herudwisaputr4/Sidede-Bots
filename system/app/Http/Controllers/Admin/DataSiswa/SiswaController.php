<?php

namespace App\Http\Controllers\Admin\DataSiswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter pencarian dari input form
        $search = $request->get('search');

        // Mengambil data admin berdasarkan pencarian, tanpa pagination
        $list_siswa = Siswa::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
                ->orWhere('tanggal_lahir', 'like', '%' . $search . '%')
                ->orWhere('nis', 'like', '%' . $search . '%')
                ->orWhere('nisn', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('sekolah', 'like', '%' . $search . '%')
                ->orWhere('kelas', 'like', '%' . $search . '%')
                ->orWhere('wali_kelas', 'like', '%' . $search . '%')
                ->orWhere('orang_tua', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%'); // Menambahkan pencarian berdasarkan nama
        })->paginate(10);

        // Menambahkan pagination    
        
        // Mengirimkan data ke view
        return view('admin.data-siswa.index', compact('list_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data-siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Membuat instance baru siswa
        $siswa = new Siswa();
        $siswa->username = $request->username;
        $siswa->nama = $request->nama;
        $siswa->email = $request->email;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->status = $request->status;
        $siswa->nis = $request->nis;
        $siswa->nisn = $request->nisn;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->kelas = $request->kelas;
        $siswa->wali_kelas = $request->wali_kelas;
        $siswa->orang_tua = $request->orang_tua;
        $siswa->alamat = $request->alamat;
        $siswa->telepon = $request->telepon;
        $siswa->tahun_masuk = $request->tahun_masuk;
        $siswa->password =  bcrypt(request('password'));
        $siswa->handleUploadPotoSiswa();

        // Simpan data siswa
        $siswa->save();

        // Redirect dengan pesan sukses
        return redirect()->route('data-siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.data-siswa.show', compact('siswa'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari admin berdasarkan ID
        $siswa = Siswa::findOrFail($id);
    
        // Menampilkan form edit dengan data admin yang sudah ada
        return view('admin.data-siswa.edit', compact('siswa'));
    }

    public function dashboard()
    {
        $siswaCount = Siswa::count(); // Ambil total jumlah admin
        return view('dashboard', compact('siswaCount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mencari siswa berdasarkan ID
        $siswa = Siswa::findOrFail($id);
        
        // Mengupdate data admin
        $siswa->username = $request->username;
        $siswa->nama = $request->nama;
        $siswa->email = $request->email;
        $siswa->tempat_lahir = $request->tempat_lahir; 
        $siswa->tanggal_lahir = $request->tanggal_lahir; 
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->status = $request->status;
        $siswa->nis = $request->nis;
        $siswa->nisn = $request->nisn;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->kelas = $request->kelas;
        $siswa->wali_kelas = $request->wali_kelas;
        $siswa->orang_tua = $request->orang_tua;
        $siswa->telepon = $request->telepon;
        $siswa->tahun_masuk = $request->tahun_masuk;
        if(request('password')) $siswa->password = request('password');
        $siswa->handleUploadPotoSiswa();

        $siswa->save();

    // Mengarahkan ke halaman data-admin dengan pesan sukses
    return redirect()->route('data-siswa.index')->with('success', 'Siswa berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        if ($siswa->delete()) {
            // Mengatur ulang nomor urut untuk seluruh data setelah penghapusan
            $siswas = Siswa::orderBy('id', 'desc')->get(); // Menggunakan 'id' sebagai pengurutan
            
            if ($siswa->foto_profil) {
                $oldFilePath = public_path('uploads/foto_profil/' . $siswa->foto_profil);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $siswa->delete();

            return redirect()->route('data-siswa.index')->with('success', 'Siswa berhasil dihapus');
        }

        return redirect()->route('data-siswa.index')->with('error', 'Gagal menghapus Siswa');
    }
}

