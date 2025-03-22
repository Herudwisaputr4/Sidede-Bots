<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <form action="{{ url('admin/data-siswa/' . $siswa->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form">
                    <h2 class="main-title">Edit Peserta Didik</h2>

                    <div style="margin-bottom: 20px;">
                        <label for="username" style="font-weight: bold; display: block; margin-bottom: 8px;">Username:</label>
                        <input type="text" id="username" name="username" value="{{ old('username', $siswa->username) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi username dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('username')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="nama" style="font-weight: bold; display: block; margin-bottom: 8px;">Nama:</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi nama dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('nama')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="email" style="font-weight: bold; display: block; margin-bottom: 8px;">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $siswa->email) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi email dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('email')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="tempat_lahir" style="font-weight: bold; display: block; margin-bottom: 8px;">tempat_lahir:</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi tempat_lahir dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('tempat_lahir')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="tanggal_lahir" style="font-weight: bold; display: block; margin-bottom: 8px;">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi tanggal lahir dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('tanggal_lahir')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="jenis_kelamin" style="font-weight: bold; display: block; margin-bottom: 8px;">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="agama" style="font-weight: bold; display: block; margin-bottom: 8px;">Agama:</label>
                        <select name="agama" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                            <option value="Islam" {{ $siswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $siswa->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $siswa->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $siswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $siswa->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghuchu" {{ $siswa->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="status" style="font-weight: bold; display: block; margin-bottom: 8px;">Status Siswa:</label>
                        <select name="status" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                            <option value="Aktif" {{ $siswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ $siswa->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="nis" style="font-weight: bold; display: block; margin-bottom: 8px;">NIS:</label>
                        <input type="text" name="nis" id="nis" value="{{ old('nis', $siswa->nis) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi NIS dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('nis')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="nisn" style="font-weight: bold; display: block; margin-bottom: 8px;">NISN:</label>
                        <input type="text" name="nisn" id="nisn" value="{{ old('nisn', $siswa->nisn) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            oninvalid="this.setCustomValidity('Harap isi NISN dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('nisn')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="sekolah_asal" style="font-weight: bold; display: block; margin-bottom: 8px;">Asal Sekolah</label>
                        <input type="text" name="sekolah_asal" id="sekolah_asal" value="{{ old('sekolah_asal', $siswa->sekolah_asal) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            placeholder="Masukkan asal sekolah" oninvalid="this.setCustomValidity('Harap isi asal sekolah dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('sekolah_asal')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>                    

                    <div style="margin-bottom: 20px;">
                        <label for="kelas" style="font-weight: bold; display: block; margin-bottom: 8px;">Kelas:</label>
                        <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $siswa->kelas) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            placeholder="Masukkan kelas" oninvalid="this.setCustomValidity('Harap isi kelas dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('kelas')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="wali_kelas" style="font-weight: bold; display: block; margin-bottom: 8px;">Wali Kelas:</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" value="{{ old('wali_kelas', $siswa->wali_kelas) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            placeholder="Masukkan nama wali kelas" />
                        @error('wali_kelas')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="orang_tua" style="font-weight: bold; display: block; margin-bottom: 8px;">Orang Tua:</label>
                        <input type="text" name="orang_tua" id="orang_tua" value="{{ old('orang_tua', $siswa->orang_tua) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            placeholder="Masukkan nama orang tua" oninvalid="this.setCustomValidity('Harap isi nama orang tua dengan benar')" 
                            oninput="setCustomValidity('')" />
                        @error('orang_tua')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="telepon" style="font-weight: bold; display: block; margin-bottom: 8px;">Telepon:</label>
                        <input type="tel" name="telepon" id="telepon" value="{{ old('telepon', $siswa->telepon) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            pattern="^\+?(\d.*){3,}$" placeholder="Masukkan nomor telepon" oninvalid="this.setCustomValidity('Harap masukkan nomor telepon yang valid')" 
                            oninput="setCustomValidity('')" />
                        @error('telepon')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="alamat" style="font-weight: bold; display: block; margin-bottom: 8px;">Alamat:</label>
                        <textarea name="alamat" id="alamat" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required 
                            placeholder="Masukkan alamat lengkap" rows="4">{{ old('alamat', $siswa->alamat) }}</textarea>
                        @error('alamat')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="tahun_masuk" style="font-weight: bold; display: block; margin-bottom: 8px;">Tahun Masuk:</label>
                        <input type="date" name="tahun_masuk" id="tahun_masuk" value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required />
                        @error('tahun_masuk')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="password" style="font-weight: bold; display: block; margin-bottom: 8px;">Kata Sandi:</label>
                        <input type="password" name="password" id="password" 
                               style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" 
                               placeholder="Kosongkan jika tidak ingin mengganti kata sandi" 
                               oninvalid="this.setCustomValidity('Harap isi kata sandi dengan benar')" 
                               oninput="setCustomValidity('')" />
                        @error('password')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                                  

                    <!-- Foto Profil -->
                    <div style="margin-bottom: 20px;">
                        <label for="foto_profil" style="font-weight: bold; display: block; margin-bottom: 8px;">Foto Profil:</label>
                        <div id="image-preview">
                            <img id="preview-img" src="{{ url('public/admin/' . ($siswa->foto_profil ?? 'https://bootdey.com/img/Content/avatar/avatar7.png')) }}" 
                                style="display: block; width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);" />
                        </div>
                        <label for="foto_profil" 
                            style="cursor: pointer; padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; font-weight: bold;">
                            Pilih Gambar
                        </label>
                        <input type="file" name="foto_profil" id="foto_profil" style="display: none;" accept="image/*">
                    
                        <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;">Belum ada gambar yang dipilih</p>
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

                    <div style="margin-top: 20px;">
                        <button type="submit" 
                            style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-admin>
