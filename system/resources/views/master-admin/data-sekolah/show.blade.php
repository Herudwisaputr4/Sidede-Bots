<x-master-admin>
    <main class="main users chart-page" id="skip-target" style="background-color: #f8f9fa; font-family: Arial, sans-serif;">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="form">
                <h2 class="main-title" style="color: #d12525; text-align: center; margin-bottom: 20px;">Detail Sekolah</h2>

                <!-- School Info Table -->
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tbody>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Nama Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->nama_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">NPSN</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->npsn }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Akreditasi</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->akreditasi }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Kurikulum</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->kurikulum }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Kepala Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->kepala_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Alamat Lengkap</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->alamat_lengkap }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Email Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->email_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Telepon Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->telepon_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Status Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->status_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Status Kepemilikan</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->kepemilikan_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Status Keaktifan</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->keaktifan_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Jumlah Pengajar</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->jumlah_pengajar }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Jumlah Siswa</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->jumlah_siswa }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Tahun Berdiri</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->tahun_berdiri }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Data Sapras Table -->
                <div class="form-label-wrapper" style="margin-bottom: 15px;">
                    <h3 style="margin-bottom: 1rem; color: #d12525;">Data Sapras</h3>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Kelas</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_kelas }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Perpustakaan</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_perpustakaan }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Laboratorium</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_laboratorium }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Praktik</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_praktik }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Pimpinan</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_pimpinan }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Guru</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_guru }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Ibadah</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_ibadah }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang UKS</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_UKS }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Toilet</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_toilet }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Gudang</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_gudang }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Olahraga</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_olahraga }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang TU</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_tu }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Ruang Konseling</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $sekolah->ruang_konseling }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Photos -->
               <!-- Foto Sekolah -->
                <div class="form-label-wrapper">
                    <label class="form-label">Foto Sekolah</label>
                    <img src="{{ url("public/$sekolah->foto_sekolah") }}" 
                    alt="Foto sekolah {{ $sekolah->nama_sekolah }}" 
                    loading="lazy" 
                    style="width: 50%; border-radius: 4%; display: block; border: 2px solid #d12525;">               
                </div>

                <!-- Logo Sekolah -->
                <div class="form-label-wrapper">
                    <label class="form-label">Logo Sekolah</label>
                    <img src="{{ url("public/$sekolah->logo_sekolah") }}"
                    alt="Logo sekolah {{ $sekolah->nama_sekolah }}" 
                    loading="lazy" 
                        style="width: 25%; border-radius: 4%; display: block; border: 2px solid #d12525;">
                </div>

    
                <a href="{{ url('master-admin/data-sekolah') }}" class="primary-default-btn form-btn" style="margin-top: 20px; background-color: #d12525; color: white;">Kembali</a>
            </div>
        </div>
    </main>
</x-master-admin>
