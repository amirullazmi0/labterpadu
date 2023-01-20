

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            <div class="row mt-4">
                <div class="col-lg-6 border p-3" style="border-radius: 10px">
                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="/admin/password/<?php echo e($user->name); ?>/update" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" name="oldpassword" id="oldpassword" required="" autofocus>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" name="newpassword1" id="password" required="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Konfirmasi Password Baru</label>
                            <input name="newpassword2" type="password" class="form-control" id="confirmNewPasswordInput">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-sm btn-success">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Laravel\labterpadu\resources\views//superadmin/profil.blade.php ENDPATH**/ ?>