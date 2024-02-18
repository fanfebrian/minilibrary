
<?php $__env->startSection('main'); ?>

<?php if(session()->has('success')): ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-success" role="alert">
          <?php echo e(session('success')); ?>

      </div>
    </div>
  </div>
<?php endif; ?>
<?php if(session()->has('successDelete')): ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-danger" role="alert">
          <?php echo e(session('successDelete')); ?>

      </div>
    </div>
  </div>
<?php endif; ?>
<?php if(session()->has('successEdit')): ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-warning" role="alert">
          <?php echo e(session('successEdit')); ?>

      </div>
    </div>
  </div>
<?php endif; ?>

<?php if(auth()->user()->role === 'member'): ?>
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Daftar Peminjam Buku</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Nama</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Profesi</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Judul</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Penerbit</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Jumlah</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Status</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Denda</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Kelola</h6>
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($loop->iteration); ?></h6></td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e(Str::limit($booking->user->name, 30, '...')); ?></h6>                         
                  </td>
                  <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1"><?php echo e($booking->user->profession); ?></h6>                         
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e(Str::limit($booking->book->title, 50, '...')); ?></p>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e($booking->book->publisher); ?></p>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e($booking->book->stock); ?></p>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e($booking->status); ?></p>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">
                      <?php if($booking->isDenda === 0): ?>
                      <p class="mb-0 fw-normal">-</p>
                      <?php else: ?>
                      <p class="mb-0 mt-3 fw-normal btn btn-primary" style="background-color: red">Anda Terkena Denda</p>
                      <?php endif; ?>
                    </p>

                    
                    <?php if(session()->has('successEdit')): ?>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="alert alert-warning" role="alert">
                              <?php echo e(session('successEdit')); ?>

                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                  </td>
                  
                  <td class="border-bottom-0">
                    
                    <a href="/dashboard/bookings/<?php echo e($booking->id); ?>" class="btn btn-info m-1">Detail
                      <i class="ti ti-arrow-right"></i>
                    </a>
                    
                    
                    
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">

          <div class="row">
            <div class="col-lg-6">
              <h5 class="card-title fw-semibold mb-0">Daftar Peminjam Buku</h5>
            </div>
  
            <div class="col-lg-6">
                <div class="d-md-flex justify-content-md-end">
                  <a href="/dashboard/bookings/create" target="" class="btn btn-primary mx-2">Tambah Data Peminjaman +</a>
                </div>
              </div>
            </div>
          </div>
          <hr>

          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Nama</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Profesi</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Judul</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Penerbit</h6>
                  </th>
                  
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Status</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Kelola</h6>
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $bookings_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($loop->iteration); ?></h6></td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e(Str::limit($booking->user->name, 30, '...')); ?></h6>                         
                  </td>
                  <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1"><?php echo e($booking->user->profession); ?></h6>                         
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e(Str::limit($booking->book->title, 50, '...')); ?></p>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e($booking->book->publisher); ?></p>
                  </td>
                  
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal"><?php echo e($booking->status); ?></p>
                  </td>
                  
                  <td class="border-bottom-0">
                    
                    <a href="/dashboard/bookings/<?php echo e($booking->id); ?>" class="btn btn-info m-1">Detail
                      <i class="ti ti-arrow-right"></i>
                    </a>
                    
                    <a href="/dashboard/bookings/<?php echo e($booking->id); ?>/edit" class="btn btn-warning m-1">update
                      <i class="ti ti-pencil"></i>
                    </a>
                    <form action="/dashboard/bookings/<?php echo e($booking->id); ?>" method="post" 
                      class="d-inline">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('delete'); ?>
                      <button class="btn btn-danger">
                          Delete <i class="ti ti-circle-x"></i>
                      </button>
                  </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/bookings/index.blade.php ENDPATH**/ ?>