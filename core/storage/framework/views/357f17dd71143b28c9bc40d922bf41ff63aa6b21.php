
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="position-relative bg-img-hero" style="background-image: url(<?php echo e(url('/')); ?>/asset/images/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-top-lg-4 space-bottom-2 space-bottom-lg-3 position-relative z-index-2">
            <div class="row justify-content-lg-between mb-10">
                <div class="col-md-6 col-lg-5">
                <!-- Info -->
                <div class="mb-5">
                    <h1><?php echo e($ui->header_title); ?></h1>
                    <p><?php echo e($ui->header_body); ?></p>
                </div>

                <div class="mb-3">
                    <a class="btn btn-primary btn-wide transition-3d-hover mb-2 mb-sm-0 mr-3" href="<?php echo e(route('register')); ?>">Get Started</a>
                    <a class="btn btn-link mb-2 mb-sm-0" href="<?php echo e(route('contact')); ?>">Let's Talk <i class="fad fa-angle-right fa-sm ml-1"></i></a>
                </div>

                <p class="small"><?php echo e(__('Next Settlement')); ?> <?php echo e(date("M j, Y", strtotime($set->next_settlement))); ?></p>
                <!-- End Info -->
                </div>

                <div class="col-md-6 d-none d-md-inline-block">
                <!-- SVG Illustration -->
                <figure class="w-100">
                    <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image1); ?>" alt="Image Description">
                </figure>
                <!-- End SVG Illustration -->
                </div>
            </div>
                  <!-- Clients -->
            <div class="row justify-content-between text-center mb-10">
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4 col-lg-2">
                        <div class="mx-3">
                            <img class="max-w-11rem max-w-md-13rem mx-auto" src="<?php echo e(url('/')); ?>/asset/brands/<?php echo e($val->image); ?>">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End Clients -->
        </div>
    </div>
    <div class="overflow-hidden">
        <div class="container space-lg-3">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2><?php echo e($ui->s2_title); ?></h2>
            </div>
            <!-- End Title -->

            <div class="w-md-80 mx-md-auto">
                <div class="row justify-content-lg-center align-items-md-center">
                    <div class="col-md-5 mb-7 mb-md-0">
                        <!-- Features -->
                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                                <i class="fad fa-check"></i>
                            </span>
                            <div class="media-body text-dark">
                                <?php echo e($val->title); ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- End Features -->
                    </div>

                <div class="col-md-7 col-lg-5">
                    <div class="position-relative">
                        <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h3><?php echo e($ui->s6_title); ?></h3>
                                    <p><?php echo e($ui->s2_body); ?></p>
                                </div>
                            </div>
                        <!-- End Card -->

                        <!-- SVG Elements -->
                            <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                                <div class="mb-n7 mr-n7">
                                <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/dots-2.svg" alt="Image Description">
                                </div>
                            </figure>
                        <!-- End SVG Elements -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="w-lg-85 mx-lg-auto">
        <!-- Card -->
        <div class="card p-5">
          <div class="row align-items-md-center">
            <div class="col-md-9 mb-5 mb-md-0">
              <h3>Save for your future</h3>
              <p>Plan ahead for miscelleanous expenses.</p>

              <!-- List -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Birthday
                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Birth of Child
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Rent
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      School fees
                    </div>
                  </div>                  
                </div>

                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Christmas 
                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Holiday
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Salah
                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                      Wedding
                    </div>
                  </div>
                </div>
              </div>
              <!-- End List -->
            </div>

            <div class="col-md-3 column-divider-md">
              <div class="pl-md-2">
                <h4>Interest Rates</h4>
                <small class="mb-0">3 Months - <?php echo e($set->s_3m); ?>%</small><br>
                <small class="mb-0">6 Months - <?php echo e($set->s_6m); ?>%</small><br>
                <small class="mb-0">9 Months - <?php echo e($set->s_9m); ?>%</small><br>
                <small class="mb-2">12 Months - <?php echo e($set->s_12m); ?>%</small><br>
                <a class="font-size-1 font-weight-bold" href="<?php echo e(route('user.savings')); ?>">Apply Now <i class="fad fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <div class="overflow-hidden space-bottom-3 space-top-3">
      <div class="container">
        <div class="w-lg-50 text-center mx-lg-auto mb-5">
          <span class="d-block small font-weight-bold text-cap mb-2"><?php echo e(__('how it works')); ?></span>
        </div>
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-4">
            <!-- Icon Block -->
            <ul class="step step-dashed mb-7">
              <li class="step-item">
                <div class="step-content-wrapper">
                  <span class="step-icon step-icon-xs step-icon-soft-primary">1</span>
                  <div class="step-content">
                    <h3 class="h4"><?php echo e($ui->h1_t); ?></h3>
                    <p><?php echo e($ui->h1_b); ?></p>
                  </div>
                 </div>
              </li>
              <li class="step-item mb-0">
                <div class="step-content-wrapper">
                  <span class="step-icon step-icon-xs step-icon-soft-primary">2</span>
                  <div class="step-content">
                    <h3 class="h4"><?php echo e($ui->h2_t); ?></h3>
                    <p><?php echo e($ui->h2_b); ?></p>
                  </div>
                </div>
              </li>
            </ul>
            <!-- End Icon Block -->
          </div>
          <div class="col-lg-4 mb-9 mb-lg-0">
            <!-- Mockups -->
            <div class="position-relative max-w-100rem mx-auto">
              <div class="device device-iphone-x w-100 mx-auto">
                <img class="device-iphone-x-frame" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image2); ?>" alt="Image Description">
              </div>
            </div>
            <!-- End Mockups -->
          </div>

          <div class="col-lg-4">
            <!-- Icon Block -->
            <ul class="step step-dashed mb-7">
              <li class="step-item">
                <div class="step-content-wrapper">
                  <span class="step-icon step-icon-xs step-icon-soft-primary">3</span>
                  <div class="step-content">
                    <h3 class="h4"><?php echo e($ui->h3_t); ?></h3>
                    <p><?php echo e($ui->h3_b); ?></p>
                  </div>
                 </div>
              </li>
              <li class="step-item mb-0">
                <div class="step-content-wrapper">
                  <span class="step-icon step-icon-xs step-icon-soft-primary">4</span>
                  <div class="step-content">
                    <h3 class="h4"><?php echo e($ui->h4_t); ?></h3>
                    <p><?php echo e($ui->h4_b); ?></p>
                  </div>
                </div>
              </li>
            </ul>
            <!-- End Icon Block -->
          </div>
        </div>
      </div>
    </div>
    <?php if($set->plan==1): ?>
        <div class="overflow-hidden space-bottom-3" id="plans">
            <div class="container pb-4">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <h2 class="h1"><?php echo e($ui->plan_title); ?></h2>
                <p><?php echo e($ui->plan_body); ?></p>
                </div>
                <!-- End Title -->
                <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-12">
                <div class="px-3">
                    <div class="js-slick-carousel slick slick-gutters-1"
                    data-hs-slick-carousel-options='{
                        "slidesToShow": 3,
                        "autoplay": true,
                        "autoplaySpeed": 3000,
                        "infinite": true,
                        "responsive": [{
                        "breakpoint": 992,
                            "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 768,
                        "settings": {
                            "slidesToShow": 1
                        }
                        }]
                    }'>
                    <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="js-slide mb-4">
                        <div class="card h-100 <?php if($val->popular==1): ?> text-white bg-dark <?php endif; ?>">
                            <div class="card-header border-0 mb-0 <?php if($val->popular==1): ?> text-white bg-dark <?php endif; ?> text-center">
                                <span class="h3 <?php if($val->popular==1): ?> text-white <?php endif; ?>"><?php echo e($val->name); ?></span>
                            </div>
                            <div class="card-body">
                                <?php if($val->popular==1): ?>
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-star icon-soft-warning mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php echo e(__('Most popular')); ?>

                                    </div>
                                </div> 
                                <?php endif; ?>                         
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php echo e($currency->symbol.number_format($val->amount)); ?> <?php echo e(__('Maximum Deposit')); ?>

                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    Runs for <?php echo e($val->duration); ?> <?php echo e($val->period); ?><?php if($val->duration>1): ?>s <?php endif; ?>
                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php if($val->ref_percent!=null): ?><?php echo e($val->ref_percent); ?>% <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?><?php echo e(__('Referral Bonus')); ?>

                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php if($val->bonus!=null): ?><?php echo e($val->bonus); ?>% <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?><?php echo e(__('Investment Bonus')); ?>

                                    </div>
                                </div>
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php if($val->claim==1): ?> <?php echo e(__('Access to Profit anytime')); ?> <?php else: ?> <?php echo e(__('Access to profit at end of plan')); ?> <?php endif; ?>
                                    </div>
                                </div>                               
                                <div class="media font-size-1 mb-3">
                                    <i class="fad fa-check <?php if($val->popular==1): ?> icon-soft-warning <?php else: ?> text-success <?php endif; ?> mt-1 mr-2"></i>
                                    <div class="media-body">
                                    <?php if($val->recurring==1): ?> <?php echo e(__('Recurring capital investment')); ?> <?php else: ?> <?php echo e(__('No recurring capital investment')); ?> <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 <?php if($val->popular==1): ?> text-white bg-dark <?php endif; ?>">
                            <a href="<?php echo e(route('register')); ?>" class="btn <?php if($val->popular==1): ?> btn-light <?php else: ?> btn-soft-primary <?php endif; ?> btn-block transition-3d-hover"><?php echo e(__('Get Started')); ?></a>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="bg-soft-warning rounded mx-3 mx-xl-10 space-bottom-3 castro-secret2">
            <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
                <div class="px-3">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small text-dark-70 font-weight-bold text-cap mb-2">INVEST IN COMPANIES</span>
                    <h2 class="text-dark">See how <?php echo e($set->site_name); ?> is helping people get organized and work smarter</h2>
                </div>
                <!-- End Title -->

                <!-- Slick Carousel -->
                <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3"
                    data-hs-slick-carousel-options='{
                        "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                        "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                        "slidesToShow": 3,
                        "infinite": true,
                        "dots": true,
                        "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                        "responsive": [{
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
                    <?php $__currentLoopData = $sandplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="js-slide mb-4">
                        <!-- Card Info -->
                        <a href="<?php echo e(route('check.plan', ['id' => $val->id])); ?>">
                            <div class="card h-100">
                                <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image Description">
                                <div class="card-body">
                                    <h5 class="card-title mb-2"><?php echo e($val->name); ?></h5>
                                    <small class="card-text"><?php echo str_limit($val->description, 100);; ?></small>
                                    <small class="card-text"><span class="text-success"><?php echo e($val->interest); ?>%</span> Returns in <?php echo e($val->duration.' '.$val->period); ?></small>
                                    <small class="card-text"><span class="text-success"><?php echo e($currency->symbol.$val->price); ?></span> per Unit</small><br>
                                </div>
                            </div>
                        </a>
                        <!-- End Card Info -->
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- End Slick Carousel -->
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Services Section -->
        <div class="container space-bottom-3 space-top-3">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <!-- Card -->
                    <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover p-5">
                        <div class="w-65 pr-2">
                            <h2><?php echo e($ui->item1_title); ?></h2>
                            <p><?php echo e($ui->item1_body); ?></p>
                        </div>
                        <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                            <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image4); ?>" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Card -->
                </div>

                <div class="col-lg-6">
                <!-- Card -->
                    <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover p-5">
                        <div class="w-65 pr-2">
                            <h2><?php echo e($ui->item2_title); ?></h2>
                            <p><?php echo e($ui->item2_body); ?></p>
                        </div>
                        <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                            <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image5); ?>" alt="Image Description">
                        </div>
                    </div>
                <!-- End Card -->
                </div>
            </div>
        </div>
    <!-- End Services Section -->
    <?php if($set->stat==1): ?>
      <div class="container space-top-1 space-top-md-2 space-bottom-2 space-bottom-lg-3">
        <div class="row justify-content-lg-center">
          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 71.7 64" width="71" height="64">
                    <path fill="#FFC107" d="M36.8,14.6L42,25.3c0,0.2,0.2,0.2,0.3,0.3L54,27.2c0.3,0,0.5,0.5,0.3,0.8l-8.5,8.2c-0.2,0.2-0.2,0.3-0.2,0.5
                      l2,11.7c0,0.3-0.3,0.7-0.7,0.5l-10.5-5.6c-0.2,0-0.3,0-0.5,0l-10.5,5.6c-0.3,0.2-0.8-0.2-0.7-0.5l2-11.7c0-0.2,0-0.3-0.2-0.5
                      L18,28.1c-0.3-0.3-0.2-0.8,0.3-0.8L30,25.6c0.2,0,0.3-0.2,0.3-0.3l5.3-10.7C36.1,14.2,36.6,14.2,36.8,14.6z"></path>
                    <path opacity=".25" fill="#FFC107" d="M56,5.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                      c0,0.2-0.2,0.2-0.2,0.2L56,13.6h-0.2L53,15.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2l-2.3-2.3V9.2l3.1-0.5c0,0,0,0,0.2,0l1.5-2.8
                      C55.8,5.7,55.8,5.7,56,5.9z"></path>
                    <path opacity=".25" fill="#FFC107" d="M12.3,0.3l1.3,2.8c0,0,0,0,0.2,0l3,0.5c0.2,0,0.2,0.2,0,0.2l-2.1,2.1c0,0,0,0,0,0.2l0.5,3
                      c0,0.2-0.2,0.2-0.2,0.2l-2.6-1.5c0,0,0,0-0.2,0L9.5,9.2c-0.2,0-0.2,0-0.2-0.2l0.5-3c0,0,0,0,0-0.2L7.5,3.7V3.6l3-0.5c0,0,0,0,0.2,0
                      l1.3-2.8C12.1,0.3,12.3,0.3,12.3,0.3z"></path>
                    <path opacity=".25" fill="#FFC107" d="M13.9,49.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                      c0,0.2-0.2,0.2-0.2,0.2l-2.8-1.5h-0.2L11,59.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2L9,53.4v-0.2l3.1-0.5c0,0,0,0,0.2,0l1.3-2.8
                      C13.8,49.8,13.9,49.8,13.9,49.9z"></path>
                    <path opacity=".25" fill="#FFC107" d="M60.8,53.5l1.6,3.1c0,0,0,0,0.2,0l3.5,0.5c0.2,0,0.2,0.2,0,0.3l-2.5,2.5c0,0,0,0,0,0.2l0.7,3.5
                      c0,0.2-0.2,0.2-0.2,0.2l-3.1-1.6h-0.2l-3.1,1.6c-0.2,0-0.2,0-0.2-0.2l0.7-3.5v-0.2l-2.5-2.5c-0.2-0.2,0-0.2,0-0.3l3.5-0.5h0.2
                      l1.6-3.1C60.4,53.4,60.6,53.4,60.8,53.5z"></path>
                  </svg>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_profit)); ?></span> <p class="mb-0">Profit Shared</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 71.7 64" width="71" height="64">
                    <defs>
                      <circle id="SVGID_1_" cx="50.9" cy="43.1" r="18.9"></circle>
                    </defs>
                    <clipPath id="SVGID_2_">
                      <use xlink:href="#SVGID_1_"></use>
                    </clipPath>
                    <g transform="matrix(1 0 0 1 0 1.907349e-06)" style="clip-path:url(#SVGID_2_);">
                      <image width="100" height="100" xlink:href="<?php echo e(url('/')); ?>/asset/images/img9.jpg" transform="matrix(0.36 0 0 0.36 32.8571 25.1429)"></image>
                    </g>
                    <use xlink:href="#SVGID_1_" fill="none" stroke="#FFFFFF" stroke-width="4"></use>
                    <defs>
                      <circle id="SVGID_3_" cx="34.6" cy="20.9" r="18.9"></circle>
                    </defs>
                    <clipPath id="SVGID_4_">
                      <use xlink:href="#SVGID_3_"></use>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_4_);">
                      <image width="100" height="100" xlink:href="<?php echo e(url('/')); ?>/asset/images/img3.jpg" transform="matrix(0.36 0 0 0.36 16.5714 2.8571)"></image>
                    </g>
                    <use xlink:href="#SVGID_3_" fill="none" stroke="#FFFFFF" stroke-width="4"></use>
                    <defs>
                      <circle id="SVGID_5_" cx="20.9" cy="43.1" r="18.9"></circle>
                    </defs>
                    <clipPath id="SVGID_6_">
                      <use xlink:href="#SVGID_5_"></use>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_6_);">
                      <image width="100" height="100" xlink:href="<?php echo e(url('/')); ?>/asset/images/img8.jpg" transform="matrix(0.3771 0 0 0.3771 2 24.2857)"></image>
                    </g>
                    <use xlink:href="#SVGID_5_" fill="none" stroke="#FFFFFF" stroke-width="4"></use>
                  </svg>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_amount)); ?></span> <p class=" mb-0">Money invested</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="71" height="64" viewBox="0 0 71.7 64">
                    <path fill="none" stroke="#0b30d8" stroke-width="2" d="M47.9,1.3H20.1c-2,0-3.5,1.5-3.5,3.5v51.4c0,2,1.5,3.5,3.5,3.5h36.5c2,0,3.5-1.5,3.5-3.5v-8.6V21.2v-7.5
                      L47.9,1.3z"></path>
                    <path fill="#0b30d8" d="M49.1,14.7c-1.1,0-1.8-0.9-1.8-1.8V2L60,14.7H49.1z"></path>
                    <line fill="none" stroke="#0b30d8" stroke-width="2" stroke-linecap="round" x1="48.2" y1="21" x2="28" y2="21"></line>
                    <line fill="none" stroke="#0b30d8" stroke-width="2" stroke-linecap="round" x1="48.2" y1="27.9" x2="28" y2="27.9"></line>
                    <line fill="none" stroke="#0b30d8" stroke-width="2" stroke-linecap="round" x1="48.2" y1="34.8" x2="28" y2="34.8"></line>
                    <line fill="none" stroke="#0b30d8" stroke-width="2" stroke-linecap="round" x1="48.2" y1="42" x2="28" y2="42"></line>
                    <path opacity=".2" fill="#0b30d8" d="M17.1,56V10.2c0-1.4-1.1-2.5-2.5-2.5h-0.5c-1.4,0-2.5,1.1-2.5,2.5v51.1c0,1.4,1.1,2.5,2.5,2.5h2.9h34.7
                      c1.4,0,2.5-1.1,2.5-2.5v-0.5c0-1.4-1.1-2.5-2.5-2.5H19.5C18.1,58.4,17.1,57.4,17.1,56z"></path>
                  </svg>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_payout)); ?></span> <p class=" mb-0">Payouts processed</p>
              </div>
              <!-- End Stats -->
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if($set->review==1): ?>
      <?php if(count($review)>0): ?>
          <!-- Testimonials Section -->
              <div class="clearfix space-bottom-3 px-3 px-md-5">
                  <div class="bg-img-hero rounded" style="background-image: url(<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image3); ?>);">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-6 col-lg-5 col-xl-4 space-2">
                                  <div class="card">
                               
                                      <div class="card-body p-5">
                                          <div class="js-slick-carousel slick" data-hs-slick-carousel-options='{"fade": true,"dots": true,"dotsClass": "slick-pagination mt-5"}'>

                                              <!-- Testimonials -->
                                              <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <div class="js-slide">
                                                      <!-- SVG Quote -->
                                                      <figure class="mb-4">
                                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                                                          viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
                                                          <path fill="#377dff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                                                              C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                                                              c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                                                              C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
                                                          </svg>
                                                      </figure>
                                                      <!-- End SVG Quote -->

                                                      <!-- Text -->
                                                      <blockquote class="text-dark text-lh-lg mb-4"><?php echo e($val->review); ?></blockquote>
                                                      <!-- End Text -->

                                                      <!-- Author -->
                                                      <div class="media">
                                                          <div class="avatar avatar-circle mr-3">
                                                          <img class="avatar-img" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" alt="Image Description">
                                                          </div>
                                                          <div class="media-body">
                                                          <h4 class="mb-0"><?php echo e($val->name); ?></h4>
                                                          <p class="small"><?php echo e($val->occupation); ?></p>
                                                          </div>
                                                      </div>
                                                      <!-- End Author -->
                                                  </div>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <!-- End Testimonials -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <!-- End Testimonials Section -->
      <?php endif; ?>
    <?php endif; ?>
    <?php if($set->team==1): ?>
        <?php if(count($team)>0): ?>
            <div class="container space-2 space-lg-3">
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
                    <img class="img-fluid w-100 rounded" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image); ?>" alt="Image Description">
                    <div class="card mt-n7 mx-3">
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
    <?php if($set->email!=null): ?>
    <div class="container space-bottom-2">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card bg-cyan text-white overflow-hidden p-4">
            <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                <h3 class="text-white mb-1">Got a question?</h3>
                <p class="text-white-70 mb-0">We'd love to talk about how we can help you.</p>
                </div>
                <div class="col-md-3 text-md-right">
                <a class="btn btn-light transition-3d-hover" href="mailto:<?php echo e($set->email); ?>">Contact Us</a>
                </div>
            </div>

            <!-- SVG Component -->
            <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/communication.svg" alt="Image Description">
            </figure>
            <!-- End SVG Component -->
            </div>
        </div>
    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/front/index.blade.php ENDPATH**/ ?>