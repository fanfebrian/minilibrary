
<?php $__env->startSection('main'); ?>
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Hallo</h5>
      <h3 class="card-title fw-semibold mb-4">Selamat Datang <?php echo e(auth()->user()->name); ?> di Website Minilibrary</h3>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/dashboard.blade.php ENDPATH**/ ?>