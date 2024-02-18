
<?php $__env->startSection('main'); ?>

<?php if(auth()->user()->role === 'member'): ?>
    <div class="container-fluid">
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
                                <p class="m-1"><?php echo e($booking->created_at->diffForHumans()); ?></p>
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
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Denda</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="mb-0 fw-normal">
                                    <?php if($booking->isDenda === 0): ?>
                                    <p class="mb-0 fw-normal">-</p>
                                    <?php else: ?>
                                    <p class="mb-0 mt-0 fw-normal btn btn-primary" style="background-color: red">Anda Terkena Denda</p>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-1">Silahkan Ambil Buku Yang Anda Pinjam Di Perpustakaan</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row my-3">
                        
                                <strong>Selamat Membaca Semoga Anda Suka Dengan Bukunya, Jangan Lupa Untuk Selalu Di Jaga, Dan Dikembalikan Sesuai Waktu Yang Sudah Di tentukan</strong>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
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
            
            
                
                
        </div>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/bookings/show.blade.php ENDPATH**/ ?>