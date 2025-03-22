<?php

namespace App\Http\Controllers\MasterAdmin\DataSekolah;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Mengambil data sekolah berdasarkan pencarian, dengan pagination
        $list_sekolah = Sekolah::when($search, function ($query, $search) {
            return $query->where('nama_sekolah', 'like', '%' . $search . '%')
                ->orWhere('email_sekolah', 'like', '%' . $search . '%')
                ->orWhere('alamat_lengkap', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('master-admin.data-sekolah.index', compact('list_sekolah'));
    }

    public function create()
    {
        return view('master-admin.data-sekolah.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_sekolah' => 'required|string|max:255|unique:sekolahs,nama_sekolah',
            'npsn' => 'required|numeric|digits:8|unique:sekolahs,npsn',
            'email_sekolah' => 'required|email',
        ], [
            'nama_sekolah.required' => 'Nama sekolah wajib diisi.',
            'nama_sekolah.unique' => 'Nama sekolah sudah digunakan. Silakan gunakan nama lain.',
            'npsn.required' => 'NPSN wajib diisi.',
            'npsn.unique' => 'NPSN sudah digunakan. Silakan gunakan NPSN yang berbeda.',
            'npsn.numeric' => 'NPSN harus berupa angka.',
            'npsn.digits' => 'NPSN harus terdiri dari 8 digit angka.',
            'email_sekolah.required' => 'Email sekolah wajib diisi.',
            'email_sekolah.email' => 'Email sekolah harus berupa email yang valid.',
            'email_sekolah.unique' => 'Email sekolah sudah digunakan. Silakan gunakan email lain.',
        ]);                     

        $sekolah = new Sekolah();
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->npsn = $request->npsn;
        $sekolah->akreditasi = $request->akreditasi;
        $sekolah->kurikulum = $request->kurikulum;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        $sekolah->alamat_lengkap = $request->alamat_lengkap;
        $sekolah->email_sekolah = $request->email_sekolah;
        $sekolah->telepon_sekolah = $request->telepon_sekolah;
        $sekolah->status_sekolah= $request->status_sekolah;
        $sekolah->kepemilikan_sekolah = $request->kepemilikan_sekolah;
        $sekolah->keaktifan_sekolah = $request->keaktifan_sekolah;
        $sekolah->jumlah_pengajar = $request->jumlah_pengajar;
        $sekolah->jumlah_siswa = $request->jumlah_siswa;
        $sekolah->tahun_berdiri = $request->tahun_berdiri;
        $sekolah->ruang_kelas = $request->ruang_kelas;
        $sekolah->ruang_perpustakaan = $request->ruang_perpustakaan;
        $sekolah->ruang_laboratorium = $request->ruang_laboratorium;
        $sekolah->ruang_praktik = $request->ruang_praktik;
        $sekolah->ruang_pimpinan = $request->ruang_pimpinan;
        $sekolah->ruang_guru = $request->ruang_guru;
        $sekolah->ruang_ibadah = $request->ruang_ibadah;
        $sekolah->ruang_UKS = $request->ruang_UKS;
        $sekolah->ruang_toilet = $request->ruang_toilet;
        $sekolah->ruang_gudang = $request->ruang_gudang;
        $sekolah->ruang_olahraga = $request->ruang_olahraga;
        $sekolah->ruang_tu = $request->ruang_tu;
        $sekolah->ruang_konseling = $request->ruang_konseling;

        $sekolah->handleUploadFotoSekolah();
        $sekolah->handleUploadLogoSekolah();
        $sekolah->save();

        return redirect('master-admin/data-sekolah')->with('success', 'Sekolah berhasil ditambahkan');
    }

    public function show($id)
    {
        $data['sekolah'] = Sekolah::findOrFail($id);
        return view('master-admin.data-sekolah.show', $data);
    }

    public function edit($id)
    {
        $data['sekolah'] = Sekolah::findOrFail($id);
        return view('master-admin.data-sekolah.edit', $data);
    }


    public function update(Request $request, $id)
    {

        $sekolah = Sekolah::findOrFail($id);
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->npsn = $request->npsn;
        $sekolah->akreditasi = $request->akreditasi;
        $sekolah->kurikulum = $request->kurikulum;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        $sekolah->alamat_lengkap = $request->alamat_lengkap;
        $sekolah->email_sekolah = $request->email_sekolah;
        $sekolah->telepon_sekolah = $request->telepon_sekolah;
        $sekolah->status_sekolah = $request->status_sekolah;
        $sekolah->kepemilikan_sekolah = $request->kepemilikan_sekolah;
        $sekolah->keaktifan_sekolah = $request->keaktifan_sekolah;
        $sekolah->jumlah_pengajar = $request->jumlah_pengajar;
        $sekolah->jumlah_siswa = $request->jumlah_siswa;
        $sekolah->tahun_berdiri = $request->tahun_berdiri;
        $sekolah->ruang_kelas = $request->ruang_kelas;
        $sekolah->ruang_laboratorium = $request->ruang_laboratorium;
        $sekolah->ruang_praktik = $request->ruang_praktik;
        $sekolah->ruang_pimpinan = $request->ruang_pimpinan;
        $sekolah->ruang_guru = $request->ruang_guru;
        $sekolah->ruang_ibadah = $request->ruang_ibadah;
        $sekolah->ruang_UKS = $request->ruang_UKS;
        $sekolah->ruang_toilet = $request->ruang_toilet;
        $sekolah->ruang_gudang = $request->ruang_gudang;
        $sekolah->ruang_olahraga = $request->ruang_olahraga;
        $sekolah->ruang_tu = $request->ruang_tu;
        $sekolah->ruang_konseling = $request->ruang_konseling;
        $sekolah->update($request->all());

         // Handle Upload Foto dan Logo
         $sekolah->handleUploadFotoSekolah();
         $sekolah->handleUploadLogoSekolah();
 
         $sekolah->save(); 

        return redirect()->route('data-sekolah.index')->with('success', 'Sekolah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $sekolah = Sekolah::findOrFail($id);

        // Hapus file terkait jika ada
        if ($sekolah->foto_sekolah) {
            $fotoPath = public_path('uploads/foto_sekolah/' . $sekolah->foto_sekolah);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        if ($sekolah->logo_sekolah) {
            $logoPath = public_path('uploads/logo_sekolah/' . $sekolah->logo_sekolah);
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
        }

        $sekolah->delete();

        return redirect()->route('data-sekolah.index')->with('success', 'Data Sekolah berhasil dihapus');
    }

    public function dashboard()
    {
        $sekolahCount = Sekolah::count();
        return view('dashboard', compact('sekolahCount'));
    }
}
    
