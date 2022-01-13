<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">  
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0 text-dark font-weight-bolder"><?php echo e(__('Referral Earnings')); ?></h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead>
                <tr>
                  <th><?php echo e(__('S / N')); ?></th>
                  <th><?php echo e(__('Reference ID')); ?></th>
                  <th><?php echo e(__('Amount')); ?></th>
                  <th><?php echo e(__('From')); ?></th>
                  <th><?php echo e(__('Plan')); ?></th>
                  <th><?php echo e(__('Created')); ?></th>
                </tr>
              </thead>
              <tbody>  
                <?php $__currentLoopData = $earning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$k); ?>.</td>
                    <td>#<?php echo e($val->trx); ?></td>
                    <td><?php echo e($currency->symbol.number_format($val->amount)); ?></td>
                    <td><?php if($val->ref_id!=null): ?><?php echo e($val->shared['first_name']); ?> <?php echo e($val->shared['last_name']); ?> <?php else: ?> [Account Deleted]<?php endif; ?></td>
                    <td><?php echo e($val->plan['name']); ?></td>
                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <?php if($set->referral==1): ?>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title mb-3 text-dark"><?php echo e(__('Referral link')); ?></h3>
            <p class="card-text text-sm text-dark"><?php echo e(__('Automatically Top up your Balance by Sharing your Referral Link, Earn a percentage of whatever Plan your Referred user Buys.')); ?></p>
            <span class="form-text text-dark text-sm"><?php echo e($user->username); ?></span>
            <button type="button" class="btn-icon-clipboard" data-clipboard-text="<?php echo e($user->username); ?>" title="Copy"><?php echo e(__('Copy')); ?></button>
          </div>
        </div>
        <?php endif; ?>
          <div class="card">
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Referrals</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <tbody>
                  <?php $__currentLoopData = $referral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="table-user">
                        <img src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($val['image']); ?>" class="avatar rounded-circle mr-3">
                      </td>                      
                      <td>
                        <?php echo e($val->first_name); ?> <?php echo e($val->last_name); ?>

                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      </div> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/profile/referral.blade.php ENDPATH**/ ?>