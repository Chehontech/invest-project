

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder"><?php echo e(__('Investment Plans')); ?></h6>
      </div>
    </div>
    <div class="row">
      <?php if(count($plan)>0): ?>
        <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4">
            <div class="pricing card-group flex-column flex-md-row mb-3">
              <div class="card card-pricing border-0 text-center mb-2 <?php if($val->popular==1): ?> bg-dark <?php endif; ?>">
                <div class="card-header bg-transparent">
                </div>
                <div class="card-body px-lg-7">
                  <h2 class="card-title mb-0 <?php if($val->popular==1): ?> text-white <?php endif; ?>" <?php if($val->popular==1): ?>title="Most popular" <?php endif; ?>><?php echo e($val->name); ?> <?php if($val->popular==1): ?> <i class="fad fa-star"></i> <?php endif; ?></h2>
                  <div class="text-xl mb-2 <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?>"><?php echo e(number_format($val->min_deposit).$currency->name); ?> <span class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?>">@ <?php echo e($val->percent); ?>% <?php echo e(__('Daily')); ?></span></div>
                  <p class="card-text text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0">Runs for <?php echo e($val->duration); ?> <?php echo e($val->period); ?><?php if($val->duration>1): ?>s <?php endif; ?></p>
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php echo e(number_format($val->amount).$currency->name); ?> <?php echo e(__('Maximum Deposit')); ?></p>
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php echo e($val->interest); ?>% <?php echo e(__('Return on Investment')); ?></p>                 
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php if($val->ref_percent!=null): ?><?php echo e($val->ref_percent); ?>% <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?><?php echo e(__('Referral Bonus')); ?></p>                                                
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php if($val->bonus!=null): ?><?php echo e($val->bonus); ?>% <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?><?php echo e(__('Investment Bonus')); ?></p>
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php if($val->claim==1): ?> <?php echo e(__('Access to Profit anytime')); ?> <?php else: ?> <?php echo e(__('Access to profit at end of plan')); ?> <?php endif; ?></p>
                  <p class="text-sm <?php if($val->popular==1): ?> text-white <?php else: ?> text-dark <?php endif; ?> mb-0"><?php if($val->recurring==1): ?> <?php echo e(__('Recurring capital investment')); ?> <?php else: ?> <?php echo e(__('No recurring capital investment')); ?> <?php endif; ?></p>
                  <br>
                  <a href="#" data-toggle="modal" data-target="#buy<?php echo e($val->id); ?>"  class="btn btn-block <?php if($val->popular==1): ?> btn-white <?php else: ?> btn-neutral <?php endif; ?>"><i class="fad fa-shopping-cart"></i> <?php echo e(__('Purchase Plan')); ?></a>
                  <hr>
                  <?php
                  $amount=$val->min_deposit;
                  $interest=($val->min_deposit*$val->interest/100).$currency->name;
                  $compound=$val->min_deposit*($val->compound/100).$currency->name;
                  $xstart_date=date_create(Carbon\Carbon::now());
                  date_add($xstart_date, date_interval_create_from_date_string($val->duration.' '.$val->period));
                  $xndate=date_format($xstart_date, "Y-m-d H:i:s"); 
                  ?>
                  <div class="row align-items-center">
                    <div class="modal fade" id="buy<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content form-block form-modal">
                          <div class="modal-body p-0">
                            <div class="card border-0 mb-0">
                              <div class="card-header bg-transparent pb-5">
                                <div class="btn-wrapper text-center">
                                  <h1 class="text-uppercase py-1 mb-0" id="profit<?php echo e($val->id); ?>"><?php echo e($val->name); ?></h1>
                                  <?php if($val->bonus!=null): ?>
                                    <p class="text-sm mb-0" id="bonus<?php echo e($val->id); ?>"></p>
                                  <?php endif; ?>
                                    <p class="text-sm mb-0">End by <?php echo e(date("Y/m/d h:i:A", strtotime($xndate))); ?></p>
                                </div>
                              </div>
                              <div class="card-body">
                                <form role="form" action="<?php echo e(route('user.check_plan')); ?>" method="post">
                                <?php echo csrf_field(); ?> 
                                  <input type="hidden" name="plan" value="<?php echo e($val->id); ?>">
                                  <div class="form-group mb-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                      </div>
                                      <input id="duration<?php echo e($val->id); ?>" value="<?php echo e($val->compound); ?>" type="hidden">
                                      <input id="percent<?php echo e($val->id); ?>" value="<?php echo e($val->percent); ?>" type="hidden">
                                      <input id="buyplan<?php echo e($val->id); ?>" min="<?php echo e($val->min_deposit); ?>" max="<?php echo e($val->amount); ?>" type="number" class="form-control" onkeyup="planamount()" placeholder="<?php echo e(__('Amount')); ?>" name="amount">
                                    </div>
                                  </div>  
                                  <div class="form-group mb-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">#</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="<?php echo e(__('Coupon code Optional')); ?>" maxlength="8" name="coupon">
                                    </div>
                                  </div>                                  
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-neutral btn-block my-4"><?php echo e(__('Purchase')); ?></button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-text text-xs <?php if($val->popular==1): ?> text-white <?php else: ?> text-gray <?php endif; ?>"><?php echo e(__('Here a quick summary; Money invested')); ?> <?php echo e($amount.$currency->name); ?>, <?php echo e(__('ROI will be')); ?> <?php echo e($interest); ?>, <?php echo e(__('Compound Interest will amount to')); ?> 
                  <?php echo e($compound); ?> <?php echo e(__('after')); ?> <?php echo e($val->duration.' '.$val->period); ?><?php if($val->duration>1): ?>s <?php endif; ?>. <?php if($val->bonus!==null): ?> <?php echo e(__('You will receive')); ?> <?php echo e($val->bonus); ?>% <?php echo e(__('of Compound Interest as Bonus')); ?> <?php endif; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
        <div class="col-md-12 mb-5">
          <div class="text-center mt-8">
            <div class="btn-wrapper text-center">
                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                </a>
            </div>
            <h3 class="text-dark">No Plans</h3>
            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      <?php echo e($plan->links('pagination::bootstrap-4')); ?>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/trading/plans.blade.php ENDPATH**/ ?>