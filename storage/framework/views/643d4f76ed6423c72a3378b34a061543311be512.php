<?php $__env->startSection('content'); ?>

<div class="card p-3">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <p class="text-black">Nama Pengguna / Peminjam</p>
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-8">
                <p><?php echo e($p_alat->name); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <p class="text-black">Alat</p>
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-8">
                <p><?php echo e($p_alat->alat->name); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <p class="text-black">Tanggal Pemakaian</p>
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-8">
                <p>
                    <?php echo e(date('d F Y', strtotime($p_alat->date_start))); ?>

                    <?php if($p_alat->date_end != null): ?>
                    - <?php echo e(date('d F Y', strtotime($p_alat->date_end))); ?>

                    <?php endif; ?>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3">
                <p class="text-black">Keterangan</p>
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-8">
                <?php if($p_alat->berkas): ?>
                <?php echo e($p_alat->desc); ?>

                <?php else: ?>
                <p>-</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <p class="text-black">File</p>
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-8">
                <?php if($p_alat->berkas): ?>
                <a href="<?php echo e(asset('storage/'. $p_alat->berkas)); ?>">
                    <small><?php echo e(asset('storage/'. $p_alat->berkas)); ?></small>
                </a>
                <?php else: ?>
                <p>-</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-sm m-1 rounded" href="/aadmin/laboratorium/p-alat/<?php echo e($p_alat->id); ?>/edit">
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
            <a class="btn btn-danger btn-sm m-1 rounded" onclick="return confirm('Are you sure to delete ?')"
                href="/aadmin/laboratorium/p-alat/delete/<?php echo e($p_alat->id); ?>">
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
<?php echo $__env->make('template.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Laravel\labterpadu\resources\views//admin/show_p_alat.blade.php ENDPATH**/ ?>