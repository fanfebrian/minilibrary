    <?php if(auth()->user()->role === 'member'): ?>
      
      <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #0e3242">
        <div class="container">
          <a class="navbar-brand" href="/dashboard/home">
            <img src="<?php echo e(asset('images/logos/blue-logo.svg')); ?>" width="180" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-light mx-2" aria-current="page" href="/dashboard/collection">Koleksi Buku</a>
              <a class="nav-link text-light mx-2" href="/dashboard/bookings">History</a>
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php echo e(asset('images/profile/user-1.jpg')); ?>" alt="" width="30" height="30" class="rounded-circle mx-2">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="/profil" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6" ></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="/dashboard/bookings" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My History</p>
                    </a>
                    <form action="/logout" method="post">
                      <?php echo csrf_field(); ?>
                      <button  type="submit" class="btn btn-danger mx-3 mt-2 d-block">Logout</button>
                    </form>
                  </div>
                </div>
              </li>

            </div>
          </div>
        </div>
      </nav>
    <?php else: ?>
      
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php echo e(asset('images/profile/user-1.jpg')); ?>" alt="" width="35" height="35" class="rounded-circle">
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
                    <form action="/logout" method="post">
                      <?php echo csrf_field(); ?>
                      <button  type="submit" class="btn btn-danger mx-3 mt-2 d-block">Logout</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    <?php endif; ?>
<?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>