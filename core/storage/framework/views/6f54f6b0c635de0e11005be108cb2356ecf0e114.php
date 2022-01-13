<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder"><?php echo e(__('Followed Plans')); ?></h6>
      </div>
    </div>
    <div class="row align-items-center"> 
      <?php if(count($followed)>0): ?> 
        <?php $__currentLoopData = $followed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4">
            <div class="card">
              <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->plan['image']); ?>" alt="Image placeholder">
              <div class="card-body">
                <span class="text-sm text-muted mb-0"><?php echo e($val->plan['original']-$val->plan['units']); ?> / <?php echo e($val->plan['original']); ?></span>
                <div class="progress progress mb-3">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($val->plan['original']-$val->plan['units'])*100)/$val->plan['original']); ?>%;"></div>
                </div>
                <h5 class="h2 card-title mb-0"><?php echo e($val->plan['name']); ?></h5>
                <small class="text-muted"><?php echo e($val->plan['location']); ?> - <?php echo e($val->plan['duration'].' '.$val->plan['period']); ?></small>
                <div class="row justify-content-between align-items-center mb-3">
                  <div class="col-6">
                    <span class="form-text text-sm text-dark"><?php echo e(__('Price')); ?></span>
                    <span class="form-text text-xs text-muted"><?php echo e($currency->symbol.$val->plan['price']); ?> @ 1 Unit</span>
                  </div>
                  <div class="col-6"> 
                    <span class="form-text text-sm text-dark"><?php echo e(__('Returns')); ?></span>
                    <h4 class="mb-1 h1 text-primary"><?php echo e($val->plan['interest']); ?>%</h4> 
                  </div>
                  <div class="col-6">
                      <span class="form-text text-sm text-dark"><?php echo e(__('Start Date')); ?></span>
                      <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->plan['start_date']))); ?></span>
                  </div>
                  <div class="col-6"> 
                    <span class="form-text text-sm text-dark"><?php echo e(__('End Date')); ?></span>
                    <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->plan['expiring_date']))); ?></span> 
                  </div>
                </div>    
                  <?php
                    $check=App\Models\Sandfollowed::whereplan_id($val->plan['id'])->whereuser_id($user->id)->get();     
                    $ss=App\Models\Sandfollowed::whereplan_id($val->plan['id'])->whereuser_id($user->id)->first();     
                  ?> 
                  <div class="row justify-content-between align-items-center">
                    <div class="col-6 text-left"> 
                      <?php if(count($check)>0): ?>
                        <a href="<?php echo e(route('unfollow', ['id' => $val->plan['id']])); ?>" class="text-uppercase text-xs">unfollow</a>
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
            <div class="btn-wrapper text-center">
                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                </a>
            </div>
            <h3 class="text-dark">No Plans</h3>
            <p class="text-dark text-sm card-text"><?php echo e(__('You have not followed any plan')); ?></p>
          </div>
        </div>
        <?php endif; ?>      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/trading/followed.blade.php ENDPATH**/ ?>