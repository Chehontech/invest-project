<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0"><?php echo e(__('Send email to Followers & Investors')); ?></h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.sand.fpromo.send')); ?>" method="post">
            <?php echo csrf_field(); ?>                                             
                <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('Subject')); ?>:</label>
                    <div class="col-lg-10">
                        <input type="text" name="subject" maxlength="200" class="form-control" required>
                        <input type="hidden" name="id" value="<?php echo e($plan); ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('Message')); ?>:</label>
                    <div class="col-lg-10">
                        <textarea type="text" name="message" rows="8" class="form-control tinymce"></textarea>
                    </div>
                </div>          
                <div class="text-right">
                    <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Send')); ?></button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/project/email.blade.php ENDPATH**/ ?>