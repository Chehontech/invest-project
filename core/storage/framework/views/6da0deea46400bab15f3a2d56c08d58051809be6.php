<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="<?php echo e(route('user.upload-kyc')); ?>" enctype="multipart/form-data" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-5 mb-md-7">
            <h1 class="h2"><?php echo e(__('KYC VERIFICATION')); ?></h1>
            <p><?php echo e(__('Ensure document provided contains thesame information as of registration')); ?></p>
          </div>
          <!-- End Title -->

          <div class="form-group mb-3">
                    <select class="form-control select" <?php if($user->kyc_link!=null && $user->kyc_status==0 || $user->kyc_link!=null && $user->kyc_status==1): ?> disabled <?php endif; ?> name="type" required>
                        <option value=""><?php echo e(__('Identification type')); ?></option>
                        <option value="National ID" <?php if($user->kyc_type=='International Passport'): ?> selected <?php endif; ?>><?php echo e(__('International Passport')); ?></option>
                        <option value="National ID" <?php if($user->kyc_type=='National ID'): ?> selected <?php endif; ?>><?php echo e(__('National ID')); ?></option>
                        <option value="Driver license" <?php if($user->kyc_type=='Driver license'): ?> selected <?php endif; ?>><?php echo e(__('Driver license')); ?></option>
                        <option value="Voters card" <?php if($user->kyc_type=='Voters card'): ?> selected <?php endif; ?>><?php echo e(__('Voters card')); ?></option>
                    </select>
                </div> 
                <?php if($user->kyc_link==null && $user->kyc_status==0): ?>
                    <div class="text-center">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" name="image" accept="image/*">
                                <label class="custom-file-label" for="customFileLang"><?php echo e(__('Select document')); ?></label>
                            </div> 
                        </div> 
                        <?php if($errors->has('image')): ?>
                            <span class="error form-error-msg ">
                            <strong><?php echo e($errors->first('image')); ?></strong>
                            </span>
                        <?php endif; ?> 
                    </div>
                <?php endif; ?>  
                <div class="text-center">
                    <?php if($user->kyc_link==null && $user->kyc_status==0): ?>
                        <button type="submit" class="btn btn-primary btn-block transition-3d-hover"><?php echo e(__('Upload')); ?></button>
                    <?php endif; ?>
                    <div class="loginSignUpSeparator"><span class="textInSeparator text-sm text-uppercase">Status</span></div>
                    <?php if($user->kyc_link!=null && $user->kyc_status==0): ?>
                      <span class="error form-error-msg ">
                        <span class="badge badge-pill badge-primary mb-3"><?php echo e(__('Under review')); ?></span>
                      </span>                    
                    <?php elseif($user->kyc_link!=null && $user->kyc_status==1): ?>
                      <span class="error form-error-msg ">
                        <span class="badge badge-pill badge-success mb-3"><?php echo e(__('Approved')); ?></span>
                      </span>
                    <?php endif; ?>
                </div>
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/user/security/no-kyc.blade.php ENDPATH**/ ?>