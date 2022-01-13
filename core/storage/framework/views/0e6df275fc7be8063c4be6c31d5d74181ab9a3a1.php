<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0"><?php echo e(__('Send email to all users')); ?></h3>
        </div>
        <div class="card-body form-block">
            <form action="<?php echo e(route('user.promo.send')); ?>" method="post">
            <?php echo csrf_field(); ?>                                             
                <div class="form-group row">
                    <!--<label class="col-form-label col-lg-2"><?php echo e(__('Subject')); ?>:</label> -->
                    <div class="col-lg-10">
                        <input type="text" name="subject" placeholder="<?php echo e(__('Subject')); ?>" maxlength="200" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <!--<label class="col-form-label col-lg-2"><?php echo e(__('Message')); ?>:</label>-->
                    <div class="col-lg-10">
                        <textarea type="text" name="message" rows="8" placeholder="<?php echo e(__('Message')); ?>" class="form-control" required></textarea>
                    </div>
                </div>          
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Send')); ?></button>
                    </div>
                </div>   
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/admin/user/promo.blade.php ENDPATH**/ ?>