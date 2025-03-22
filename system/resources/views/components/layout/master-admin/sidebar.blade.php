
<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="{{ url('public/master-admin') }}/" class="logo-wrapper" title="Home">
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
                    <a class="active" href="{{ url('master-admin') }}/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
            </ul>
            <span class="system-menu__title">Menu</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a class="show-cat-btn" href="{{ url('public/master-admin') }}/##">
                        <span class="icon category" aria-hidden="true"></span>Data Sekolah
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ url('master-admin/data-sekolah') }}">Data Sekolah</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="{{ url('public/master-admin') }}">
                        <span class="icon user-3" aria-hidden="true"></span>Admin Sekolah
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ url('master-admin/data-admin') }}">Data Admin Sekolah</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="{{ url('public/master-admin') }}" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="{{ url('public/master-admin') }}/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="{{ url('public/master-admin') }}/img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Fulan</span>
                <span class="sidebar-user__subtitle">Master Admin</span>
            </div>
        </a>
    </div>
</aside>