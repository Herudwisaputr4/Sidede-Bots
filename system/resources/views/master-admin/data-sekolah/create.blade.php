<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk data sekolah --}}
            <form action="{{ url('master-admin/data-sekolah/') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <h2 class="main-title">Tambahkan Sekolah</h2>

                    <div class="form-label-wrapper">
                        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-input" placeholder="Masukkan nama sekolah"
                            required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="npsn" class="form-label">NPSN</label>
                        <input type="integer" name="npsn" class="form-input" placeholder="Masukkan NPSN" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="akreditasi" class="form-label">Akreditasi</label>
                        <select name="akreditasi" class="form-input">
                            <option value="" disabled selected>Pilih Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kurikulum" class="form-label">Kurikulum</label>
                        <select name="kurikulum" class="form-input" required>
                            <option value="Kurikulum KTSP" selected>Kurikulum KTSP</option>
                            <option value="Kurikulum K-13" selected>Kurikulum K-13</option>
                            <option value="Kurikulum Merdeka" selected>Kurikulum Merdeka</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                        <input type="text" name="kepala_sekolah" class="form-input" placeholder="Masukkan kepala sekolah" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" class="form-input" placeholder="Masukkan alamat lengkap" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="email_sekolah" class="form-label">Email Sekolah</label>
                        <input type="email" name="email_sekolah" class="form-input" placeholder="Masukkan email sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="telepon_sekolah" class="form-label">Telepon Sekolah</label>
                        <input type="number" name="telepon_sekolah" class="form-input" placeholder="Masukkan telepon sekolah" required />
                    </div>
                    
                    <div class="form-label-wrapper">
                        <label for="status_sekolah" class="form-label">Status Sekolah</label>
                        <select name="status_sekolah" class="form-input" required>
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kepemilikan_sekolah" class="form-label">Status Kepemilikan</label>
                        <select name="kepemilikan_sekolah" class="form-input" required>
                            <option value="Pemerintah">Pemerintah</option>
                            <option value="Yayasan">Yayasan</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="keaktifan_sekolah" class="form-label">Status Keaktifan</label>
                        <select name="keaktifan_sekolah" class="form-input" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_pengajar" class="form-label">Jumlah Pengajar</label>
                        <input type="integer" name="jumlah_pengajar" class="form-input" placeholder="Masukkan jumlah pengajar" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                        <input type="integer" name="jumlah_siswa" class="form-input" placeholder="Masukkan Peserta Didik" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="integer" name="tahun_berdiri" class="form-input" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="data_sapras" class="form-label" style="margin-bottom: 1rem; color: #333; font-weight: bold;">Data Sapras</label>
                    
                        <!-- Container untuk grid form -->
                        <div class="form-grid" style="display: flex; flex-wrap: wrap; gap: 1rem;">
                    
                            <!-- Setiap form-item -->
                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_kelas" style="margin-bottom: 0.5rem; color: #333;">Ruang Kelas</label>
                                <input type="number" name="ruang_kelas" placeholder="Masukkan jumlah ruang kelas" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>
                    
                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_perpustakaan  " style="margin-bottom: 0.5rem; color: #333;">Ruang Perpustakaan</label>
                                <input type="number" name="ruang_perpustakaan" placeholder="Masukkan jumlah ruang perpustakaan" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>
                    
                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_laboratorium" style="margin-bottom: 0.5rem; color: #333;">Ruang Laboratorium</label>
                                <input type="number" name="ruang_laboratorium" placeholder="Masukkan jumlah ruang laboratorium" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_praktik" style="margin-bottom: 0.5rem; color: #333;">Ruang praktik</label>
                                <input type="number" name="ruang_praktik" placeholder="Masukkan jumlah ruang praktik" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_pimpinan" style="margin-bottom: 0.5rem; color: #333;">Ruang pimpinan</label>
                                <input type="number" name="ruang_pimpinan" placeholder="Masukkan jumlah ruang pimpinan" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_guru" style="margin-bottom: 0.5rem; color: #333;">Ruang guru</label>
                                <input type="number" name="ruang_guru" placeholder="Masukkan jumlah ruang guru" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_ibadah" style="margin-bottom: 0.5rem; color: #333;">Ruang ibadah</label>
                                <input type="number" name="ruang_ibadah" placeholder="Masukkan jumlah ruang ibadah" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_UKS" style="margin-bottom: 0.5rem; color: #333;">Ruang UKS</label>
                                <input type="number" name="ruang_UKS" placeholder="Masukkan jumlah ruang UKS" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_toilet" style="margin-bottom: 0.5rem; color: #333;">Ruang toilet</label>
                                <input type="number" name="ruang_toilet" placeholder="Masukkan jumlah ruang toilet" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_gudang" style="margin-bottom: 0.5rem; color: #333;">Ruang gudang</label>
                                <input type="number" name="ruang_gudang" placeholder="Masukkan jumlah ruang gudang" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_olahraga" style="margin-bottom: 0.5rem; color: #333;">Ruang olahraga</label>
                                <input type="number" name="ruang_olahraga" placeholder="Masukkan jumlah ruang olahraga" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_tu" style="margin-bottom: 0.5rem; color: #333;">Ruang TU</label>
                                <input type="number" name="ruang_tu" placeholder="Masukkan jumlah ruang TU" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>

                            <div class="sapras-group" style="flex: 1 1 calc(50% - 1rem);">
                                <label for="ruang_konseling" style="margin-bottom: 0.5rem; color: #333;">Ruang konseling</label>
                                <input type="number" name="ruang_konseling" placeholder="Masukkan jumlah ruang konseling" 
                                    style="padding: 0.5rem; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                            </div>
                    
                            <div class="form-label-wrapper">
                                <label for="foto_sekolah" style="flex: pointer; padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; font-weight: bold;">
                                    Masukan Foto Sekolah
                                </label>
                                <input type="file" name="foto_sekolah" id="foto_sekolah" class="form-control" style="display: none;" accept="image/*">
                                <p id="file-name-sekolah" style="margin-top: 10px; color: #666; font-size: 14px;">Belum ada gambar yang dipilih</p>
                                <img id="foto-sekolah-preview" src="{{ url('public/fotosekolah' . ($sekolah->foto_sekolah ?? 'images/default-sekolah.jpg')) }}" 
                                     style="width: 50%; border-radius: 4%; display: block;">
                            </div>
                            
                            <div class="form-label-wrapper">
                                <label for="logo_sekolah" style="flex: pointer; padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; font-weight: bold;">
                                    Masukan Logo Sekolah
                                </label>
                                <input type="file" name="logo_sekolah" id="logo_sekolah" class="form-control" style="display: none;" accept="image/*">
                                <p id="file-name-logo" style="margin-top: 10px; color: #666; font-size: 14px;">Belum ada gambar yang dipilih</p>
                                <img id="logo-sekolah-preview" src="{{ url('public/logosekolah' . ($sekolah->logo_sekolah ?? 'images/default-logo.jpg')) }}" 
                                     style="width: 25%; border-radius: 4%; display: block;">
                            </div>                            
                            
                            <script>
                                // Pratinjau Foto Sekolah
                                document.getElementById('foto_sekolah').addEventListener('change', function() {
                                    const file = this.files[0];
                                    const preview = document.getElementById('foto-sekolah-preview');
                                    const fileName = document.getElementById('file-name-sekolah');
                                
                                    if (file) {
                                        fileName.textContent = file.name;
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            preview.src = e.target.result;
                                            preview.style.display = 'block';  // Show the preview image
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        fileName.textContent = 'Belum ada gambar yang dipilih';
                                        preview.style.display = 'none';  // Hide the preview image
                                    }
                                });
                            
                                // Pratinjau Logo Sekolah
                                document.getElementById('logo_sekolah').addEventListener('change', function() {
                                    const file = this.files[0];
                                    const preview = document.getElementById('logo-sekolah-preview');
                                    const fileName = document.getElementById('file-name-logo');
                                
                                    if (file) {
                                        fileName.textContent = file.name;
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            preview.src = e.target.result;
                                            preview.style.display = 'block';  // Show the preview image
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        fileName.textContent = 'Belum ada gambar yang dipilih';
                                        preview.style.display = 'none';  // Hide the preview image
                                    }
                                });
                            </script>                            
                        </div>
                    </div>
                   
                    <style>
                        /* Aturan default (desktop) */
                        .form-grid {
                            display: flex;
                            flex-wrap: wrap;
                            gap: 1rem;
                        }
                    
                        .sapras-group {
                            flex: 1 1 calc(50% - 1rem); /* Dua kolom */
                        }
                    
                        /* Responsiveness untuk layar kecil */
                        @media (max-width: 768px) {
                            .sapras-group {
                                flex: 1 1 100%; /* Satu kolom */
                            }
                        }
                    </style>               

                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Tambah Sekolah</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>