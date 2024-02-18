
<?php $__env->startSection('main'); ?>
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
    <form action="/dashboard/bookings/<?php echo e($booking->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 my-3">
                <h2><a href="/dashboard/bookings"><i class="ti ti-arrow-left"></i></a> Detail Peminjam</h2>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-1">Informasi Peminjam</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Nama</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1"><?php echo e($booking->user->name); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Profesi</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1"><?php echo e($booking->user->profession); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Judul</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1"><?php echo e($booking->book->title); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Penerbit</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1"><?php echo e($booking->book->publisher); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Dipinjam Pada</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1"><?php echo e($booking->book->created_at->diffForHumans()); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Status</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1"><?php echo e($booking->status); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form action="/dashboard/bookings/<?php echo e($booking->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <select class="form-select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    aria-label="Default select example" id="status" name="status"
                                    <?php if($booking->status === 'Dikembalikan'): ?> disabled <?php endif; ?>>
                                    <?php if($booking->status === 'Diajukan' || $booking->status === 'Ditolak'): ?>
                                        <option value="<?php echo e('Dipinjam'); ?>" <?php if($booking->status === 'Dipinjam'): ?> selected <?php endif; ?>>
                                            Dipinjam
                                        </option>
                                        <option value="<?php echo e('Ditolak'); ?>" <?php if($booking->status === 'Ditolak'): ?> selected <?php endif; ?>>
                                            Ditolak
                                        </option>
                                    <?php elseif($booking->status === 'Dipinjam'): ?>
                                        <option value="<?php echo e('Dikembalikan'); ?>"
                                            <?php if($booking->status === 'Dikembalikan'): ?> selected <?php endif; ?>>
                                            Dikembalikan
                                        </option>
                                        
                                        <option value="<?php echo e('Dikembalikan Terlambat'); ?>"
                                            <?php if($booking->status === 'Dikembalikan Terlambat'): ?> selected <?php endif; ?>>
                                            Dikembalikan Terlambat
                                        </option>
                                    <?php else: ?>
                                        <option value="<?php echo e('Dikembalikan'); ?>"
                                            <?php if($booking->status === 'Dikembalikan'): ?> selected <?php endif; ?>>
                                            Dikembalikan
                                        </option>
                                    <?php endif; ?>
                    </select>

                    <div class="mt-3 d-md-flex justify-content-md-end">
                        
                        
                        <button href="/dashboard/bookings/<?php echo e($booking->id); ?>/edit" class="btn btn-primary m-1">Perbarui Status
                            <i class="ti ti-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        

            
        </div>
      
      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/bookings/edit.blade.php ENDPATH**/ ?>