<?php

namespace App\Http\Controllers\MasterAdmin\DataAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter pencarian dari input form
        $search = $request->get('search');
    
      // Mengambil data admin berdasarkan pencarian, tanpa pagination
        $list_admin = Admin::when($search, function ($query, $search) {
            return $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('sekolah_asal', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%'); // Menambahkan pencarian berdasarkan nama
        })->paginate(10);

        
        // Menambahkan pagination    
        
        // Mengirimkan data ke view
        return view('master-admin.data-admin.index', compact('list_admin'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master-admin.data-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input termasuk foto profil
        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'sekolah_asal' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'foto_profil' => 'nullable|image|mimes:jpg|max:2048' // Validasi foto profil
        ]);

         // Mengambil nomor urut terakhir
    
        // Jika tidak ada admin, mulai dari nomor 1

        $admin = new admin();
        $admin->username = request('username');
        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->sekolah_asal = request('sekolah_asal');
        $admin->password = bcrypt(request('password'));
        
        $admin->handleUploadPoto();

        $admin->save();

        return redirect('master-admin/data-admin')->with('success', 'Admin berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::findOrFail($id); // Temukan admin berdasarkan ID
        return view('admin.show', compact('admin')); // Kirim ke view
    }

    /**
     * Show the form for editing the specified resource.
     */

     
    public function edit($id)
    {
        // Mencari admin berdasarkan ID
        $admin = admin::findOrFail($id);
    
        // Menampilkan form edit dengan data admin yang sudah ada
        return view('master-admin.data-admin.edit', compact('admin'));
    }


    public function dashboard()
    {
        $adminCount = Admin::count(); // Ambil total jumlah admin
        return view('dashboard', compact('adminCount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'sekolah_asal' => 'required|string|max:255',
            'password' => 'nullable|min:6',
            'foto_profil' => 'nullable|image|mimes:jpg|max:2048', // Validasi foto profil
        ]);

        // Mencari admin berdasarkan ID
        $admin = Admin::findOrFail($id);

        // Mengupdate data admin
        $admin->username = $request->username;
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->sekolah_asal = $request->sekolah_asal;

        // Jika password diisi, maka update password juga
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }

         // Update foto profil jika diunggah
        $admin->handleUploadPoto();

            $admin->save();

        // Mengarahkan ke halaman data-admin dengan pesan sukses
        return redirect()->route('data-admin.index')->with('success', 'Admin berhasil diperbarui');
    }
    /** 
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        if ($admin->delete()) {
            // Mengatur ulang nomor urut untuk seluruh data setelah penghapusan
            $admins = Admin::orderBy('id', 'desc')->get(); // Menggunakan 'id' sebagai pengurutan
            
            if ($admin->foto_profil) {
                $oldFilePath = public_path('uploads/foto_profil/' . $admin->foto_profil);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $admin->delete();

            return redirect()->route('data-admin.index')->with('success', 'Admin berhasil dihapus');
        }

        return redirect()->route('data-admin.index')->with('error', 'Gagal menghapus admin');
    }
}
