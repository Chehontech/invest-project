

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row" id="earnings">
      <?php if(count($profit)>0): ?>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="mb-0"><?php echo e(__('Investments')); ?></h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                <thead>
                    <tr>
                    <th><?php echo e(__('S / N')); ?></th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Reference ID')); ?></th>
                    <th><?php echo e(__('Plan')); ?></th>
                    <th><?php echo e(__('Units')); ?></th>
                    <th><?php echo e(__('Amount')); ?></th>
                    <th><?php echo e(__('Profit')); ?></th>
                    <th><?php echo e(__('Status')); ?></th>
                    <th><?php echo e(__('Started')); ?></th>
                    <th><?php echo e(__('End date')); ?></th>
                    </tr>
                </thead>
                <tbody>  
                    <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$k); ?>.</td>
                        <td><a href="<?php echo e(url('admin/manage-user')); ?>/<?php echo e($val->user['id']); ?>"><?php echo e($val->user['first_name'].' '.$val->user['last_name']); ?></a></td>
                        <td>#<?php echo e($val->trx); ?></td>
                        <td><?php echo e($val->plan['name']); ?></td>
                        <td><?php echo e($val->units); ?></td>
                        <td><?php echo e($currency->symbol.number_format($val->amount)); ?></td>
                        <td><?php echo e($currency->symbol.number_format($val->profit)); ?></td>
                        <td><?php if($val->status==1): ?> Running <?php else: ?> Ended <?php endif; ?></td>
                        <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                        <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="col-md-12">
          <p class="text-center text-muted card-text mt-8">You have no investors yet</p>
        </div>
      <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/project/trades.blade.php ENDPATH**/ ?>