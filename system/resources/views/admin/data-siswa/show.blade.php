<x-admin>
    <main class="main users chart-page" id="skip-target" style="background-color: #f8f9fa; font-family: Arial, sans-serif;">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="form">
                <h2 class="main-title" style="color: #d12525; text-align: center; margin-bottom: 20px;">Detail Siswa</h2>

                <!-- Student Info Table -->
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tbody>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Username</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->username }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Nama</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->nama }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Email</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->email }}</td>
                        </tr>

                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">tempat_lahir</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->tempat_lahir }}</td>
                        </tr>

                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Tanggal Lahir</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Jenis Kelamin</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Agama</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->agama }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Status Siswa</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->status }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">NIS</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->nis }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">NISN</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Asal Sekolah</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->sekolah_asal }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Kelas</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->kelas }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Wali Kelas</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->wali_kelas }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Orang Tua</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->orang_tua }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Telepon</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->telepon }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Alamat</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $siswa->alamat }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Tahun Masuk</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($siswa->tahun_masuk)->format('Y') }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Foto Profil -->
                <div class="form-label-wrapper">
                    <label class="form-label">Foto Profil</label>
                    <img src="{{ url("public/$siswa->foto_profil") }}" 
                    alt="Foto sekolah {{ $siswa->nama }}" 
                    loading="lazy" 
                    style="width: 50%; border-radius: 4%; display: block; border: 2px solid #d12525;">               
                </div>

                <!-- Back Button -->
                <div style="text-align: center;">
                    <a href="{{ url('admin/data-siswa') }}" class="primary-default-btn form-btn" style="margin-top: 20px; background-color: #d12525; color: white;">Kembali</a>
                </div>
            </div>
        </div>
    </main>
</x-admin>
