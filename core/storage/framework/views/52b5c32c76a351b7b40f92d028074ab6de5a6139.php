<?php $__env->startSection('content'); ?>

<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-6 pt-lg-1">
      <div class="container">
        <div class="header-body text-center mb-7">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7">
                <div class="card card-profile bg-white border-0 mb-5">
                    <div class="card-header">
                        <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Save Money')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('submit.savings')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div id="receivetransfer">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                        </span>
                                        <input type="number" step="any" class="form-control" name="amount" id="amount" min="<?php echo e($set->s_min); ?>" max="<?php echo e($user->balance); ?>"  onkeyup="newsavings()" required placeholder="0.00">      
                                        <input type="hidden" id="now" value="<?php echo e(Carbon\Carbon::now()); ?>">                  
                                    </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-12">Duration</label>
                                    <div class="col-lg-12">
                                    <select class="form-control select" name="duration" id="savingsduration" required>
                                        <option value="3*<?php echo e($set->s_3m); ?>">3 Months</option>
                                        <option value="6*<?php echo e($set->s_6m); ?>">6 Months</option>
                                        <option value="9*<?php echo e($set->s_9m); ?>">9 Months</option>
                                        <option value="12*<?php echo e($set->s_12m); ?>">12 Months</option>
                                    </select>
                                    </div>
                                </div> 
                                <div class="text-center mb-5">
                                    <p class="mb-1 text-xs text-uppercase"><?php echo e(__('You will receive')); ?> <span id="percent"></span></p>
                                    <h1 class="mb-1 text-muted font-weight-bolder" id="gain1">-</h1> 
                                    <p class="mb-1 text-xs text-uppercase" id="by"></p>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                    <select class="form-control select" name="purpose" required>
                                        <option value="">Purpose</option>
                                        <option>Birthday</option>
                                        <option>Birth of child</option>
                                        <option>Christmas</option>
                                        <option>Holiday</option>
                                        <option>Rent</option>
                                        <option>Salah</option>
                                        <option>School fees</option>
                                        <option>Wedding</option>
                                        <option>Other</option>
                                    </select>
                                    </div>
                                </div>     
                            </div>                    
                            <div class="text-right" id="processtransfer">
                                <button type="submit" class="btn btn-neutral btn-block"><?php echo e(__('Apply')); ?></button>
                            </div>         
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a href="<?php echo e(route('user.savings')); ?>"><i class="fad fa-long-arrow-alt-left"></i> Back to Savings</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/savings/new.blade.php ENDPATH**/ ?>