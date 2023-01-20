

<?php $__env->startSection('content'); ?>

<div class="index">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <p class="text-center">Jumlah Alat</p>
                    <hr>
                    <h3 class="text-center"><?php echo e($jumlah_alat); ?></h3>
                    <div class="d-flex justify-content-end mt-3">
                        <a class="btn btn-warning btn-sm d-block m-1" href="/aadmin/laboratorium/alat">
                            <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="p-2 mb-2 text-white">
                        Kalender
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-10">
                            <div id='calendar'></div>
                        </div>
                        <div class="col-4">
                            <div class="card border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Laravel\labterpadu\resources\views//admin/index.blade.php ENDPATH**/ ?>