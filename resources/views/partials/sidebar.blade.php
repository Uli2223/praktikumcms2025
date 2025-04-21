<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none sidebar-brand py-2 px-3">
            <span class="fs-4">CMS 2025</span>
        </a>
        <hr class="text-white">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active text-white' : '' }}" href="/dashboard">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item mt-2">
                <div class="text-white-50 small px-3">Menu</div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('halaman') ? 'active text-white' : '' }}" href="/halaman">
                    <i class="fas fa-file me-2"></i>
                    Halaman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('artikel') ? 'active text-white' : '' }}" href="/artikel">
                    <i class="fas fa-newspaper me-2"></i>
                    Artikel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('karyawan') ? 'active text-white' : '' }}" href="/karyawan">
                    <i class="fas fa-users me-2"></i>
                    Karyawan
                </a>
            </li>
        </ul>
    </div>
</nav>