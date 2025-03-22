<?php

namespace App\Http\Controllers\Admin\DataGuru;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter pencarian dari input form
        $search = $request->get('search');

        // Mengambil data admin berdasarkan pencarian, tanpa pagination
        $list_guru = Guru::when($search, function ($query, $search) {
            return $query->where('nip', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
                ->orWhere('tanggal_lahir', 'like', '%' . $search . '%')
                ->orWhere('agama', 'like', '%' . $search . '%')
                ->orWhere('jenis_kelamin', 'like', '%' . $search . '%')
                ->orWhere('status_guru', 'like', '%' . $search . '%')
                ->orWhere('sekolah', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%');
        })->paginate(10);

        // Menambahkan pagination    
        
        // Mengirimkan data ke view
        return view('admin.data-guru.index', compact('list_guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data-guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Membuat instance baru siswa
        $guru = new Guru();
        $guru->username = $request->username;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->agama = $request->agama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->status = $request->status;
        $guru->email = $request->email;
        $guru->alamat = $request->alamat;
        $guru->password =  bcrypt(request('password'));
        $guru->handleUploadPotoGuru();
        // Simpan data siswa
        $guru->save();

        // Redirect dengan pesan sukses
        return redirect()->route('data-guru.index')->with('success', 'Data Guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.data-guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari admin berdasarkan ID
        $guru = Guru::findOrFail($id);
    
        // Menampilkan form edit dengan data admin yang sudah ada
        return view('admin.data-guru.edit', compact('guru'));
    }

    public function dashboard()
    {
        $guruCount = Guru::count(); // Ambil total jumlah admin
        return view('dashboard', compact('guruCount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        
        // Mencari siswa berdasarkan ID
        $guru = Guru::findOrFail($id);

        $guru = new Guru();
        $guru->username = $request->username;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->agama = $request->agama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->status = $request->status;
        $guru->email = $request->email;
        $guru->alamat = $request->alamat;
        if(request('password')) $guru->password = request('password');
        $guru->handleUploadPotoGuru();

        // Simpan data siswa
        $guru->save();

        // Mengarahkan ke halaman data-admin dengan pesan sukses
    return redirect()->route('data-guru.index')->with('success', 'Guru berhasil diperbarui');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->delete()) {
            // Mengatur ulang nomor urut untuk seluruh data setelah penghapusan
            $gurus = Guru::orderBy('id', 'desc')->get(); // Menggunakan 'id' sebagai pengurutan
            
            if ($guru->foto_profil) {
                $oldFilePath = public_path('uploads/foto_profil/' . $guru->foto_profil);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $guru->delete(); 

            return redirect()->route('data-guru.index')->with('success', 'Guru berhasil dihapus');
        }

        return redirect()->route('data-guru.index')->with('error', 'Gagal menghapus Guru');
    }
}
