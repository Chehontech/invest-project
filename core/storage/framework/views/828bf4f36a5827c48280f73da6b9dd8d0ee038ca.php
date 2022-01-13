<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="<?php echo e(route('submitlogin')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-5 mb-md-7">
            <h1 class="h2"><?php echo e(__('Welcome back')); ?></h1>
            <p><?php echo e(__('Login to manage your account.')); ?></p>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrEmail"><?php echo e(__('Email address')); ?></label>
            <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Email address')); ?>" type="email" name="email"  aria-label="<?php echo e(__('Email address')); ?>" required
                    data-msg="Please enter a valid email address.">
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrPassword" tabindex="0">
              <span class="d-flex justify-content-between align-items-center">
                Password
                <a class="link-underline text-capitalize font-weight-normal" href="<?php echo e(route('user.password.request')); ?>"><?php echo e(__('Forgot password?')); ?></a>
              </span>
            </label>
            <input type="password" class="form-control" name="password"  tabindex="2" placeholder="********" aria-label="********" required
                    data-msg="Your password is invalid. Please try again.">
          </div>
          <!-- End Form Group -->
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="customCheck12" class="custom-control-input" name="remember_me">
              <label class="custom-control-label" for="customCheck12"><?php echo e(__('Remember me')); ?></label>
            </div>
          </div>


          <!-- Button -->
          <div class="row align-items-center mb-5">
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted"><?php echo e(__('Don\'t have an account?')); ?></span>
              <a class="font-size-1 font-weight-bold" href="<?php echo e(route('register')); ?>"><?php echo e(__('Signup')); ?></a>
            </div>
            <?php if($set->recaptcha==1): ?>
              <?php echo app('captcha')->display(); ?>

              <?php if($errors->has('g-recaptcha-response')): ?>
                  <span class="help-block">
                      <?php echo e($errors->first('g-recaptcha-response')); ?>

                  </span>
              <?php endif; ?>
            <?php endif; ?>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover"><?php echo e(__('Login')); ?></button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views//auth/login.blade.php ENDPATH**/ ?>