
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
                  <h6 class="fw-semibold mb-0">Kelola</h6>
                </th>
                
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($loop->iteration); ?></h6></td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1"><?php echo e($booking->name); ?></h6>                         
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e($booking->profesi); ?></h6>                         
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal"><?php echo e($booking->title); ?></p>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal"><?php echo e($booking->publisher); ?></p>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal"><?php echo e($booking->jumlah); ?></p>
                </td>
                
                <td class="border-bottom-0">
                  
                  <a href="/dashboard/peminjaman/<?php echo e($booking->id); ?>" class="btn btn-info m-1">Detail
                    <i class="ti ti-arrow-right"></i>
                  </a>
                  
                  <a href="/dashboard/peminjaman/<?php echo e($booking->id); ?>/edit" class="btn btn-warning m-1">update
                    <i class="ti ti-pencil"></i>
                  </a>
                  <form action="/dashboard/peminjaman/<?php echo e($booking->id); ?>" method="post" 
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/booking/index.blade.php ENDPATH**/ ?>