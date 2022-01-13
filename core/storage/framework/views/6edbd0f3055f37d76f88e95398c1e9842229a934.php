<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                    <a  href="<?php echo e(route('admin.sand.status.create', ['id' => $plan->id])); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> <?php echo e(__('Status Update')); ?></a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Plan Updates')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                        <thead>
                            <tr>
                            <th><?php echo e(__('S / N')); ?></th>
                            <th><?php echo e(__('Information')); ?></th>
                            <th><?php echo e(__('Report')); ?></th>
                            <th><?php echo e(__('Activity')); ?></th>
                            <th><?php echo e(__('Stage')); ?></th>
                            <th><?php echo e(__('Weeks')); ?></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php $__currentLoopData = $updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e(str_limit($val->information, 10)); ?></td>
                                <td><?php echo e(str_limit($val->report, 10)); ?></td>
                                <td><?php echo e(str_limit($val->activity, 10)); ?></td>
                                <td><?php echo e($val->stage); ?></td>
                                <td><?php echo e($val->weeks); ?></td>
                                <td class="text-center">
                                    <div class="text-right">
                                        <div class="dropdown">
                                            <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a href="<?php echo e(route('admin.sand.plan.status.edit', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Edit Update')); ?></a>
                                                <a href="<?php echo e(route('admin.sand.plan.status.image', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Status Images')); ?></a>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Edit')); ?></h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.sand.plan.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="<?php echo e($plan->name); ?>" reqiured>
                                    <input type="hidden" name="id" value="<?php echo e($plan->id); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($val->id); ?>" <?php if($plan->cat_id==$val->id): ?> <?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e($val->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                          
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Location')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="location" value="<?php echo e($plan->location); ?>" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1" <?php if($plan->status==1): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Active')); ?></option>
                                        <option value="0" <?php if($plan->status==0): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Disable')); ?></option>
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Insurance')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="insurance">
                                        <option value="1" <?php if($plan->insurance==1): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Yes')); ?></option>
                                        <option value="0" <?php if($plan->insurance==0): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('No')); ?></option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Media')); ?> *</label>
                                </div>
                            </div>     
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12"><?php echo e(__('Description')); ?></label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="8" name="description" class="form-control tinymce"><?php echo e($plan->description); ?></textarea>
                                </div>
                            </div>  
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>            
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/admin/project/edit.blade.php ENDPATH**/ ?>