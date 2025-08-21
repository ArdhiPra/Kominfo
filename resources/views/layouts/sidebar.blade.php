<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white sidebar" style="width: 250px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Sistem PKL</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="" class="nav-link text-white {{ request()->is('/') ? 'active bg-secondary' : '' }}">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-info-circle me-2"></i> Tentang
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-telephone me-2"></i> Kontak
            </a>
        </li>
        <li>
            <a href="/login" class="nav-link text-white">
                <i class="bi bi-box-arrow-in-right me-2"></i> Login
            </a>
        </li>
    </ul>
    <hr>
</div>
