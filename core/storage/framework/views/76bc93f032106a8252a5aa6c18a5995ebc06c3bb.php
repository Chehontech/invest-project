<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder"><?php echo e(__('Transactions')); ?></h6>
      </div>
    </div>
    <div class="row" id="earnings">
      <?php if(count($profit)>0): ?>
        <div class="col-md-12">
          <div class="card">
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-buttons">
                <thead>
                    <tr>
                    <th><?php echo e(__('S / N')); ?></th>
                    <th><?php echo e(__('Reference ID')); ?></th>
                    <th><?php echo e(__('Units')); ?></th>
                    <th><?php echo e(__('Amount')); ?></th>
                    <th><?php echo e(__('Profit')); ?></th>
                    <th><?php echo e(__('Status')); ?></th>
                    <th><?php echo e(__('Started')); ?></th>
                    <th><?php echo e(__('End date')); ?></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>  
                    <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$k); ?>.</td>
                        <td><?php echo e($val->trx); ?></td>
                        <td><?php echo e($val->units); ?></td>
                        <td><?php echo e($currency->symbol.number_format($val->amount)); ?></td>
                        <td><?php echo e($currency->symbol.number_format($val->profit)); ?></td>
                        <td><?php if($val->status==1): ?> Running <?php else: ?> Ended <?php endif; ?></td>
                        <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                        <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></td>
                        <td><a href="<?php echo e(route('view.sandplan', ['id' => $val->plan['slug']])); ?>"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="col-md-12">
          <p class="text-center text-muted card-text mt-8">You have not sponsored any plan</p>
        </div>
      <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/user/trading/sandtrades.blade.php ENDPATH**/ ?>