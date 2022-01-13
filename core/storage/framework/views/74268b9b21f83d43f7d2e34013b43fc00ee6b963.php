<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Payment gateways')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('S/N')); ?></th>
                                    <th><?php echo e(__('Main name')); ?></th>
                                    <th><?php echo e(__('Name for users')); ?></th>
                                    <th><?php echo e(__('Minimum')); ?></th>
                                    <th><?php echo e(__('Maximum')); ?></th>
                                    <th><?php echo e(__('Charge')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Updated')); ?></th>
                                    <th class="text-center"></th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $gateway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->main_name); ?></td>
                                    <td><?php echo e($val->name); ?></td>
                                    <td><?php echo e($currency->symbol.$val->minamo); ?></td>
                                    <td><?php echo e($currency->symbol.$val->maxamo); ?></td>
                                    <td><?php echo e($val->charge); ?>%</td>
                                    <td>
                                        <?php if($val->status==0): ?>
                                            <span class="badge badge-danger badge-pill"><?php echo e(__('Disabled')); ?></span>
                                        <?php elseif($val->status==1): ?>
                                            <span class="badge badge-success badge-pill"><?php echo e(__('Active')); ?></span> 
                                        <?php endif; ?>
                                    </td>  
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                    <a data-toggle="modal" data-target="#edit<?php echo e($val->id); ?>" class="btn btn-primary btn-sm text-white" >
                                        <?php echo e(__('Edit')); ?>

                                    </a>
                                    </td>                   
                                </tr>
                                <div id="edit<?php echo e($val->id); ?>" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo e($val->main_name); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo e(url('admin/storegateway')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label class="col-form-label"><?php echo e(__('Name of gateway for users')); ?></label>
                                                                <input value="<?php echo e($val->id); ?>"type="hidden" name="id">
                                                                <input type="text" value="<?php echo e($val->name); ?>" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label"><?php echo e(__('Minimun Deposit')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" name="minamo" maxlength="10" class="form-control"value="<?php echo e($val->minamo); ?>" required>
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label"><?php echo e(__('Maximum Deposit')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" name="maxamo" maxlength="10" class="form-control"value="<?php echo e($val->maxamo); ?>" required>
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label"><?php echo e(__('Deposit charge')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" step="any" name="charge" maxlength="10" class="form-control"value="<?php echo e($val->charge); ?>">
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text">%</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if($val->id==101): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('PAYPAL BUSINESS EMAIL')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    <?php elseif($val->id==102): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Perfect Money USD account')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Alternate passphrase')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php elseif($val->id==103): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Secret key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Publishable key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php elseif($val->id==104): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Merchant email')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Secret key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <?php elseif($val->id==107): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Public key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Secret key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <?php elseif($val->id==108): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Public key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Secret key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php elseif($val->id==501): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Api key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Xpub code')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php elseif($val->id==505): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Public key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Private key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                        <?php elseif($val->id==506): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Public key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Private key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <?php elseif($val->id==507): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('API key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>                                                       
                                                        <?php elseif($val->id==508): ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Public Key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Secret Key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val2); ?>" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Merchant Key')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val3); ?>" class="form-control" id="val3" name="val3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php else: ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label"><?php echo e(__('Payment Details')); ?></label>
                                                                    <input type="text" value="<?php echo e($val->val1); ?>" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                        <div class="form-group">
                                                            <label class="col-form-label"><?php echo e(__('Status')); ?></label>
                                                            <select class="form-control select" name="status">
                                                                <option value="1" 
                                                                    <?php if($val->status==1): ?>
                                                                        selected
                                                                    <?php endif; ?>
                                                                    ><?php echo e(__('Active')); ?>

                                                                </option>
                                                                <option value="0"  
                                                                    <?php if($val->status==0): ?>
                                                                        selected
                                                                    <?php endif; ?>
                                                                    ><?php echo e(__('Deactive')); ?>

                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                    <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save changes')); ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/deposit/methods.blade.php ENDPATH**/ ?>