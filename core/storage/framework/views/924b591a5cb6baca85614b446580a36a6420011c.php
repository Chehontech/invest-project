

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="<?php echo e(route('send.email-verify')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-5 mb-md-7">
            <h1 class="h2"><?php echo e(__('Email verification')); ?></h1>
            <small><?php echo e(__('Verify your Email')); ?>, <span class="text-muted"><a href="<?php echo e(route('user.resend.email')); ?>"><?php echo e(__('Resend email')); ?></a></span></small>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fad fa-unlock"></i></span>
              </div>
              <input type="hidden"  name="id" value="<?php echo e(Auth::guard('user')->user()->id); ?>">
              <input class="form-control" placeholder="<?php echo e(__('Code')); ?>" type="text" name="email_code" required>
            </div>
          </div> 
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block transition-3d-hover"><?php echo e(__('Verify')); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/user/security/verify.blade.php ENDPATH**/ ?>