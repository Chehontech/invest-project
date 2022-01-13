<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div id="carouselExampleIndicators" class="carousel slide bg-transparent" data-ride="carousel">
                            <div class="carousel-inner bg-transparent">
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-item bg-transparent <?php if($val->id==$first->id): ?>active <?php endif; ?>">
                                        <img class="d-block w-100" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="product image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p><?php echo e($val->title); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"><?php echo e(__('Next')); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span class="form-text text-sm text-dark"><?php echo e(__('Activity')); ?></span>
                                <span class="form-text text-xs text-muted"><?php echo e($updates->activity); ?></span>
                            </div>
                            <div class="col-6"> 
                                <span class="form-text text-sm text-dark"><?php echo e(__('Progress')); ?></span> 
                                <span class="form-text text-xs text-muted"><?php echo e(__('Stage')); ?> <?php echo e($updates->stage); ?></span>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-12">
                                <span class="form-text text-sm text-dark"><?php echo e(__('Reports')); ?></span>
                                <span class="form-text text-sm text-muted"><?php echo e($updates->report); ?></span>
                            </div>
                            <div class="col-12"> 
                                <span class="form-text text-sm text-dark"><?php echo e(__('Description')); ?></span> 
                                <span class="form-text text-sm text-muted"><?php echo e($updates->information); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/trading/status.blade.php ENDPATH**/ ?>