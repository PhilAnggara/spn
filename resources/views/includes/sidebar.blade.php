<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ url('frontend/images/logo.png') }}" class="navbar-brand-img" alt="...">
        <h1 class="d-inline align-middle text-primary">SPN Sulut</h1>
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route("home") }}">
              <i class="far fa-th-large text-primary"></i>
              <span class="nav-link-text">Beranda</span>
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('data-siswa') ? 'active' : '' }}" href="{{ route("data-siswa.index") }}">
              <i class="far fa-users text-primary"></i>
              <span class="nav-link-text">Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('daftar-nilai') ? 'active' : '' }}" href="{{ route("daftar-nilai.index") }}">
              <i class="far fa-file-chart-line text-primary"></i>
              <span class="nav-link-text">Daftar Nilai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('mata-pelajaran') ? 'active' : '' }}" href="{{ route("mata-pelajaran.index") }}">
              <i class="far fa-books text-primary"></i>
              <span class="nav-link-text">Mata Pelajaran</span>
            </a>
          </li>
          {{-- @if (auth()->user()->level == 'admin') --}}
            <li class="nav-item">
              <a class="nav-link {{ Request::is('tahun-akademik') ? 'active' : '' }}" href="{{ route("tahun-akademik.index") }}">
                <i class="far fa-calendar-alt text-primary"></i>
                <span class="nav-link-text">Tahun Akademik</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('data-pengguna') ? 'active' : '' }}" href="{{ route("data-pengguna.index") }}">
                <i class="far fa-user-shield text-primary"></i>
                <span class="nav-link-text">Data Pengguna</span>
              </a>
            </li>
          {{-- @endif --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="{{ route("about") }}">
              <i class="far fa-info-circle text-primary"></i>
              <span class="nav-link-text">Tentang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="{{ route("galeri") }}">
              <i class="far fa-images text-primary"></i>
              <span class="nav-link-text">Galeri</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('struktur-organisasi') ? 'active' : '' }}" href="{{ route("structure") }}">
              <i class="far fa-sitemap text-primary"></i>
              <span class="nav-link-text">Struktur Organisasi</span>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</nav>