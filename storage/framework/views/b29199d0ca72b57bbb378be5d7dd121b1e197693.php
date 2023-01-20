

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <?php if($lab->photo): ?>
                    <img class="img-fluid" style="max-height: 300px;" src="<?php echo e(asset('storage/'.$lab->photo)); ?>" alt="">
                    <?php else: ?>
                    <img class="img-fluid" src="/img/labterpadu.jpg" style="max-height: 300px;" alt="">
                    <?php endif; ?>
                    <h3 class="m-3"><?php echo e($lab->name); ?></h3>
                </div>
                <hr>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-3 fw-bold">Deskripsi</div>
                    <div class="col-1 ">:</div>
                    <div class="col-7">
                        <p style="text-align: justify">
                            <?php echo e($lab->desc); ?>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 fw-bold">Dosen</div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->lab_id === $lab->id): ?>
                        <?php if($user->level === "1"): ?>
                        <li>
                            <?php echo e($user->name); ?>

                        </li>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 fw-bold">Laboran</div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->lab_id === $lab->id): ?>
                        <?php if($user->level === "2"): ?>
                        <li>
                            <?php echo e($user->name); ?>

                        </li>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-sm m-1 rounded" href="/admin/laboratorium/<?php echo e($lab->name); ?>/edit">
                <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Laravel\labterpadu\resources\views//superadmin/show_lab.blade.php ENDPATH**/ ?>