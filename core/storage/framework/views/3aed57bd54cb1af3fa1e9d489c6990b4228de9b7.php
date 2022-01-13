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
        <link rel="stylesheet" href="<?php echo e(asset('asset/css/cus.css')); ?>" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/toast.css" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body class="login-page">
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
              <a class="btn btn-sm btn-link text-body btn-neo-lg" href="<?php echo e(url()->previous()); ?>">
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
      <div class="d-flex align-items-center position-relative vh-lg-100 login-block">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center vh-lg-100 px-0 rev-login">
          <div class="w-100 p-5">
          <?php if(count($reviewlogin)>0): ?>
            

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
                  <div class="w-md-80 w-lg-60 text-center mx-auto rev-body">
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
                      <!-- <img class="avatar-img" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" alt="Image Description"> -->
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!-- End Testimonials Carousel Pagination -->
            <?php endif; ?>
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
        !function ($) {
        //eyeOpenClass: 'fa-eye',
        //eyeCloseClass: 'fa-eye-slash',
            'use strict';

            $(function () {
                $('[data-toggle="password"]').each(function () {
                    var input = $(this);
                    var eye_btn = $(this).parent().find('.input-group-text');
                    eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
                    eye_btn.on('click', function () {
                        if (eye_btn.hasClass('input-password-hide')) {
                            eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                            eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
                            input.attr('type', 'text');
                        } else {
                            eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                            eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
                            input.attr('type', 'password');
                        }
                    });
                });
            });

        }(window.jQuery);
          "use strict";
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
            "use strict";
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
</html><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/loginlayout.blade.php ENDPATH**/ ?>