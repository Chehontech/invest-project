
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container space-top-3 space-bottom-2">
      <div class="w-lg-60 mx-lg-auto">
        <div class="mb-4">
          <h1 class="h2"><?php echo e($post->title); ?></h1>
        </div>

        <!-- Author -->
        <div class="border-top border-bottom py-4 mb-5">
          <div class="row align-items-md-center">
            <div class="col-md-7 mb-5 mb-md-0">
              <div class="media align-items-center">
                <div class="media-body font-size-1 ml-3">
                  <span class="d-block text-muted"><?php echo e(date("M j, Y", strtotime($post->created_at))); ?></span>
                </div>
              </div>
            </div>
            <?php $slug  = str_slug($post->title); ?>
            <div class="col-md-5">
              <div class="d-flex justify-content-md-end align-items-center">
                <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.facebook.com/sharer.php?u=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://twitter.com/intent/tweet?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>&text=<?php echo e($post->title); ?>">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://plus.google.com/share?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>&text=<?php echo e($post->title); ?>&hl=english">
                  <i class="fab fa-google-plus"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://pinterest.com/pin/create/button/?url=<?php echo e(url('/')); ?>/single/<?php echo e($post->id); ?>/<?php echo e($slug); ?>">
                  <i class="fab fa-pinterest-p"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Author -->
        <div class="my-4 my-sm-8">
            <img class="img-fluid rounded" src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($post->image); ?>" alt="Image Description">
        </div>
        <p><?php echo $post->details; ?></p>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/front/single.blade.php ENDPATH**/ ?>