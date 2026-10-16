<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <!-- Brand / Identitas KBBGO -->
        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="{{ route('home') }}">
            <span style="color: #F4A300;">KBB</span><span style="color: #0F9D8A;">GO</span>
        </a>

        <!-- Mobile Toggler -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#kbbgoNavbar"
            aria-controls="kbbgoNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="kbbgoNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active text-teal' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door me-1"></i> Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinasi.*') ? 'active text-teal' : '' }}" href="{{ route('destinasi.index') }}">
                        <i class="bi bi-geo-alt me-1"></i> Destinasi Wisata
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('umkm.*') ? 'active text-teal' : '' }}" href="{{ route('umkm.index') }}">
                        <i class="bi bi-shop me-1"></i> UMKM
                    </a>
                </li>

                <!-- Quick Action Buttons -->
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-sm btn-kbb-primary px-3 py-2" href="{{ route('destinasi.create') }}">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm btn-kbb-warning px-3 py-2" href="{{ route('umkm.create') }}">
                        <i class="bi bi-bag-plus me-1"></i> Tambah UMKM
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
