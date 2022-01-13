
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-img-hero" style="background-image: url(<?php echo e(url('/')); ?>/asset/images/abstract-shapes-12.svg);">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto">
            <h1><?php echo e(__('Terms & Conditions')); ?></h1>
            <p><?php echo e($set->title); ?></p>
        </div>
    </div>
</div>
<div class="container space-2 space-bottom-lg-3">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="intro" class="space-bottom-1">
                <p><?php echo $about->terms; ?></p>
            </div>
            <div id="stickyBlockEndPoint"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/front/terms.blade.php ENDPATH**/ ?>