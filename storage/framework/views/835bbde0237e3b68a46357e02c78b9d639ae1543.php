<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
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
        <div class="tambah-dosen">
            <div class="row mt-4">
                <div class="col-lg-6 border mt-2 p-3" style="border-radius: 0px">
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

                
                <div class="col-lg-6 border mt-2 p-3" style="border-radius: 0px">
                    <?php $__currentLoopData = $temp_berkas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="mt-3" for=""><?php echo e($temp->name); ?></label>
                    <small>
                        <?php if($temp->berkas != null): ?>
                        <br>

                        <small class="arr" style="background-color: rgb(91, 201, 110);color: white;padding: 5px;border-radius: 5px">
                            File Ada
                        </small>
                        <a class="ms-1" target="_blank" href="<?php echo e(asset('storage/'.$temp->berkas )); ?>">Download</a>
                        <?php else: ?>
                        <br>
                        <small class="arr" style="background-color: rgb(233, 23, 23); color: white;padding: 5px;border-radius: 5px">Tidak
                            ada File</small>
                        <?php endif; ?>
                    </small>
                    <form class="mt-4" action="/admin/temp-berkas/<?php echo e($temp->id); ?>/update" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control form-control" name="berkas" id="berkas" accept=".pdf">
                            <button class="btn btn-sm btn-primary" type="submit" name="berkas" id="berkas">update</button>
                        </div>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Laravel\labterpadu\resources\views//superadmin/profil.blade.php ENDPATH**/ ?>