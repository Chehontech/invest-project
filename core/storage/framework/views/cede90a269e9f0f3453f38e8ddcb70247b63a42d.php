<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="<?php echo e(route('user.password.email')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-5 mb-md-7">
            <h1 class="h2"><?php echo e(__('Forgot password')); ?></h1>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrEmail"><?php echo e(__('Email address')); ?></label>
            <input type="email" class="form-control" name="email"  tabindex="2" placeholder="<?php echo e(__('Email address')); ?>" aria-label="********" required
                    data-msg="Email address is invalid. Please try again.">
          </div>
          <!-- End Form Group -->

          <!-- Button -->
          <div class="row align-items-center mb-5">
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted"><?php echo e(__('Have an account?')); ?></span>
              <a class="font-size-1 font-weight-bold" href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign In')); ?></a>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover"><?php echo e(__('Reset Password')); ?></button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>