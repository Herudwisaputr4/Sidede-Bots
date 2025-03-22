<x-master-admin>
    <div style="margin: 10px;">
        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #d12525; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
            <h1 style="margin: 0; padding: 0 10px; font-size: 20px; color: white; text-align: center;">
                Edit Data Admin Sekolah Dasar
            </h1>
        </div>
    </div>

    <main style="padding: 20px; display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 1200px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">
            <p style="font-size: 16px; color: #333; text-align: center; margin-bottom: 20px;">
                ISI DAN SIMPAN PERUBAHAN DATA ADMIN
            </p>

            <form action="{{ url('master-admin/data-admin', $admin->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Upload Foto Profil -->
                <div style="margin-top: 20px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 10px;">Foto Profil</label>
                    <div id="image-preview" style="margin-bottom: 15px;">
                        <img id="preview-img" src="#" alt="Pratinjau Foto" style="display: none; width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    </div>
                    <label for="foto_profil" style="padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; font-weight: bold; cursor: pointer;">
                        Pilih Gambar
                    </label>
                    <input type="file" name="foto_profil" id="foto_profil" style="display: none;" accept="image/*" value=" {{ $admin->foto_profil }}">
                    <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;">Belum ada gambar yang dipilih</p>
                    <p style="color: #999; font-size: 12px; margin-top: 5px;">Ukuran file maksimal: 2 MB</p>
                </div>  

                <!-- JavaScript untuk Pratinjau Gambar -->
                <script>
                    document.getElementById('foto_profil').addEventListener('change', function() {
                        const file = this.files[0];
                        const fileName = document.getElementById('file-name');
                        const previewImg = document.getElementById('preview-img');
                
                        if (file) {
                            if (file.size > 2 * 1024 * 1024) { // Validasi ukuran file maksimal 2 MB
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

                <!-- Form Input Fields -->
                <!-- Form Container -->
                <div style="width: 100%; max-width: 600px; padding: 20px; background-color: #ffffff; border-radius: 12px;">
                    <div style="margin-bottom: 20px;">
                        <label for="username" style="font-weight: bold; display: block; margin-bottom: 8px;">Username:</label>
                        <input type="text" id="username" name="username" value="{{ $admin->username }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="nama" style="font-weight: bold; display: block; margin-bottom: 8px;">Nama:</label>
                        <input type="text" id="nama" name="nama" value="{{ $admin->nama }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="email" style="font-weight: bold; display: block; margin-bottom: 8px;">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $admin->email }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="sekolah_asal" style="font-weight: bold; display: block; margin-bottom: 8px;">Sekolah Asal:</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" value="{{ $admin->sekolah_asal }}" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="password" style="font-weight: bold; display: block; margin-bottom: 8px;">Password (Kosongkan jika tidak diubah):</label>
                        <input type="password" id="password" name="password" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;">
                    </div>

                    <div style="text-align: left; margin-top: 20px;">
                        <button type="submit" style="padding: 10px 20px; background-color: #4fb7e0; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                            Simpan Perubahan
                        </button>
                    </div>
                    
                </div>

            </form>
        </div>
    </main>
</x-master-admin>
