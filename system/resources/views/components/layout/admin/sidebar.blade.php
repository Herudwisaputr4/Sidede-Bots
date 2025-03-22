<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="{{ url('public/admin') }}/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">SI-SD</span>
                    <span class="logo-subtitle"><h5>Ketapang Cerdas</h5></span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>   
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="{{ url('public/admin') }}/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
            </ul>
            <span class="system-menu__title">Menu</span>
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Tahun Ajaran
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/tahun-ajaran') }}">Data Tahun Ajaran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Sekolah
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('master-admin/data-sekolah/index') }}">Data sekolah</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Kelas
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/kelas') }}">Data Kelas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>TENAGA PENDIDIK
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/data-pendidik') }}">WALI KELAS</a>
                            </li>

                            <li>
                                <a href="{{ url('admin/data-guru') }}">GURU</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Mata Pelajaran
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/mata-pelajaran') }}">Data Mata Pelajaran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Orang Tua
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/orang-tua') }}">Data Orang Tua</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Raport Digital
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/raport-digital') }}">Data Raport Digital</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Peserta Didik
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/data-siswa') }}">Data Peserta Didik</a>
                            </li>
                        </ul>
                    </li>
        
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Berita
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('admin/data-berita') }}">Data Berita</a>
                            </li>
                        </ul>
                    </li>

                </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture>
                    <source srcset="{{ url('public/admin') }}/img/avatar/avatar-illustrated-01.webp"
                        type="image/webp"><img
                        src="{{ url('public/admin') }}/img/avatar/avatar-illustrated-01.png" alt="User name">
                </picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Andrian</span>
                <span class="sidebar-user__subtitle"> Admin</span>
            </div>
        </a>
    </div>
</aside>