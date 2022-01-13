<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="<?php echo e(route('submitregister')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-5 mb-md-7">

            <h1 class="h2"><?php echo e(__('Sign up')); ?></h1>
            
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <input class="form-control" placeholder="<?php echo e(__('First name')); ?>" type="text" name="first_name" required>
                <?php if($errors->has('first_name')): ?>
                  <span class="font-size-1"><?php echo e($errors->first('first_name')); ?></span>
                <?php endif; ?>
              </div>                 
            </div>                   
            <div class="col-lg-6">
              <div class="form-group mb-3">
                <input class="form-control" placeholder="<?php echo e(__('Last name')); ?>" type="text" name="last_name" required>
                <?php if($errors->has('last_name')): ?>
                  <span class="font-size-1"><?php echo e($errors->first('last_name')); ?></span>
                <?php endif; ?>
              </div>                 
            </div>                 
          </div> 
          <div class="row">
            <div class="col-lg-6">
              <div class="js-form-message form-group mb-3">
                <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Username')); ?>" type="text" name="username"  aria-label="<?php echo e(__('Username')); ?>" required
                        data-msg="Please enter a valid username.">
                <?php if($errors->has('username')): ?>
                  <span class="font-size-1"><?php echo e($errors->first('username')); ?></span>
                <?php endif; ?>
              </div>  
            </div>
            <div class="col-lg-6">
              <div class="js-form-message form-group mb-3">
                <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Email address')); ?>" type="email" name="email"  aria-label="<?php echo e(__('Email address')); ?>" required
                        data-msg="Please enter a valid email address.">
                <?php if($errors->has('email')): ?>
                  <span class="font-size-1"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
              </div>
            </div> 
          </div>
                  
          
          <?php if(isset($_GET['ref'])): ?>
            <?php if($set->referral): ?>
            <div class="js-form-message form-group">
              <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Username')); ?>" type="text" name="ref" value="<?php echo e($refName); ?>"
                      data-msg="Please enter a valid user id." hidden>

              <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Username')); ?>" type="text" name="refSec" value="<?php echo e($refSecName); ?>"
                      data-msg="Please enter a valid user id." hidden>
              <!--
              <label class="input-label" for="signinSrEmail"><?php echo e(__('Referral')); ?> <span class="text-danger">(Not Required)</span></label>
              <input class="form-control" tabindex="1" placeholder="<?php echo e(__('Username')); ?>" type="text" name="ref" 
                      data-msg="Please enter a valid user id." > -->
              <?php if($errors->has('ref')): ?>
                  <span class="font-size-1"><?php echo e($errors->first('ref')); ?></span>
            <?php endif; ?>
          <?php endif; ?>
          </div>
          <?php endif; ?>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
           <div class="input-group">
              <input type="password" name="password" class="form-control" data-toggle="password">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-eye"></i></span>
              </div>
            </div>
          </div>
          <!-- End Form Group -->
          <div class="js-form-message form-group">
            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
              <input type="checkbox" class="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions.">
              <label class="custom-control-label" for="termsCheckbox">
                <small>
                  I agree to the
                  <a class="link-underline" href="<?php echo e(route('terms')); ?>">Terms and Conditions</a>
                </small>
              </label>
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

          <!-- Button -->
          <div class="row align-items-center mb-5">
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted"><?php echo e(__('Got an Account?')); ?></span>
              <a class="font-size-1 font-weight-bold" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover"><?php echo e(__('Get Started')); ?></button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views//auth/register.blade.php ENDPATH**/ ?>