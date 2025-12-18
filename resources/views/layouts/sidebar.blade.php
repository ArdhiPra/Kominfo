{{-- Navbar Mobile (hanya muncul di layar kecil) --}}
<nav class="navbar navbar-dark bg-dark d-md-none">
  <div class="container-fluid d-flex align-items-center">
  <!-- Tombol toggle offcanvas -->
  <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
    <i class="bi bi-list"></i>
  </button>
@guest
  <!-- Logo + Brand dalam satu group -->
  <a class="navbar-brand d-flex align-items-center mb-0 h1" href="{{ route('user.dashboard') }}">
    <img src="{{ asset('assets/img/logo_kominforb.png') }}" alt="Logo" width="30" height="30" class="me-2">
    <span>SiPeKa</span>
  </a>
@endguest
@auth
    <a class="navbar-brand d-flex align-items-center mb-0 h1" href="{{ route('admin.dashboard') }}">
    <img src="{{ asset('assets/img/logo_kominforb.png') }}" alt="Logo" width="30" height="30" class="me-2">
    <span>SiPeKa</span>
  </a>
@endauth
</div>

</nav>
{{-- Sidebar Desktop --}}
@php
    // Default jika belum login (guest)
    $redirectRoute = 'user.dashboard';

    if (Auth::check()) {
        // Jika user login dan role-nya admin → arahkan ke dashboard admin
        if (Auth::user()->role === 'admin') {
            $redirectRoute = 'admin.dashboard';
        } else {
            // Jika user login biasa → tetap ke dashboard user
            $redirectRoute = 'user.dashboard';
        }
    }
@endphp
<div class="sidebar d-none d-md-block bg-dark text-white p-3" 
    style="width: 250px; min-height: 100vh;">
    <a href="{{ route($redirectRoute) }}" 
        class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <img src="{{ asset('assets/img/logo_kominforb.png') }}" 
            alt="Logo" width="30" height="30" class="me-2">
        <h4 class="mb-0">SiPeKa</h4>
    </a>

  <hr class="text-secondary">
  <ul class="nav flex-column">
    @guest
      <li class="nav-item">
        <a href="{{ route('user.dashboard') }}"
          class="nav-link text-white {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
          <i class="bi bi-house"></i> Beranda
        </a>
      </li>
    @endguest

    @auth
    <li class="nav-item dashboard-menu">
      <a href="{{ route('admin.dashboard') }}"
        class="nav-link text-white d-flex justify-content-between align-items-center {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <span>
          <i class="bi bi-house"></i> Dashboard
        </span>
        <!-- Ikon toggle -->
        <span class="toggle-dropdown"
          data-bs-toggle="collapse"
          data-bs-target="#dashboardCollapse"
          aria-expanded="{{ request()->routeIs('admin.dashboard.edit') ? 'true' : 'false' }}"
          aria-controls="dashboardCollapse"
          onclick="event.preventDefault();">
            <i class="bi bi-chevron-right rotate-icon 
            {{ request()->routeIs('tentang') || request()->routeIs('admin.dashboard.edit') ? 'rotate' : '' }}">
          </i>
        </span>
      </a>

  <!-- Submenu -->
  <div class="collapse {{ request()->routeIs('admin.dashboard.edit') ? 'show' : '' }}" id="dashboardCollapse">
    <ul class="nav flex-column ms-4">
      <li class="nav-item">
        <a href="{{ route('admin.dashboard.edit') }}"
            class="nav-link text-white {{ request()->routeIs('admin.dashboard.edit') ? 'active' : '' }}">
          <i class="bi bi-pencil-square"></i> Edit Dashboard
        </a>
      </li>
    </ul>
  </div>
</li>
    @endauth

    <li class="nav-item">
      <a href="{{ route('tentang') }}"
        class="nav-link text-white {{ request()->routeIs('tentang') ? 'active' : '' }}">
        <i class="bi bi-info-circle"></i> Tentang
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ url('/kontak') }}" class="nav-link text-white">
        <i class="bi bi-telephone"></i> Kontak
      </a>
    </li>

    @guest
      <li class="nav-item">
        <a href="{{ route('login') }}" class="nav-link text-white">
          <i class="bi bi-box-arrow-in-right"></i> Login
        </a>
      </li>
    @endguest

    @auth
      <li class="nav-item">
        <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-inline w-100">
          @csrf
          <button type="submit" id="logoutButton"
            class="nav-link text-white border-0 bg-transparent w-100 text-start">
            <i class="bi bi-box-arrow-in-left"></i> Logout
          </button>
        </form>
      </li>
    @endauth
</ul>
</div>

{{-- Sidebar Mobile (Offcanvas) --}}
<div class="offcanvas offcanvas-start bg-dark text-white d-md-none" tabindex="-1" id="offcanvasSidebar">
  <div class="offcanvas-header">
    <div class="d-flex align-items-center">
      <img src="{{ asset('assets/img/logo_kominforb.png') }}" alt="Logo" width="30" height="30" class="me-2">
      <h5 class="offcanvas-title">SiPeKa</h5>
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
    <ul class="nav flex-column">
      {{-- Beranda (Dashboard) dengan submenu --}}
      @guest
        <li class="nav-item">
          <a href="{{ route('user.dashboard') }}"
              class="nav-link text-white {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
            <i class="bi bi-house"></i> Beranda
          </a>
        </li>
      @endguest

      {{-- Jika user sudah login --}}
      @auth
        <li class="nav-item dashboard-menu">
          <a href="{{ route('admin.dashboard') }}"
              class="nav-link text-white d-flex justify-content-between align-items-center {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <span><i class="bi bi-house"></i> Dashboard</span>
            <span class="toggle-dropdown"
                  data-bs-toggle="collapse"
                  data-bs-target="#dashboardCollapseMobile"
                  aria-expanded="{{ request()->routeIs('admin.dashboard.edit') ? 'true' : 'false' }}"
                  aria-controls="dashboardCollapseMobile"
                  onclick="event.preventDefault();">
              <i class="bi bi-chevron-right rotate-icon {{ request()->routeIs('admin.dashboard.edit') ? 'open' : '' }}"></i>
            </span>
          </a>
          <!-- Submenu mobile -->
          <div class="collapse {{ request()->routeIs('admin.dashboard.edit') ? 'show' : '' }}" id="dashboardCollapseMobile">
            <ul class="nav flex-column ms-4">
              <li class="nav-item">
                <a href="{{ route('admin.dashboard.edit') }}"
                    class="nav-link text-white {{ request()->routeIs('admin.dashboard.edit') ? 'active' : '' }}">
                  <i class="bi bi-pencil-square"></i> Edit Dashboard
                </a>
              </li>
            </ul>
          </div>
        </li>
      @endauth

      <li class="nav-item">
        <a href="{{ route('tentang') }}"
          class="nav-link text-white {{ request()->routeIs('tentang') ? 'active' : '' }}">
          <i class="bi bi-info-circle"></i> Tentang
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/kontak') }}" class="nav-link text-white">
          <i class="bi bi-telephone"></i> Kontak
        </a>
      </li>

        @guest
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link text-white">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </li>
      @endguest

      @auth
        <li class="nav-item">
          <form id="logoutFormMobile" action="{{ route('logout') }}" method="POST" class="d-inline w-100">
            @csrf
            <button type="submit" id="logoutButtonMobile"
              class="nav-link text-white border-0 bg-transparent w-100 text-start">
              <i class="bi bi-box-arrow-in-left"></i> Logout
            </button>
          </form>
        </li>
      @endauth
    </ul>
  </div>
</div>
