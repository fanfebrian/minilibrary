<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('images/logos/favicon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.min.css')); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?php echo e(asset('images/logos/dark-logo.svg')); ?>" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Beranda</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Admin</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./peminjaman" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Peminjaman</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./koleksi" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Koleksi Buku</span>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php echo e(asset('images/profil/user-1.jpg')); ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-20 d-flex align-items-strech">
            <div class="card w-100">
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle table-hover display" id="myTable">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"><strong>No</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"><strong>Judul Buku</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"><strong>Pengarang</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"><strong>Penerbit</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0"><strong>Terbit</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"><strong>Halaman</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0"><strong>Stok</strong></h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0"><strong>Status</strong></h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">1</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Nanti Kita Cerita Tentang Hari Ini</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Marchella FP</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">POP Publishers</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Oktober 2019</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0">Hardcover, 208 halaman</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0">10</h6>
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">2</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Nanti juga sembuh sendiri</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Bagas Ali Prasety (Helo Bagas)</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Gradien Mediatama</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Mei 2022</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Hardcover, 246 halaman</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0">5</h6>
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">3</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Your Mind Kills</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Rifan Alhaq</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">13 Februari 2023</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="mb-0">Gradien Mediatama</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0">Hardcover, 182 halaman</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0">9</h6>
                          </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>
  </div>
  <script src="<?php echo e(asset('libs/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>
  <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/simplebar/dist/simplebar.js')); ?>"></script>
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/peminjaman.blade.php ENDPATH**/ ?>