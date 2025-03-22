<x-admin>

    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <form action="{{ url('admin/data-guru') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <h2 class="main-title">Tambahkan Guru</h2>

                    <!-- Data Pribadi -->
                    <div class="form-section">
                        <h3 class="section-title">Data Pribadi</h3>

                        <div class="form-label-wrapper">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-input" placeholder="Masukkan username" required oninvalid="this.setCustomValidity('Harap isi username dengan benar')" oninput="setCustomValidity('')" />
                            @error('username')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-input" placeholder="Masukkan nama lengkap" required oninvalid="this.setCustomValidity('Harap isi nama dengan benar')" oninput="setCustomValidity('')" />
                            @error('nama')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="tempat_lahir" class="form-label">tempat_lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-input" placeholder="Masukkan tempat lahir lengkap" required oninvalid="this.setCustomValidity('Harap isi tempat_lahir dengan benar')" oninput="setCustomValidity('')" />
                            @error('tempat_lahir')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-input" required oninvalid="this.setCustomValidity('Harap isi tanggal lahir dengan benar')" oninput="setCustomValidity('')" />
                            @error('tanggal_lahir')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" class="form-input" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <div class="form-label-wrapper">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-input" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-label-wrapper">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan email" required oninvalid="this.setCustomValidity('Harap isi email dengan benar')" oninput="setCustomValidity('')"  />
                            @error('email')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-input" placeholder="Masukkan alamat lengkap" required rows="4"></textarea>
                            @error('alamat')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="password" class="form-label">Kata sandi</label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="Masukkan sandi" required oninvalid="this.setCustomValidity('harap ini password dengan benar')" oninput="setCustomValidity('')"  />
                            @error('password')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto Profil -->
                        <div class="form-label-wrapper">
                            <label for="foto_profil" style="display: block; font-weight: bold; margin-bottom: 10px;">Foto Profil</label>
                            <div id="image-preview">
                                <img id="preview-img" 
                                    src="{{ url('public/guru/' . ($siswa->foto_profil ?? 'https://bootdey.com/img/Content/avatar/avatar7.png')) }}" 
                                    style="display: block; width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                            </div>
                            <!-- Tombol Upload Kustom -->
                            <label for="foto_profil" style="flex: pointer; padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; font-weight: bold;">
                                Pilih Gambar
                            </label>
                            <input type="file" name="foto_profil" id="foto_profil" class="form-control" style="display: none;" accept="image/*">
                        
                            <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;"></p>

                            <!-- Nama File dan Batas Ukuran -->
                            <p id="file-name" style="margin-top: 5x; color: #666; font-size: 14px;"></p>
                            <p style="color: #999; font-size: 12px; margin-top: 5px;">Ukuran file maksimal: 2 MB</p>
                        </div>
                        
                        <script>
                            document.getElementById('foto_profil').addEventListener('change', function() {
                                const file = this.files[0];
                                const fileName = document.getElementById('file-name');
                                const previewImg = document.getElementById('preview-img');
                
                                if (file) {
                                    if (file.size > 2 * 1024 * 1024) {
                                        fileName.textContent = 'File terlalu besar. Maksimal 2 MB.';
                                        previewImg.style.display = 'none';
                                        this.value = '';
                                    } else {
                                        fileName.textContent = file.name;
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            previewImg.src = e.target.result;
                                            previewImg.style.display = 'block';
                                        };
                                        reader.readAsDataURL(file);
                                    }
                                } else {
                                    fileName.textContent = 'Belum ada gambar yang dipilih';
                                    previewImg.style.display = 'none';
                                }
                            });
                        </script>
                    </div>

                    <div class="form">
                        <h2 class="main-title">Data Kepegawaian</h2>
                    
                        <!-- Data Kepegawaian -->
                        <div class="form-label-wrapper">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" id="nip" name="nip" class="form-input" placeholder="Masukkan NIP lengkap" required oninvalid="this.setCustomValidity('Harap isi NIP dengan benar')" oninput="setCustomValidity('')" />
                            @error('nip')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="NUPTK" class="form-label">NUPTK</label>
                            <input type="text" id="NUPTK" name="NUPTK" class="form-input" placeholder="Masukkan NUPTK lengkap" required oninvalid="this.setCustomValidity('Harap isi NUPTK dengan benar')" oninput="setCustomValidity('')" />
                            @error('NUPTK')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-wrapper">
                            <label for="NRG" class="form-label">NRG</label>
                            <input type="text" id="NRG" name="NRG" class="form-input" placeholder="Masukkan NRG lengkap" required oninvalid="this.setCustomValidity('Harap isi NRG dengan benar')" oninput="setCustomValidity('')" />
                            @error('NRG')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-label-wrapper">
                            <label for="status" class="form-label">Status Guru</label>
                            <select name="status" class="form-input" required>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak aktif</option>
                            </select>
                        </div>

                        <div class="form-label-wrapper">
                            <label for="status" class="form-label">Jabatan</label>
                            <select name="status" class="form-input" required>
                                <option value="Aktif">Kepala Sekolah</option>
                                <option value="Tidak Aktif">Wakil Kepala Sekolah</option>
                                <option value="Tidak Aktif">Kesiswaan</option>
                                <option value="Tidak Aktif">Bendahara Sekolah</option>
                                <option value="Tidak Aktif">Operator Sekolah</option>
                                <option value="Tidak Aktif">Petugas Perpustakaan</option>
                                <option value="Tidak Aktif">Guru Pembimbing Konseling</option>
                                <option value="Tidak Aktif">Sarana Dan Prasarana</option>
                                <option value="Tidak Aktif">Pembina Ekstrakulikuler</option>
                            </select>
                        </div>

                        <div class="form-label-wrapper">
                            <label for="status" class="form-label">Mata Pelajaran</label>
                            <select name="status" class="form-input" required>
                                <option value="Aktif">Pendidikan Agama dan Budi Pekerti</option>
                                <option value="Tidak Aktif">Bahasa Indonesia</option>
                                <option value="Tidak Aktif">Matematika</option>
                                <option value="Tidak Aktif">Ilmu Pengetahuan Alam</option>
                                <option value="Tidak Aktif">Ilmu Pengetahuan Sosial</option>
                                <option value="Tidak Aktif">Seni dan Budaya</option>
                                <option value="Tidak Aktif">Pendidikan Jasmani dan Olahraga</option>
                                <option value="Tidak Aktif">P5</option>
                                <option value="Tidak Aktif">Bahasa Inggris</option>
                            </select>
                        </div>

                        <div class="form-label-wrapper">
                            <label for="tanggal_pengankatan" class="form-label">Tanggal Pengankatan</label>
                            <input type="date" id="tanggal_pengankatan" name="tanggal_pengankatan" class="form-input" required oninvalid="this.setCustomValidity('Harap isi tanggal pengankatan dengan benar')" oninput="setCustomValidity('')" />
                            @error('tanggal_pengankatan')
                                <div style="color: red; font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>



                        

                
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Tambah Peserta Didik</button>
                </div>
            </form>
        </div>
    </main>
</x-admin>