<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="h3 mb-0"><?php echo e(__('Media')); ?></h5>
          </div>
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <a href="#" class="avatar">
                        <img alt="Image placeholder" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>">
                      </a>
                    </div>
                    <div class="col ml--2">
                    <span class="text-gray text-uppercase form-text"><?php echo e($val->title); ?></span>
                    </div>
                    <div class="col-auto">
                      <a href="<?php echo e(url('/')); ?>/admin/sand-delete-product-image/<?php echo e($val->id); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-trash"></i> <?php echo e(__('Delete')); ?></a>
                    </div>
                  </div>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul><br><br>
            <form action="<?php echo e(route('admin.sand.plan.status.image.submit')); ?>" enctype="multipart/form-data" method="post">
              <?php echo csrf_field(); ?>
              <div class="form-group row">
                  <div class="col-lg-12">
                      <div class="custom-file text-center">
                      <input type="hidden" value="<?php echo e($check); ?>" name="id">
                          <input type="file" class="custom-file-input" name="image" accept="image/*" id="customFileLang">
                          <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Media')); ?></label>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('Title')); ?></label>
                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>  
  
              <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Upload')); ?></a>
              </div>  
            </form>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/project/status_image.blade.php ENDPATH**/ ?>