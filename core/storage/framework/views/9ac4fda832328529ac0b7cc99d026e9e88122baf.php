
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
    <div class="position-relative">
      <!-- Main Slider -->
      <div id="heroSlider" class="js-slick-carousel slick"
           data-hs-slick-carousel-options='{
           "vertical": true,
           "verticalSwiping": true,
           "autoplay": true,
           "autoplaySpeed": 10000,
           "dots": true,
           "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3",
           "asNavFor": "#heroSliderNav",
           "responsive": [
             {
               "breakpoint": 576,
               "settings": {
                 "vertical": false,
                 "verticalSwiping": false
               }
             }
           ]
         }'>
         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($val->image); ?>);">
            <!-- News Block -->
                <div class="container d-flex align-items-center min-h-620rem">
                    <div class="w-lg-40 mr-5">
                        <div class="mb-5">
                            <h3 class="h1 font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="150"><?php echo e($val->title); ?></h3>
                        </div>
                        <a class="btn btn-primary btn-wide transition-3d-hover" href="<?php echo e(url('/')); ?>/single/<?php echo e($val->id); ?>/<?php echo e(str_slug($val->title)); ?>" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                    </div>
                </div>
            <!-- End News Block -->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <!-- End Main Slider -->

      <!-- Slider Nav -->
      <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
        <div class="content-centered-y right-0 mr-3">
          <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
               data-hs-slick-carousel-options='{
               "vertical": true,
               "verticalSwiping": true,
               "autoplay": true,
               "autoplaySpeed": 10000,
               "slidesToShow": 3,
               "isThumbs": true,
               "asNavFor": "#heroSlider"
             }'>
             <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="js-slide my-3">
                    <span class="text-white"><?php echo e($val->title); ?></span>
                    <span class="slick-pagination-line-progress">
                    <span class="slick-pagination-line-progress-helper"></span>
                    </span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </div>
      <!-- End Slider Nav -->
    </div>
<!-- End Hero Section -->
    <!-- Blogs Section -->
    <div class="container space-2 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8">
          <!-- Blog -->
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="row mb-7">
                <div class="col-md-5">
                <img class="card-img" src="<?php echo e(url('/')); ?>/asset/thumbnails/<?php echo e($val->image); ?>" alt="Image Description">
                </div>
                <div class="col-md-7">
                <div class="card-body d-flex flex-column h-100 px-0">
                    <h3><a class="text-inherit" href="<?php echo e(url('/')); ?>/single/<?php echo e($val->id); ?>/<?php echo e(str_slug($val->title)); ?>"><?php echo e($val->title); ?></a></h3>
                    <p><?php echo str_limit($val->content, 60);; ?>..</p>
                    <div class="media align-items-center mt-auto">
                        <div class="media-body">
                            <small class="d-block"><?php echo e(date("M j, Y", strtotime($val->created_at))); ?></small>
                        </div>
                    </div>
                </div>
                </div>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- End Blog -->

          <?php echo e($posts->render()); ?>

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>
        </div>
      </div>
    </div>
    <!-- End Blogs Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/front/blog.blade.php ENDPATH**/ ?>