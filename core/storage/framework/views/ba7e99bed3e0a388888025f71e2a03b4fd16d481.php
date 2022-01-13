
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container space-top-3 space-top-lg-4 space-bottom-1 about-us">
    <!-- Hero -->
        <div class="text-center mb-5 mb-md-9">
            <p class="lead"><?php echo e(__('About us')); ?></p>
            <h1 class="display-4 mb-0">
                <span class="js-text-animation"></span>
            </h1>
        </div>
    <!-- End Hero -->
    <!-- Content -->
    <div class="cbp"
        data-hs-cbp-options='{
            "animationType": "quicksand",
            "gapHorizontal": 40,
            "gapVertical": 40,
            "mediaQueries": [
            {"width": 1500, "cols": 3},
            {"width": 1100, "cols": 3},
            {"width": 800, "cols": 3},
            {"width": 480, "cols": 2},
            {"width": 380, "cols": 1}
            ]
        }'>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Item -->
            <div class="cbp-item rounded product">
                <a class="cbp-caption" href="single-page-grid.html">
                <div class="cbp-caption-defaultWrap">
                    <img class="rounded" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image Description">
                </div>
                </a>
            </div>
        <!-- End Item -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- About Section -->
<div class="container space-1">
    <div class="row justify-content-lg-between">
            <div class="col-lg-12 about-text">
                <p><?php echo e($set->site_desc); ?></p>
                <p><?php echo $about->about; ?></p>
        </div>
    </div>
</div>
<!-- End About Section -->
<?php if($set->team==1): ?>
        <?php if(count($team)>0): ?>
            <div class="container space-1">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2">Our Team</span>
                    <h2><?php echo e($ui->team); ?></h2>
                </div>
                <!-- End Title -->

                <!-- Team Carousel -->
                <div class="js-slick-carousel slick slick-gutters-3 mb-5 mb-lg-3"
                    data-hs-slick-carousel-options='{
                        "slidesToShow": 4,
                        "dots": true,
                        "dotsClass": "slick-pagination d-lg-none",
                        "responsive": [{
                        "breakpoint": 1200,
                            "settings": {
                            "slidesToShow": 3
                            }
                        }, {
                        "breakpoint": 992,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 768,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 554,
                        "settings": {
                            "slidesToShow": 1
                        }
                        }]
                    }'>
                    <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="js-slide pb-6">
                    <!-- Team -->
                    <div class="card mx-3">
                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image); ?>" alt="Image Description">

                        <div class="card-body text-center">
                        <h4 class="mb-1"><?php echo e($val->name); ?></h4>
                        <p class="font-size-1 mb-0"><?php echo e($val->position); ?></p>
                        </div>
                    </div>
                    <!-- End Team -->
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- End Team Carousel -->
            </div>
        <?php endif; ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/front/about.blade.php ENDPATH**/ ?>