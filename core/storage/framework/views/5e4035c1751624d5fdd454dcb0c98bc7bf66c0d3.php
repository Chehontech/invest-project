<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">    
        <div class="card">
            <div class="card-header checkx">
                <h3 class="mb-0 text-dark font-weight-bolder"><?php echo e(__('Password')); ?></h3>
            </div>
          <div class="card-body form-block">
            <form action="<?php echo e(route('change.password')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('Current password')); ?></label>
                    <div class="col-lg-10">
                        <input type="password" name="password" class="form-control" placeholder="<?php echo e(__('Current password')); ?>" required>
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('New password')); ?></label>
                    <div class="col-lg-10">
                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="<?php echo e(__('New password')); ?>" required>
                        <span class="error form-error-msg"><span id="result"></span></span>
                        
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2"><?php echo e(__('Confirm password')); ?></label>
                    <div class="col-lg-10">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="<?php echo e(__('Confirm password')); ?>" required>
                        <span class="error form-error-msg" id="msg"></span>
                    </div>
                </div> 
                <h4 class="mb-0 text-dark font-weight-bolder"><?php echo e(__('Password requirements')); ?></h4>
                <p class="mb-2 text-default text-sm"><?php echo e(__('Ensure that these requirements are met')); ?></p>
                <ul class="text-default text-sm">
                  <li><?php echo e(__('Minimum 8 characters long - the more, the better')); ?></li>
                  <li><?php echo e(__('At least one lowercase character.')); ?></li>
                  <li><?php echo e(__('At least one uppercase character.')); ?></li>
                  <li><?php echo e(__('At least one number, symbol, or whitespace character.')); ?></li>
                </ul>
                <div class="text-right">
                    <button type="submit" class="btn btn-success btn-sm" id="update_password"><?php echo e(__('Update Password')); ?></button>
                </div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0 text-dark font-weight-bolder"><?php echo e(__('Devices')); ?></h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead>
                <tr>
                  <th><?php echo e(__('S / N')); ?></th>
                  <th><?php echo e(__('Name')); ?></th>
                  <th><?php echo e(__('Last login')); ?></th>
                  <th><?php echo e(__('Ip adress')); ?></th>
                </tr>
              </thead>
              <tbody>  
                <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$k); ?>.</td>
                    <td><?php echo e($val->name); ?></td>
                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                    <td><?php echo e($val->ip_address); ?></td>
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
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/user/security/password.blade.php ENDPATH**/ ?>