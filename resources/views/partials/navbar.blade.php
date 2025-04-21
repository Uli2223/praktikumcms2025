<header class="navbar navbar-light sticky-top bg-white flex-md-nowrap p-0 shadow">
    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav flex-row me-auto">
        <form class="d-flex mx-3">
            <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    
    <div class="navbar-nav">
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-2">Admin</span>
                <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin" class="rounded-circle" width="32" height="32">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profil"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profil</a></li>
                <li><a class="dropdown-item" href="/pengaturan"><i class="fas fa-cog fa-sm fa-fw me-2 text-gray-400"></i> Pengaturan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</header>