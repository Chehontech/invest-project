<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Edit review')); ?></h3>
                    </div>
                    <div class="card-body form-block">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('review.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <!--<label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?>:</label> -->
                                <div class="col-lg-10">
                                    <input type="text" name="name" placeholder="<?php echo e(__('Name')); ?>:" class="form-control" value="<?php echo e($val->name); ?>">
                                    <input type="hidden" name="id" value="<?php echo e($val->id); ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                               <!-- <label class="col-form-label col-lg-2"><?php echo e(__('Occupation')); ?>:</label> -->
                                <div class="col-lg-10">
                                    <input type="text" name="occupation" placeholder="<?php echo e(__('Occupation')); ?>:" class="form-control" value="<?php echo e($val->occupation); ?>">
                                </div>
                            </div>                         
                            <div class="form-group row">
                                <!-- <label class="col-form-label col-lg-2"><?php echo e(__('Review')); ?>:</label> -->
                                <div class="col-lg-10">
                                    <textarea type="text" name="review" placeholder="<?php echo e(__('Review')); ?>:" class="form-control"><?php echo e($val->review); ?></textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Image')); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="update" lang="en">
                                    <label class="custom-file-label" for="customFileLang" style="border-color: <?php echo e($set->s_c); ?>;"><?php echo e(__('Choose Media')); ?></label>
                                </div>
                            </div>           
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/admin/web-control/review-edit.blade.php ENDPATH**/ ?>