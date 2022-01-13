<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-10 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-lg-0">
        <div class="card-header bg-light text-center py-4 px-5 px-md-6">
          <h2 class="h4 mb-0"><?php echo e($title); ?></h2>
          <?php
            $interest=$currency->symbol.$amount*$plan->interest/100;
            $compound=$currency->symbol.$amount*$plan->compound/100;
          ?>
        </div>
        <div class="card-body p-4 p-md-6">
          <p class="mb-0"><?php echo e(__('Name')); ?>:<?php echo e($plan->name); ?></p>
          <p class="mb-0"><?php echo e(__('Duration')); ?>:<?php echo e($plan->duration.' '.$plan->period); ?>(s)</p>
          <p class="mb-0"><?php echo e(__('Amount')); ?>:<?php echo e($currency->symbol.number_format($amount)); ?></p>
          <p class="mb-0"><?php echo e(__('Interest')); ?>:<?php echo e($interest); ?></p>
          <p class="mb-0"><?php echo e(__('Compound Interest')); ?>:<?php echo e($compound); ?></p>
          <?php if(isset($coupon)): ?>
          <hr>
          <p class="mb-0"><?php echo e(__('Coupon code')); ?>:<?php echo e($coupon->code); ?></p>
          <p class="mb-0"><?php echo e(__('Percent off')); ?>:<?php echo e($coupon->percent); ?>%</p>
          <p class="mb-"><?php echo e(__('Total')); ?>:<?php echo e($currency->symbol); ?><?php echo e($amount-($amount*$coupon->percent/100)); ?></p>
          <?php endif; ?>
          <form action="<?php echo e(url('user/buy')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="coupon" value="<?php if(isset($coupon)): ?> 1 <?php else: ?> 0 <?php endif; ?>">
            <input type="hidden" name="code" value="<?php if(isset($coupon)): ?> $coupon->code <?php else: ?> 0 <?php endif; ?>">
            <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
            <input type="hidden" name="plan" value="<?php echo e($plan->id); ?>">
            <!-- Checkbox -->
            <div class="js-form-message mb-5 mt-2">
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions.">
                <label class="custom-control-label" for="termsCheckbox">
                  <small>
                    I agree to the
                    <a class="link-underline" href="<?php echo e(route('terms')); ?>">Terms and Conditions</a>
                  </small>
                </label>
              </div>
            </div>
            <!-- End Checkbox -->
            <button type="submit" class="btn btn-block btn-primary transition-3d-hover">
              Purchase Plan
              <i class="fas fa-angle-right fa-sm ml-1"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/user/trading/preview.blade.php ENDPATH**/ ?>