<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="<?php echo e(url('/')); ?>"/>
        <title><?php echo e($title); ?> | <?php echo e($set->site_name); ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="<?php echo e($set->site_name); ?>"/>
        <meta name="application-name" content="<?php echo e($set->site_name); ?>"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="<?php echo e($set->site_desc); ?>" />
        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link2); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/asset/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="<?php echo e(asset('asset/css/theme.css')); ?>" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/toast.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>
<!-- header begin-->
    <header id="header" class="header header-bg-transparent header-abs-top">
      <div class="header-section">
        <div id="logoAndNav" class="container-fluid">
          <!-- Nav -->
          <nav class="navbar navbar-expand header-navbar">
            <!-- White Logo -->
            <a class=" navbar-brand" href="<?php echo e(url('/')); ?>" aria-label="Front">
              <img src="<?php echo e(asset('asset/'.$logo->image_link)); ?>" alt="Logo">
            </a>
            <!-- End White Logo -->

            <!-- Default Logo -->
            <!-- End Default Logo -->

            <!-- Button -->
            <div class="ml-auto">
              <a class="btn btn-sm btn-link text-body" href="<?php echo e(url()->previous()); ?>">
                <i class="fas fa-angle-left fa-sm mr-1"></i> Go back
              </a>
            </div>
            <!-- End Button -->
          </nav>
          <!-- End Nav -->
        </div>
      </div>
    </header>
<!-- header end -->
    <main id="content" role="main">
      <div class="d-flex align-items-center position-relative vh-lg-100">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-navy vh-lg-100 px-0" style="background-image: url(<?php echo e(url('/')); ?>/asset/images/abstract-shapes-20.svg);">
          <div class="w-100 p-5">
            <!-- SVG Quote -->
            <figure class="text-center mb-5 mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
                <path fill="#fff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                  C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                  c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                  C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
              </svg>
            </figure>
            <!-- End SVG Quote -->

            <!-- Testimonials Carousel Main -->
            <div id="testimonialsNavMain" class="js-slick-carousel slick mb-4"
                data-hs-slick-carousel-options='{
                  "autoplay": true,
                  "autoplaySpeed": 5000,
                  "fade": true,
                  "infinite": true,
                  "asNavFor": "#testimonialsNavPagination"
                }'>
                <?php $__currentLoopData = $reviewlogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="js-slide">
                  <!-- Testimonials -->
                  <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <blockquote class="h3 text-white font-weight-normal mb-4"><?php echo e($val->review); ?></blockquote>
                    <span class="d-block text-white-70"><?php echo e($val->name); ?>, <?php echo e($val->occupation); ?></span>
                  </div>
                  <!-- End Testimonials -->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End Testimonials Carousel Main -->

            <!-- Testimonials Carousel Pagination -->
            <div id="testimonialsNavPagination" class="js-slick-carousel slick slick-transform-off slick-pagination-modern mx-auto"
                data-hs-slick-carousel-options='{
                  "infinite": true,
                  "slidesToShow": 3,
                  "centerMode": true,
                  "isThumbs": true,
                  "asNavFor": "#testimonialsNavMain"
                }'>
                <?php $__currentLoopData = $reviewlogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="js-slide">
                    <div class="avatar avatar-circle mx-auto">
                      <img class="avatar-img" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" alt="Image Description">
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!-- End Testimonials Carousel Pagination -->

            <!-- Clients -->
            <div class="position-absolute right-0 bottom-0 left-0 text-center p-5">
              <span class="d-block text-white-70 mb-3">Front partners</span>
              <div class="d-flex justify-content-center">
              <?php $__currentLoopData = $brandlogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img class="max-w-10rem mx-auto" src="<?php echo e(asset('asset/brands/'.$val->image)); ?>" alt="Image Description">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <!-- End Clients -->
          </div>
        </div>
      <?php echo $__env->yieldContent('content'); ?>
      </div>
    </main>
<!-- footer begin -->
        <?php echo $set->livechat; ?>

        <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JS Implementing Plugins -->
        <script src="<?php echo e(url('/')); ?>/asset/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/vendor/slick-carousel/slick/slick.js"></script>
        <!-- JS Front -->
        <script src="<?php echo e(url('/')); ?>/asset/js/hs.core.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/js/hs.validation.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/js/hs.slick-carousel.js"></script>
        <script src="<?php echo e(url('/')); ?>/asset/js/toast.js"></script>

        <!-- JS Plugins Init. -->
        <script>
          $(document).on('ready', function () {
            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
              var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function () {
              var validation = $.HSCore.components.HSValidation.init($(this));
            });
          });
        </script>
        <!-- IE Support -->
        <script>
            if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo e(url('/')); ?>/asset/vendor/polifills.js"><\/script>');
        </script>
        <?php echo $__env->yieldContent('script'); ?>
        <?php if(session('success')): ?>
            <script>
              "use strict";
              toastr.success("<?php echo e(session('success')); ?>");
            </script>    
        <?php endif; ?>
        <?php if(session('alert')): ?>
            <script>
              "use strict";
              toastr.warning("<?php echo e(session('alert')); ?>");
            </script>
        <?php endif; ?>

        <?php if($set->recaptcha==1): ?>
          <?php echo NoCaptcha::renderJs(); ?>

        <?php endif; ?>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/loginlayout.blade.php ENDPATH**/ ?>