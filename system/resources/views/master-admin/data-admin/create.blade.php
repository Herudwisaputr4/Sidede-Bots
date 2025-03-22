<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk data admin --}}
            <form action="{{ url('master-admin/data-admin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <h2 class="main-title">Tambahkan Admin</h2>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-input" placeholder="Masukkan username" required oninvalid="this.setCustomValidity('Harap isi username dengan benar')" oninput="setCustomValidity('')" />
                        @error('username')
                            <div style="color: red; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-label-wrapper">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" id="username" name="nama" class="form-input" placeholder="Masukkan nama lengkap" required oninvalid="this.setCustomValidity('Harap isi nama dengan benar')" oninput="setCustomValidity('')" />
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
                        <label for="username" class="form-label">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-input" placeholder="Masukan sekolah asal" required oninvalid="this.setCustomValidity('harap isi sekolah dengan benar')" oninput="setCustomValidity('')" />
                        @error('sekolah_asal')
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
                    
                    <div class="form-label-wrapper" style="text-align: flex; margin-top: 20px;">
                        <label for="foto_profil" style="display: block; font-weight: bold; margin-bottom: 10px;">Foto Profil</label>
                        
                        <!-- Gambar Pratinjau -->
                        <div id="image-preview">
                            <img id="preview-img" 
                                 src="{{ url('public/admin/' . ($admin->foto_profil ?? 'https://bootdey.com/img/Content/avatar/avatar7.png')) }}" 
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
                        // JavaScript untuk menampilkan pratinjau gambar dan nama file
                        document.getElementById('foto_profil').addEventListener('change', function() {
                            const file = this.files[0];
                            const fileName = document.getElementById('file-name');  // Menggunakan ID yang benar
                            const previewImg = document.getElementById('preview-img');
                    
                            if (file) {
                                // Validasi ukuran file
                                if (file.size > 2 * 1024 * 1024) { // 2 MB dalam byte
                                    fileName.textContent = 'File terlalu besar. Maksimal 2 MB.';
                                    previewImg.style.display = 'none';
                                    this.value = ''; // Reset input file
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
                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Tambah admin</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>
