<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk edit data sekolah --}}
            <form action="{{ url('master-admin/data-sekolah/' . $sekolah->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form">
                    <h2 class="main-title">Edit Data Sekolah</h2>

                    <div class="form-label-wrapper">
                        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-input" value="{{ $sekolah->nama_sekolah }}" placeholder="Masukkan nama sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="npsn" class="form-label">NPSN</label>
                        <input type="number" name="npsn" class="form-input" value="{{ $sekolah->npsn }}" placeholder="Masukkan NPSN" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="akreditasi" class="form-label">Akreditasi</label>
                        <select name="akreditasi" class="form-input">
                            <option value="A" {{ $sekolah->akreditasi == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $sekolah->akreditasi == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $sekolah->akreditasi == 'C' ? 'selected' : '' }}>C</option>
                            <option value="Tidak Terakreditasi" {{ $sekolah->akreditasi == 'Tidak Terakreditasi' ? 'selected' : '' }}>Tidak Terakreditasi</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kurikulum" class="form-label">Kurikulum</label>
                        <select name="kurikulum" class="form-input" required>
                            <option value="Kurikulum KTSP" {{ $sekolah->kurikulum == 'Kurikulum KTSP' ? 'selected' : '' }}>Kurikulum KTSP</option>
                            <option value="Kurikulum K-13" {{ $sekolah->kurikulum == 'Kurikulum K-13' ? 'selected' : '' }}>Kurikulum K-13</option>
                            <option value="Kurikulum Merdeka" {{ $sekolah->kurikulum == 'Kurikulum Merdeka' ? 'selected' : '' }}>Kurikulum Merdeka</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                        <input type="text" name="kepala_sekolah" class="form-input" value="{{ $sekolah->kepala_sekolah }}" placeholder="Masukkan kepala sekolah" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" class="form-input" value="{{ $sekolah->alamat_lengkap }}" placeholder="Masukkan alamat lengkap" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="email_sekolah" class="form-label">Email Sekolah</label>
                        <input type="email" name="email_sekolah" class="form-input" value="{{ $sekolah->email_sekolah }}" placeholder="Masukkan email sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="telepon_sekolah" class="form-label">Telepon Sekolah</label>
                        <input type="number" name="telepon_sekolah" class="form-input" value="{{ $sekolah->telepon_sekolah }}" placeholder="Masukkan telepon sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="status_sekolah" class="form-label">Status Sekolah</label>
                        <select name="status_sekolah" class="form-input" required>
                            <option value="Negeri" {{ $sekolah->status_sekolah == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                            <option value="Swasta" {{ $sekolah->status_sekolah == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kepemilikan_sekolah" class="form-label">Status Kepemilikan</label>
                        <select name="kepemilikan_sekolah" class="form-input" required>
                            <option value="Pemerintah" {{ $sekolah->kepemilikan_sekolah == 'Pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                            <option value="Yayasan" {{ $sekolah->kepemilikan_sekolah == 'Yayasan' ? 'selected' : '' }}>Yayasan</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="keaktifan_sekolah" class="form-label">Status Keaktifan</label>
                        <select name="keaktifan_sekolah" class="form-input" required>
                            <option value="Aktif" {{ $sekolah->keaktifan_sekolah == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ $sekolah->keaktifan_sekolah == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_pengajar" class="form-label">Jumlah Pengajar</label>
                        <input type="number" name="jumlah_pengajar" class="form-input" value="{{ $sekolah->jumlah_pengajar }}" placeholder="Masukkan jumlah pengajar" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                        <input type="number" name="jumlah_siswa" class="form-input" value="{{ $sekolah->jumlah_siswa }}" placeholder="Masukkan jumlah siswa" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" class="form-input" value="{{ $sekolah->tahun_berdiri }}" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="foto_sekolah" class="form-label">Foto Sekolah</label>
                        <input type="file" name="foto_sekolah" class="form-input" accept="image/*" id="fotoSekolahInput" onchange="previewImage(event, 'fotoSekolahPreview')" />
                        <img id="fotoSekolahPreview" src="{{ $sekolah->foto_sekolah ? url('public/fotosekolah/' . $sekolah->foto_sekolah) : '' }}" 
                             style="width: 50%; margin-top: 10px; {{ $sekolah->foto_sekolah ? '' : 'display: none;' }}" />
                    </div>
                    
                    <div class="form-label-wrapper">
                        <label for="logo_sekolah" class="form-label">Logo Sekolah</label>
                        <input type="file" name="logo_sekolah" class="form-input" accept="image/*" id="logoSekolahInput" onchange="previewImage(event, 'logoSekolahPreview')" />
                        <img id="logoSekolahPreview" src="{{ $sekolah->logo_sekolah ? url('public/logosekolah/' . $sekolah->logo_sekolah) : '' }}" 
                             style="width: 25%; margin-top: 10px; {{ $sekolah->logo_sekolah ? '' : 'display: none;' }}" />
                    </div>
                    
                    <script>
                        function previewImage(event, previewId) {
                            const input = event.target;
                            const preview = document.getElementById(previewId);
                    
                            if (input.files && input.files[0]) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                    preview.style.display = 'block';
                                };
                                reader.readAsDataURL(input.files[0]);
                            } else {
                                preview.src = '';
                                preview.style.display = 'none';
                            }
                        }
                    </script>                    

                    <div style="text-align: left; margin-top: 20px;">
                        <button type="submit" style="padding: 10px 20px; background-color: #d12525; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>
