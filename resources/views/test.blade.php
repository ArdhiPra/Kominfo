<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem PKL</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Sidebar Desktop */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;          /* penuh tinggi layar */
      width: 220px;           /* lebar sidebar */
      background-color: #212529;
      padding: 1rem;
      overflow-y: auto;       /* bisa scroll jika menu panjang */
    }

    .content {
      margin-left: 220px;     /* kasih jarak sama dengan sidebar */
      padding: 1rem;
    }

    /* Mobile mode: hapus margin kiri */
    @media (max-width: 767.98px) {
      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar untuk Mobile -->
  <nav class="navbar navbar-dark bg-dark d-md-none">
    <div class="container-fluid">
      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
        <i class="bi bi-list"></i>
      </button>
      <span class="navbar-brand">Sistem PKL</span>
    </div>
  </nav>

  <!-- Sidebar Desktop -->
  <div class="sidebar d-none d-md-block text-white">
    <h4 class="text-white">Sistem PKL</h4>
    <hr class="text-secondary">
    <ul class="nav flex-column">
      <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-house"></i> Beranda</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-info-circle"></i> Tentang</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-telephone"></i> Kontak</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
    </ul>
  </div>

  <!-- Sidebar Offcanvas (Mobile) -->
  <div class="offcanvas offcanvas-start bg-dark text-white d-md-none" tabindex="-1" id="offcanvasSidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Sistem PKL</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-house"></i> Beranda</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-info-circle"></i> Tentang</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-telephone"></i> Kontak</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
      </ul>
    </div>
  </div>

  <!-- Konten -->
  <div class="content">
    <h1>Dashboard PKL</h1>
    <p>Isi konten di sini...</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p style="margin-bottom:1000px">Tambahkan konten panjang untuk uji scroll...</p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
