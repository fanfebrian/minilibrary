@if (auth()->user()->role === 'member')
    
@else
<aside class="left-sidebar" style="background-color: rgb(6, 41, 63)">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="/login" class="text-nowrap logo-img">
        <img src="{{ asset('images/logos/blue-logo.svg') }}" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu" style="color: white">Dashboard</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/home" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu  ">Home</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/books" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Buku</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/bookings" aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Data Peminjaman</span>
            </a>
          </li>
          {{-- <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Admin</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/koleksi" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Koleksi Buku</span>
            </a>
          </li> --}}
@endif
        </nav>
    <!-- End Sidebar navigation -->
    </div>
<!-- End Sidebar scroll-->
</aside>
