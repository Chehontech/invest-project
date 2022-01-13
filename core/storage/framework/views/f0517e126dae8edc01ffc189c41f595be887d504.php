<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                <a data-toggle="modal" data-target="#create" href="" class="btn btn-sm btn-neutral add-elem"><i class="fa fa-plus"></i> <?php echo e(__('Faq')); ?></a>
                <a data-toggle="modal" data-target="#cat" href="" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <?php echo e(__('Category')); ?></a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0 h4 text-dark font-weight-bolder"><?php echo e(__('Category')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('S/N')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Created')); ?></th>
                                    <th><?php echo e(__('Updated')); ?></th>
                                    <th class="scope"></th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $fcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->name); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="">
                                            <div class="dropdown">
                                                <a class="text-dark more-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a data-toggle="modal" data-target="#catdelete<?php echo e($val->id); ?>" href="" class="dropdown-item"><?php echo e(__('Delete')); ?></a>
                                                    <a data-toggle="modal" data-target="#catupdate<?php echo e($val->id); ?>" href="" class="dropdown-item"><?php echo e(__('Edit')); ?></a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>                     
                                </tr>
                                <div class="modal fade" id="catdelete<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-body p-0">
                                                <div class="card bg-white border-0 mb-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0"><?php echo e(__('Are you sure you want to delete this?')); ?></h3>
                                                    </div>
                                                    <div class="card-body px-lg-5 py-lg-5 text-right">
                                                        <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                        <a  href="<?php echo e(route('delete.faqcategory', ['id' => $val->id])); ?>" class="btn btn-danger btn-sm"><?php echo e(__('Proceed')); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="catupdate<?php echo e($val->id); ?>" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo e(route('faqcat.update')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?>:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="name" class="form-control" value="<?php echo e($val->name); ?>">
                                                            <input type="hidden" name="id" value="<?php echo e($val->id); ?>">
                                                        </div>
                                                    </div>                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
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
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="card-title"><?php echo e(__('Faq')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('S/N')); ?></th>
                                    <th><?php echo e(__('Category')); ?></th>
                                    <th><?php echo e(__('Questions')); ?></th>
                                    <th><?php echo e(__('Created')); ?></th>
                                    <th><?php echo e(__('Updated')); ?></th>
                                    <th class="scope"></th>    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$k); ?>.</td>
                                    <td><?php echo e($val->cat['name']); ?></td>
                                    <td><?php echo e($val->question); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                    <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                                    <td class="text-center">
                                        <div class="">
                                            <div class="dropdown">
                                                <a class="text-dark more-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a data-toggle="modal" data-target="#delete<?php echo e($val->id); ?>" href="" class="dropdown-item"><?php echo e(__('Delete')); ?></a>
                                                    <a data-toggle="modal" data-target="#update<?php echo e($val->id); ?>" href="" class="dropdown-item"><?php echo e(__('Edit')); ?></a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>                     
                                </tr>
                                <div class="modal fade" id="delete<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-body p-0">
                                                <div class="card bg-white border-0 mb-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0"><?php echo e(__('Are you sure you want to delete this?')); ?></h3>
                                                    </div>
                                                    <div class="card-body px-lg-5 py-lg-5 text-right">
                                                        <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                        <a  href="<?php echo e(route('faq.delete', ['id' => $val->id])); ?>" class="btn btn-danger btn-sm"><?php echo e(__('Proceed')); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="update<?php echo e($val->id); ?>" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header">   
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo e(route('faq.update')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2"><?php echo e(__('Question')); ?>:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="question" class="form-control" value="<?php echo e($val->question); ?>">
                                                            <input type="hidden" name="id" value="<?php echo e($val->id); ?>">
                                                        </div>
                                                    </div>  
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2"><?php echo e(__('Answer')); ?>:</label>
                                                        <div class="col-lg-10">
                                                            <textarea type="text" name="answer" rows="8" class="form-control"><?php echo e($val->answer); ?></textarea>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?>:</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control select" name="cat" data-dropdown-css-class="bg-info-800" data-fouc>
                                                                <?php $__currentLoopData = $fcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                                <option value="<?php echo e($dval->id); ?>"
                                                                    <?php if($val->cat['id']==$dval->id): ?>
                                                                        selected
                                                                    <?php endif; ?>
                                                                    ><?php echo e($dval->name); ?>

                                                                </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>                 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
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
    <div id="create" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content form-block form-modal">
                <div class="modal-header">   
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?php echo e(route('faq.create')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Question')); ?>:</label>
                            <div class="col-lg-10">
                                <input type="text" name="question" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Answer')); ?>:</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="answer" rows="8" class="form-control"></textarea>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?>:</label>
                            <div class="col-lg-10">
                                <select class="form-control select" name="cat" data-dropdown-css-class="bg-info-800" data-fouc>
                                    <?php $__currentLoopData = $fcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="cat" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content form-block form-modal">
                <div class="modal-header">   
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?php echo e(route('faqcat.create')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?>:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>              
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/admin/web-control/faq.blade.php ENDPATH**/ ?>