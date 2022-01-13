
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-img-hero" style="background-image: url(<?php echo e(url('/')); ?>/asset/images/abstract-shapes-12.svg);">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto">
            <h1><?php echo e(__('FAQ')); ?></h1>
            <p><?php echo e(__('Search our FAQ for answers to anything you might ask.')); ?></p>
        </div>
    </div>
</div>
<div class="container space-2 space-bottom-lg-3">
      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
            <?php $__currentLoopData = $fcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="cat<?php echo e($val->id); ?>" class="space-bottom-1">
                    <h2><?php echo e($val->name); ?></h2>
                    <div id="basicsAccordion">
                        <?php
                            $faq=App\Models\Faq::whereCat_id($val->id)->get();
                        ?>
                        <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Card -->
                                <div class="card shadow-none mb-3">
                                    <div class="card-header card-collapse" id="basicsHeadingOne<?php echo e($faqs->id); ?>">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne<?php echo e($faqs->id); ?>" aria-expanded="false" aria-controls="basicsCollapseOne<?php echo e($faqs->id); ?>">
                                            <?php echo e($faqs->question); ?>

                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseOne<?php echo e($faqs->id); ?>" class="collapse" aria-labelledby="basicsHeadingOne<?php echo e($faqs->id); ?>" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p><?php echo e($faqs->answer); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Card -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/front/faq.blade.php ENDPATH**/ ?>