
                    


<?php $__env->startSection('main'); ?>
    <?php if(auth()->user()->role === 'member'): ?>
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-12 my-3">
                    <h2><a href="/dashboard/home"><i class="ti ti-arrow-left"></i></a> Detail Buku</h2>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                        </div>
                        <div class="img text-center">
                            <img src="<?php echo e(asset('storage/' . $book->image)); ?>" class="img-fluid mb-3 mt-3" alt="..." style="width: 90%;" height="440">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                        </div>
                        <div class="card-body p-3">
                            <div class="row my-3">
                                <div class="col-lg-6">
                                    <strong class="m-1">Penulis</strong>
                                </div>
                                <div class="col-lg-6">
                                    <p class="m-1"><?php echo e($book->author); ?></p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-lg-6">
                                    <strong class="m-1">Diupload pada</strong>
                                </div>
                                <div class="col-lg-6">
                                    <p class="m-1"><?php echo e($book->created_at->diffForHumans()); ?></p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-lg-6 col-sm-12">
                                    <strong class="m-1">Genre</strong>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <p class="m-1"><?php echo e($book->genre); ?></p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-lg-6 col-sm-12">
                                    <strong class="m-1">Penerbit</strong>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <p class="m-1"><?php echo e($book->publisher); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <div class="card-header">
                            <h5 class="card-title fw-semibold m-3"><?php echo e($book->title); ?></h5>
                        </div>
                        <div class="card-body p-3">
                            <?php echo $book->description; ?>

                        </div>
                    </div>
                    <div class="d-md-flex justify-content-md-end">
                        <form action="/dashboard/bookings" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($book->id); ?>" name="book_id">
                            <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="user_id">
                            <input type="hidden" value="<?php echo e('Diajukan'); ?>" name="status">
                            <input type="hidden" value="<?php echo e(0); ?>" name="isDenda">
                            
                            <div class="d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit">Pinjam Buku</button>
                                <div class="mx-2">
                                    <a href="/dashboard/books" class="btn btn-warning">Batal Pinjam</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 my-3">
                <h2><a href="/dashboard/books"><i class="ti ti-arrow-left"></i></a> Detail Buku</h2>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                    </div>
                    <div class="img text-center">
                        <img src="<?php echo e(asset('storage/' . $book->image)); ?>" class="img-fluid mb-3 mt-3" alt="..." style="width: 90%;" height="440">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Penulis</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1"><?php echo e($book->author); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Diupload pada</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1"><?php echo e($book->created_at->diffForHumans()); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Genre</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1"><?php echo e($book->genre); ?></p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Penerbit</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1"><?php echo e($book->publisher); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3"><?php echo e($book->title); ?></h5>
                    </div>
                    <div class="card-body p-3">
                        <?php echo $book->description; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/books/show.blade.php ENDPATH**/ ?>