<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                    <a  href="<?php echo e(route('admin.sand.plan.create')); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> <?php echo e(__('Create Plan')); ?></a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Plans')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('S/N')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Duration')); ?></th>
                                    <th><?php echo e(__('Units')); ?></th>
                                    <th><?php echo e(__('Interest')); ?></th>
                                    <th><?php echo e(__('Category')); ?></th>
                                    <th><?php echo e(__('Location')); ?></th>
                                    <th><?php echo e(__('Insurance')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Expiring date')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th class="text-center"><?php echo e(__('Action')); ?></th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->name); ?></td>
                                    <td><?php echo e($val->duration.$val->period); ?>(s)</td>
                                    <td><?php echo e($val->original-$val->units); ?>/<?php echo e($val->original); ?></td>
                                    <td><?php echo e($val->interest); ?>%</td>
                                    <td><?php echo e($val->cated['name']); ?></td>
                                    <td><?php echo e($val->location); ?></td>
                                    <td><?php if($val->insurance==1): ?> Yes <?php else: ?> No <?php endif; ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->start_date))); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></td>
                                    <td>
                                        <?php if($val->status==1): ?>
                                            <span class="badge badge-pill badge-success"><?php echo e(__('Active')); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge-pill badge-danger"><?php echo e(__('Disabled')); ?></span>
                                        <?php endif; ?>
                                    </td>  
                                    <td class="text-center">
                                        <div class="">
                                            <div class="dropdown">
                                                <a class="text-dark more-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a href="<?php echo e(route('admin.sand.femail', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Send email to Investors & Followers')); ?></a>
                                                    <a href="<?php echo e(route('admin.sand.plan.invest', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Investors')); ?></a>
                                                    <a href="<?php echo e(route('admin.sand.plan.edit', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Edit')); ?></a>
                                                </div>
                                            </div>
                                        </div> 
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/project/plans.blade.php ENDPATH**/ ?>