<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if(@isset($title)): ?>
          Dashboard | <?php echo e($title); ?>

    <?php else: ?>
          Dashboard
    <?php endif; ?>   
</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('images/logos/favicon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.min.css')); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--  Header End -->
      <div class="container-fluid">
        <?php echo $__env->yieldContent('main'); ?>
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

</html><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/layouts/app.blade.php ENDPATH**/ ?>