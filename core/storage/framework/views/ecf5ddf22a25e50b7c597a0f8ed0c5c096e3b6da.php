<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0 font-weight-bolder"><?php echo e(__('Save Money')); ?></h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="<?php echo e(route('user.new.savings')); ?>" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> <?php echo e(__('Apply now')); ?></a> 
        </div>   
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php if(count($save)>0): ?>  
            <?php $__currentLoopData = $save; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                <div class="card bg-white">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="h4 mb-1 font-weight-bolder"><?php echo e($val->ref_id); ?></h5>
                      </div>                      
                    </div>
                    <div class="row">
                        <div class="col">
                          <p class="text-sm mb-0"><?php echo e(__('Amount')); ?>: <?php echo e($currency->symbol.number_format($val->amount, 2, '.', '')); ?></p>
                          <p class="text-sm mb-0"><?php echo e(__('Purpose')); ?>: <?php echo e($val->purpose); ?></p>
                          <p class="text-sm mb-0"><?php echo e(__('Profit')); ?>: <?php echo e($currency->symbol.number_format($val->profit, 2, '.', '')); ?> @ <?php echo e($val->percent); ?>% for <?php echo e($val->duration); ?></p>
                          <p class="text-sm mb-0"><?php echo e(__('Created')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                          <p  class="text-sm mb-1"><?php echo e(__('Ends')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->end_date))); ?></p>
                          <?php if($val->status==0): ?>
                            <span class="badge badge-pill badge-info"><i class="fad fa-spinner"></i> <?php echo e(__('Still Running')); ?></span>
                          <?php elseif($val->status==1): ?>
                            <span class="badge badge-pill badge-success"><i class="fad fa-check"></i> <?php echo e(__('Paid Off')); ?></span>                        
                          <?php elseif($val->status==2): ?>
                            <span class="badge badge-pill badge-danger"><i class="fad fa-close"></i> <?php echo e(__('Cancelled')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                  </div>
                </div>
              </div> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <div class="col-md-12 mb-5">
            <div class="text-center mt-8">
              <div class="mb-3">
                <img src="<?php echo e(url('/')); ?>/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Savings</h3>
              <p class="text-dark text-sm card-text">We couldn't find any saving history to this account</p>
            </div>
          </div>
          <?php endif; ?>
        </div> 
        <div class="row">
          <div class="col-md-12">
          <?php echo e($save->links('pagination::bootstrap-4')); ?>

          </div>
        </div>
      </div> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/user/savings/index.blade.php ENDPATH**/ ?>