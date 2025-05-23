<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <form action="{{ url('admin/data-siswa') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <h2 class="main-title">Tambahkan Peserta Didik</h2>

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
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan email" required oninvalid="this.setCustomValidity('Harap isi email dengan benar')" oninput="setCustomValidity('')"  />
                        @error('email')
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
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-input" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
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
                        <label for="status" class="form-label">Status Siswa</label>
                        <select name="status" class="form-input" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak aktif</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" name="nis" id="nis" class="form-input" placeholder="Masukkan NIS" required oninvalid="this.setCustomValidity('Harap isi NIS dengan benar')" oninput="setCustomValidity('')" />
                        @error('nis')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-label-wrapper">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-input" placeholder="Masukkan NISN" required oninvalid="this.setCustomValidity('Harap isi NISN dengan benar')" oninput="setCustomValidity('')" />
                        @error('nisn')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                   <div class="form-label-wrapper">
                        <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
                        <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-input" placeholder="Masukkan kelas" required oninvalid="this.setCustomValidity('Harap isi kelas dengan benar')" oninput="setCustomValidity('')" />
                        @error('sekolah_asal')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-input" placeholder="Masukkan kelas" required oninvalid="this.setCustomValidity('Harap isi kelas dengan benar')" oninput="setCustomValidity('')" />
                        @error('kelas')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-label-wrapper">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" class="form-input mt-1 block w-full" placeholder="Masukkan nama wali kelas" required>
                        @error('wali_kelas')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-label-wrapper">
                        <label for="orang_tua" class="form-label">Orang Tua</label>
                        <input type="text" name="orang_tua" id="orang_tua" class="form-input" placeholder="Masukkan nama orang tua" required oninvalid="this.setCustomValidity('Harap isi nama orang tua dengan benar')" oninput="setCustomValidity('')" />
                        @error('orang_tua')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>                    

                    <div class="form-label-wrapper">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="tel" name="telepon" id="telepon" class="form-input" placeholder="Masukkan nomor telepon" required pattern="^\+?(\d.*){3,}$" oninvalid="this.setCustomValidity('Harap masukkan nomor telepon yang valid')" oninput="setCustomValidity('')" />
                        @error('telepon')
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
                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                        <input type="date" name="tahun_masuk" id="tahun_masuk" class="form-input" required />
                        @error('tahun_masuk')
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
                                 src="{{ url('public/siswa/' . ($siswa->foto_profil ?? 'https://bootdey.com/img/Content/avatar/avatar7.png')) }}" 
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

                    <!-- Submit Button -->
                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Tambah Peserta Didik</button>
                </div>
            </form>
        </div>
    </main>
</x-admin>
