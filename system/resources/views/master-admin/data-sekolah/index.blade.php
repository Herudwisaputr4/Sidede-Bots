<x-master-admin>
    <div class="nav_deg" style="margin: 10px;">
        <div
            style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #d12525; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
            <h1 style="margin: 0; padding: 0 10px; text-align: center; font-size: 20px; color: white;">
                Data Sekolah Dasar Kabupaten Ketapang
            </h1>
        </div>
    </div>

    <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
        <div class="table-container"
            style="width: 100%; max-width: 1200px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">

            <div
                style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 10px; margin-bottom: 20px;">
                <!-- Button Tambah Sekolah -->
                <a href="{{ url('master-admin/data-sekolah/create') }}"
                    style="padding: 12px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; flex-shrink: 0;">
                    Tambah Data Sekolah
                </a>

                <!-- Search Form -->
                <form id="search-form" action="{{ url('master-admin/data-sekolah') }}" method="GET" style="display: flex; gap: 5px; max-width: 400px; width: 100%;">
                    <input type="text" id="search" name="search" value="{{ request()->get('search') }}"
                        placeholder="Cari Sekolah..."
                        style="flex: 1; padding: 6px 12px; border-radius: 5px; border: 1px solid #ddd; box-sizing: border-box;">
                    <button type="submit"
                        style="padding: 6px 12px; background-color: #4fb7e0; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Script untuk auto update dan kembali menampilkan semua data saat search dihapus -->
            <script>
                document.getElementById('search').addEventListener('input', function() {
                    var searchValue = this.value;

                    // Jika input kosong, hapus parameter search dari URL
                    if (searchValue === '') {
                        var form = document.getElementById('search-form');
                        form.submit(); // Submit form kosong untuk menampilkan semua data
                    }
                });
            </script>

            @if (session('success'))
                <div id="success-alert"
                    style="padding: 10px; background-color: #4CAF50; color: white; position: relative; border-radius: 8px; margin-bottom: 15px;">
                    {{ session('success') }}
                    <span id="close-alert"
                        style="position: absolute; top: 5px; right: 10px; cursor: pointer; font-weight: bold;">&times;</span>
                </div>
            @endif

            @if (session('error'))
                <div
                    style="padding: 10px; background-color: #9ab0bd; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('error') }}
                </div>
            @endif

            <script>
                document.getElementById('close-alert').addEventListener('click', function() {
                    document.getElementById('success-alert').style.display = 'none';
                });
            </script>
            <div style="overflow-x:auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #747b7e; color: white;">
                            <th style="padding: 12px; text-align: center; font-weight: bold;">No</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">Logo Sekolah</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">Foto Sekolah</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">Nama Sekolah</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">NPSN</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">Akreditasi</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold;">Kepala Sekolah</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold; border-radius: 0 8px 8px 0;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_sekolah as $sekolah)
                            <tr style="background-color: #f8f8f8; transition: background-color 0.3s; border-bottom: 1px solid #ddd;">
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">{{ $loop->iteration }}</td>
            
                                <!-- Kolom Logo Sekolah -->
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">
                                    <img src="{{ url("public/$sekolah->logo_sekolah") }}" 
                                         style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" 
                                         onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </td>

                                <!-- Kolom Foto Sekolah -->
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">
                                    <img src="{{ url("public/$sekolah->foto_sekolah") }}" 
                                        style="width: 100px; height: 60px; border-radius: 8px; object-fit: cover;" 
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" 
                                        alt="Foto Sekolah">
                                </td>

                                <td style="padding: 12px; text-align: center; vertical-align: middle;">{{ $sekolah->nama_sekolah }}</td>
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">{{ $sekolah->npsn }}</td>
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">{{ $sekolah->akreditasi }}</td>
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">{{ $sekolah->kepala_sekolah }}</td>

                                <!-- Kolom Aksi -->
                                <td style="padding: 12px; text-align: center; vertical-align: middle;">
                                    <!-- Show button -->
                                    <a href="{{ url('master-admin/data-sekolah/' . $sekolah->id) }}"
                                        style="display: block; padding: 8px 12px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-bottom: 5px; width: 100%; max-width: 150px; text-align: center;">
                                        Detail
                                    </a>
                                    <!-- Edit button -->
                                    <a href="{{ url('master-admin/data-sekolah/' . $sekolah->id . '/edit') }}"  
                                        style="display: block; padding: 8px 12px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-bottom: 5px; width: 100%; max-width: 150px; text-align: center;">
                                        Edit
                                    </a>
 
                                   <!-- Delete button -->
                                    <form action="{{ url('master-admin/data-sekolah/' . $sekolah->id) }}" method="POST" id="deleteForm{{ $sekolah->id }}" 
                                        style="display: block; margin-bottom: 5px; width: 100%; max-width: 150px;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="showConfirmModal({{ $sekolah->id }})"
                                            style="display: block; padding: 8px 12px; background-color: #e74c3c; color: white; border: none; border-radius: 5px; font-weight: bold; margin-bottom: 5px; width: 100%; max-width: 150px; cursor: pointer; text-align: center;">
                                            Hapus
                                        </button>
                                    </form>
                                </td>

                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal{{ $sekolah->id }}" 
                                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); align-items: center; justify-content: center;">
                                    <div style="background-color: white; padding: 15px; border-radius: 8px; width: 300px; text-align: center;">
                                        <h3 style="font-size: 16px;">Konfirmasi Hapus</h3>
                                        <p style="font-size: 14px;">Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.</p>
                                        <button onclick="confirmDelete({{ $sekolah->id }})"
                                            style="background-color: #e74c3c; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 14px; margin-top: 10px;">
                                            Hapus
                                        </button>
                                        <button onclick="hideConfirmModal({{ $sekolah->id }})"
                                            style="background-color: #ccc; color: black; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 14px; margin-top: 10px;">
                                            Batal
                                        </button>
                                    </div>
                                </div>

                                <script>
                                    // Function to show the confirmation modal
                                    function showConfirmModal(id) {
                                        const modal = document.getElementById(`confirmModal${id}`);
                                        if (modal) {
                                            modal.style.display = 'flex';
                                        }
                                    }
                                
                                    // Function to hide the confirmation modal
                                    function hideConfirmModal(id) {
                                        const modal = document.getElementById(`confirmModal${id}`);
                                        if (modal) {
                                            modal.style.display = 'none';
                                        }
                                    }
                                
                                    function hideConfirmModal(id) {
                                            const modal = document.getElementById(`confirmModal${id}`);
                                            console.log(modal); // Debugging untuk memastikan elemen ditemukan
                                            if (modal) {
                                                modal.style.display = 'none';
                                            } else {
                                                console.error(`Modal dengan ID confirmModal${id} tidak ditemukan.`);
                                            }
                                        }
                                </script>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Links -->
                <div style="margin-top: 20px; display: flex; justify-content: center;">
                    <ul style="display: flex; list-style: none; padding: 0; gap: 5px;">
                        <!-- Tombol Sebelumnya -->
                        <li>
                            <a href="{{ $list_sekolah->previousPageUrl() }}"
                                style="padding: 4px 8px; border-radius: 5px; {{ $list_sekolah->onFirstPage() ? 'background-color: #ddd; color: #999; cursor: not-allowed;' : 'background-color: #4fb7e0; color: white;' }}">
                                &laquo; Sebelumnya
                            </a>
                        </li>

                        <!-- Nomor Halaman -->
                        @foreach ($list_sekolah->getUrlRange(1, $list_sekolah->lastPage()) as $page => $url)
                            <li>
                                <a href="{{ $url }}"
                                    style="padding: 4px 8px; border-radius: 5px; {{ $page == $list_sekolah->currentPage() ? 'background-color: #4fb7e0; color: white;' : 'background-color: #e0e0e0; color: #333;' }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach

                        <!-- Tombol Berikutnya -->
                        <li>
                            <a href="{{ $list_sekolah->nextPageUrl() }}"
                                style="padding: 4px 8px; border-radius: 5px; {{ $list_sekolah->hasMorePages() ? 'background-color: #4fb7e0; color: white;' : 'background-color: #ddd; color: #999; cursor: not-allowed;' }}">
                                Berikutnya &raquo;
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </main>
</x-master-admin>