
<?php $__env->startSection('main'); ?>
      <?php if(auth()->user()->role === 'member'): ?>

      
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo e(asset('images/carousel/carousel1.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo e(asset('images/carousel/carousel2.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo e(asset('images/carousel/carousel3.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        

        
        <div class="container-fluid">
          <div class="card shadow" style="border-radius: 50px; background-color: #134054">
            <div class="card-body">

              

              <form method="get">
                <div class="d-flex" role="search">
                  <input class="form-control me-2" type="text" placeholder="Search" name="search_keyword" placeholder="Cari buku atau pengarang ..." aria-label="Search" style="height: 50px; background-color: white;  border-radius: 10px;" value="<?php echo e(request()->get('search_keyword')); ?>">
                  <button class="btn" type="submit" style="background-color: #3681C6; color: white; width: 20%; height: 50px; border-radius: 10px;">Search <i class="ti ti-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        

        
        
        <div class="container-fluid">
            <div class="text-center mb-5" style="border-bottom: 3px solid #3681C6">
              <h1 class="mb-3"><strong>Koleksi Buku Terbaru</strong></h1>
            </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__empty_1 = true; $__currentLoopData = $books_limit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col">
              <div class="collection">
                <div class="card h-80 shadow mx-3">
                  <a href="/dashboard/books/<?php echo e($book->id); ?>">
                    <img src="<?php echo e(asset('storage/' . $book->image)); ?>" class="card-img-top" alt="...">
                  </a>
                  
                  <div class="card-footer">
                    <small class="text-body-secondary"><?php echo e($book->created_at->diffForHumans()); ?></small>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>Buku Tidak Ada Tod</h3>
            <?php endif; ?>
          </div>
        </div>
        

      <?php else: ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Hallo</h5>
            <h3 class="card-title fw-semibold mb-4">Selamat Datang <?php echo e(auth()->user()->role); ?> di Website Minilibrary</h3>
          </div>
        </div>
      </div>
      <?php endif; ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/dashboard.blade.php ENDPATH**/ ?>