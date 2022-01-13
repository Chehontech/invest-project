<?php $__env->startSection('content'); ?>
<div class="main-content">
    <!-- Header -->
    <div class="header py-5 pt-7">
      <div class="container">
        <div class="header-body text-center mb-7">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card card-profile border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-dark mb-5">
                <h3 class="text-dark font-weight-bolder"><?php echo e(__('Sign In')); ?></h3>
                <small><?php echo e(__('Welcome back, login to manage account')); ?></small>
              </div>
              <form role="form" action="<?php echo e(route('submitlogin')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fal fa-envelope"></i></span>
                    </div>
                    <input class="form-control" placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" required>
                  </div>
                  <?php if($errors->has('email')): ?>
                      <span class="error form-error-msg ">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fal fa-unlock"></i></span>
                    </div>
                    <input class="form-control" placeholder="<?php echo e(__('Password')); ?>" type="password" name="password" required>
                  </div>
                  <?php if($errors->has('password')): ?>
                    <span class="error form-error-msg ">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="row mt-3 mb-3">
                  <div class="col-6">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember_me">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-dark"><?php echo e(__('Remember me')); ?></span>
                      </label>
                    </div>
                  </div>                 
                  <div class="col-6 text-right">
                    <a href="<?php echo e(route('user.password.request')); ?>" class="text-primary"><small><?php echo e(__('Forgot password?')); ?></small></a>
                  </div>
                </div>
                <?php if($set->recaptcha==1): ?>
                  <?php echo app('captcha')->display(); ?>

                  <?php if($errors->has('g-recaptcha-response')): ?>
                      <span class="help-block">
                          <?php echo e($errors->first('g-recaptcha-response')); ?>

                      </span>
                  <?php endif; ?>
                <?php endif; ?>
                <div class="text-center">
                  <button type="submit" class="btn btn-neutral btn-block my-4 text-uppercase"><?php echo e(__('Login')); ?></button>
                  <div class="loginSignUpSeparator"><span class="textInSeparator">or</span></div>
                  <a href="<?php echo e(route('register')); ?>" class="btn btn-primary btn-block my-0 text-uppercase"><?php echo e(__('Create an Account')); ?></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nn/core/resources/views//auth/login.blade.php ENDPATH**/ ?>