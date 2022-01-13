<?php $__env->startSection('content'); ?>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0"><?php echo e(__('Savings')); ?></h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-buttons">
          <thead>
            <tr>
              <th><?php echo e(__('S / N')); ?></th>
              <th><?php echo e(__('Name')); ?></th>
              <th><?php echo e(__('Amount')); ?></th>
              <th><?php echo e(__('Reference ID')); ?></th>
              <th><?php echo e(__('Purpose')); ?></th>
              <th><?php echo e(__('Profit')); ?></th>
              <th><?php echo e(__('End Date')); ?></th>
              <th><?php echo e(__('Percent')); ?></th>
              <th><?php echo e(__('Duration')); ?></th>
              <th><?php echo e(__('Status')); ?></th>
              <th><?php echo e(__('Created')); ?></th>
              <th><?php echo e(__('Updated')); ?></th>
            </tr>
          </thead>
          <tbody>  
            <?php $__currentLoopData = $savings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(++$k); ?>.</td>
                <td><?php if($val->user['id']==null): ?> [Deleted] <?php else: ?> <a href="<?php echo e(url('admin/manage-user')); ?>/<?php echo e($val->user['id']); ?>"><?php echo e($val->user['first_name'].' '.$val->user['last_name']); ?></a> <?php endif; ?></td>
                <td><?php echo e($currency->symbol.number_format($val->amount, 2, '.', '')); ?></td>
                <td><?php echo e($val->ref_id); ?></td>
                <td><?php echo e($val->purpose); ?></td>
                <td><?php echo e($currency->symbol.number_format($val->profit, 2, '.', '')); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->end_date))); ?></td>
                <td><?php echo e($val->percent); ?>%</td>
                <td><?php echo e($val->duration); ?></td>            
                <td>
                    <?php if($val->status==0): ?>
                        <span class="badge badge-pill badge-info"><i class="fad fa-spinner"></i> <?php echo e(__('Still Running')); ?></span>
                    <?php elseif($val->status==1): ?>
                        <span class="badge badge-pill badge-success"><i class="fad fa-check"></i> <?php echo e(__('Paid Off')); ?></span>                        
                    <?php elseif($val->status==2): ?>
                        <span class="badge badge-pill badge-danger"><i class="fad fa-close"></i> <?php echo e(__('Cancelled')); ?></span>
                    <?php endif; ?>
                </td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/admin/transfer/saving.blade.php ENDPATH**/ ?>