
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="position-relative bg-img-hero">
        <div class="container space-top-3 space-top-lg-4 position-relative z-index-2">

                <!-- Testimonials Section -->
          <div class="hero-slider">
            <!-- Testimonials -->
            <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3"
              data-hs-slick-carousel-options='{
                  "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                  "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                  "slidesToShow": 1,
                  "infinite": true,
                  "dots": true,
                  "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                  "responsive": [{
                  "breakpoint": 992,
                  "settings": {
                      "slidesToShow": 1
                      }
                  }, {
                  "breakpoint": 768,
                  "settings": {
                      "slidesToShow": 1
                      }
                  }, {
                  "breakpoint": 554,
                  "settings": {
                      "slidesToShow": 1
                  }
                  }]
              }'>
              <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="js-slide mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-auto">
                          <div class="row justify-content-lg-between mb-5">
                            <div class="col-md-6 col-lg-6">
                            <!-- Info -->
                            <div class="mb-5">
                                <h1 class="strong"><?php echo e($ui->header_title); ?></h1>
                                <p><?php echo e($ui->header_body); ?></p>
                            </div>

                            <div class="mb-3">
                                <a class="btn btn-primary btn-wide transition-3d-hover mb-2 mb-sm-0 mr-3" href="<?php echo e(route('register')); ?>">Get Started</a>
                                <a class="btn btn-link mb-2 mb-sm-0 light-btn" href="<?php echo e(route('contact')); ?>">Let's Talk <i class="fad fa-angle-right fa-sm ml-1"></i></a>
                            </div>
                            <?php if($set->ns==1): ?>
                            <p class="small"><?php echo e(__('Next Settlement')); ?> <?php echo e(date("M j, Y", strtotime($set->next_settlement))); ?></p>
                            <?php endif; ?>
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
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- End Testimonials -->
            </div>
          </div>
        </div>
    </div>



    <!-- search -->
    <?php if($set->p_inv==1): ?>
      <div class="  mx-3 mx-xl-10">
            <div class="container-xl container-fluid card rounded card-product space-1 space-md-2 px-4 px-md-8 px-lg-10">
              <div class="px-3">
                <div class="text-center">

                        
                                      <!-- Title -->
                                      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                                          <span class="d-block small text-dark-70 font-weight-bold text-cap mb-2"><?php echo e(__('INVEST IN COMPANIES')); ?></span>
                                          <h2 class="text-dark"><?php echo e(__('See how')); ?> <?php echo e($set->site_name); ?> <?php echo e(__('is helping people get organized and work smarter')); ?></h2>
                                      </div>
                                      <!-- End Title -->
                                      <!-- Nav -->
                            
                            
                            <!-- search -->
                          <div class="card-search">
                            <div class="form-group row">
                              <div class="search-block col-lg-6 row">
                                <input type="search" class="form-control form-control-sm col-form-label col-lg-8  " placeholder="search" aria-controls="datatable-buttons">
                                <div class="col-lg-4">
                                  <a class="nav-link" href="#" style="box-shadow: var(--bx-s-button);border-radius: var(--border);color: #000;"> 
                                  Search
                                  </a>
                                </div>
                              </div>
                              <div class="col-lg-5">
                                <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7 mob-visibility" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-one-code-features-tab" data-toggle="pill" href="#pills-one-code-features" role="tab" aria-controls="pills-one-code-features" aria-selected="true">Running</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-two-code-features-tab" data-toggle="pill" href="#pills-two-code-features" role="tab" aria-controls="pills-two-code-features" aria-selected="false">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-three-code-features-tab" data-toggle="pill" href="#pills-three-code-features" role="tab" aria-controls="pills-three-code-features" aria-selected="false">Matured</a>
                                    </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        <!-- search -->
                </div>
              </div>
              <!-- End Nav -->
              <!-- Slick Carousel -->
              <div class="tab-content pr-lg-4">
                <div class="tab-pane fade show active" id="pills-one-code-features" role="tabpanel" aria-labelledby="pills-one-code-features-tab">
                  <div class="row">
                      <?php if(count($open)>0): ?>
                        <?php $__currentLoopData = $open; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                            <a href="<?php echo e(route('check.plan', ['id' => $val->slug])); ?>">
                            <div class="card h-100">
                            <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image Description">
                              <div class="card-header">
                                
                                <h5 class="card-title"><?php echo e($val->name); ?></h5>
                                <small class="card-text"><span class="text-success"><?php echo e($val->interest); ?>%</span></small>
                              </div>
                              <div class="card-body fadeInUp">
                                
                                <!--
                                      <div class='cardbody-company'>
                                        <div class="row justify-content-between align-items-center mb-3">
                                          <div class="col-3">
                                            <div class="picture">
                                              <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image_campaign); ?>" alt="Image campaign">
                                            </div>
                                          </div>

                                          <div class="col-9 name_campaign"> 
                                              <span class="form-text text-sm text-dark">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;"><?php echo str_limit($val->name_campaign, 13);; ?></font>
                                                </font>
                                              </span>
                                        </div>
                                        </div>
                                      </div>
                                -->
                                        <small class="card-text">
                                                 
                                                  <?php echo str_limit($val->description, 100);; ?>

                                                  
                                                </small>
                                        <div class="text-margin">
                                          <div class="row justify-content-between align-items-center mb-3">
                                                <div class="col-6">
                                                    <small class="card-text"><span class="text-success"><?php echo e($val->units); ?></span> <?php echo e(__('Unit sell')); ?></small>
                                                </div>
                                                <div class="col-6">
                                                    <small class="card-text tx-r"><?php echo e(__('Unit')); ?> <span class="text-success"><?php echo e($val->original); ?></span></small>
                                                </div>
                                          </div>
                                        </div>
                                    <div class="progress-margin">  
                                      <div class="progress progress mb-3">
                                        <div class="progress-bar" 
                                          role="progressbar" 
                                          aria-valuenow="60" 
                                          aria-valuemin="0" 
                                          aria-valuemax="100" 
                                          style="width: <?php echo e((($val->original-$val->units)*100)/$val->original); ?>%;">
                                        </div>
                                      </div>

                                    </div>   
                                    <div class="text-margin">
                                      <div class="row justify-content-between align-items-center mb-3">
                                              <div class="col-6">
                                                  <small class="card-text"><span class="text-success"><?php echo e($currency->symbol.$val->price); ?></span> <?php echo e(__('per Unit')); ?></small>
                                              </div>
                                              <div class="col-6">
                                                  <small class="card-text tx-r"><?php echo e(__('Profit')); ?> <span class="text-success"><?php echo e($val->interest); ?>%</span></small>
                                              </div>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                      <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                          <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                      </div>
                      <?php endif; ?>
                  </div> 
                </div>                  
                <div class="tab-pane fade" id="pills-two-code-features" role="tabpanel" aria-labelledby="pills-two-code-features-tab">
                  <div class="row">
                    <?php if(count($coming)>0): ?>
                      <?php $__currentLoopData = $coming; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                          <a href="<?php echo e(route('check.plan', ['id' => $val->slug])); ?>">
                            <div class="card h-100">
                              <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image Description">
                              <div class="card-body">
                                <h5 class="card-title mb-2"><?php echo e($val->name); ?></h5>
                                <small class="card-text"><?php echo str_limit($val->description, 100);; ?></small>
                                <small class="card-text"><span class="text-success"><?php echo e($val->interest); ?>%</span> <?php echo e(__('Returns in')); ?> <?php echo e($val->duration.' '.$val->period); ?></small>
                                <small class="card-text"><span class="text-success"><?php echo e($currency->symbol.$val->price); ?></span> <?php echo e(__('per Unit')); ?></small>
                              </div>
                            </div>
                          </a>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                      <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                          <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                      </div>
                      <?php endif; ?>
                  </div> 
                </div>                  
                <div class="tab-pane fade" id="pills-three-code-features" role="tabpanel" aria-labelledby="pills-three-code-features-tab">
                  <div class="row">
                    <?php if(count($closed)>0): ?>
                    <?php $__currentLoopData = $closed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-6 col-lg-4 mb-3 mb-md-5 mb-lg-5">
                        <a href="<?php echo e(route('check.plan', ['id' => $val->slug])); ?>">
                          <div class="card h-100">
                            <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image Description">
                            <div class="card-body">
                              <h5 class="card-title mb-2"><?php echo e($val->name); ?></h5>
                              <small class="card-text"><?php echo str_limit($val->description, 100);; ?></small>
                              <small class="card-text"><span class="text-success"><?php echo e($val->interest); ?>%</span> <?php echo e(__('Returns in')); ?> <?php echo e($val->duration.' '.$val->period); ?></small>
                              <small class="card-text"><span class="text-success"><?php echo e($currency->symbol.$val->price); ?></span> <?php echo e(__('per Unit')); ?></small>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="col-md-12 col-lg-12 mb-3 mb-md-5 mb-lg-0">
                        <span class="d-block small text-dark-70 font-weight-bold text-center text-cap mb-2">Nothing Found</span>
                    </div>
                    <?php endif; ?>
                  </div> 
                </div>
              </div>
              <!-- End Slick Carousel -->
          </div>
      </div>
      <?php endif; ?>
    
    <div class="info-blog container">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
          <div class="mb-5">
            <h2 class="mb-3"><?php echo e($ui->s2_title); ?></h2>
            <p><?php echo e($ui->s2_body); ?></p>
          </div>
          <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="media mb-4">
                <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                    <i class="fad fa-check"></i>
                </span>
                <div class="media-body text-dark">
                    <?php echo e($val->title); ?>

                </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-lg-7 order-lg-1">
            <div class="position-relative">
              <figure class="w-100">
                <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ui->image4); ?>" alt="Image Description">
              </figure>
            </div>
          </div>
      </div>
    </div>
  <!--
    <?php if($set->savings==1): ?>
    <div class="container">
      <div class="w-lg-85 mx-lg-auto">
        
        <div class="card p-5 bg-light">
          <div class="row align-items-md-center">
            <div class="col-md-9 mb-5 mb-md-0">
              <h3><?php echo e(__('Save for your future')); ?></h3>
              <p><?php echo e(__('Plan ahead for miscelleanous expenses.')); ?></p>

              
              <div class="row">
                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Birthday')); ?>

                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Birth of Child')); ?>

                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Rent')); ?>

                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('School fees')); ?>

                    </div>
                  </div>                  
                </div>

                <div class="col-sm-6">
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Christmas')); ?>

                    </div>
                  </div>
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Holiday')); ?>

                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Salah')); ?>

                    </div>
                  </div>                  
                  <div class="media font-size-1 text-body mb-2">
                    <i class="fad fa-check-circle text-success mt-1 mr-2"></i>
                    <div class="media-body">
                    <?php echo e(__('Wedding')); ?>

                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-md-3 column-divider-md">
              <div class="pl-md-2">
                <h4><?php echo e(__('Interest Rates')); ?></h4>
                <small class="mb-0"><?php echo e(__('3 Months')); ?> - <?php echo e($set->s_3m); ?>%</small><br>
                <small class="mb-0"><?php echo e(__('6 Months')); ?> - <?php echo e($set->s_6m); ?>%</small><br>
                <small class="mb-0"><?php echo e(__('9 Months')); ?> - <?php echo e($set->s_9m); ?>%</small><br>
                <small class="mb-2"><?php echo e(__('12 Months')); ?> - <?php echo e($set->s_12m); ?>%</small><br>
                <a class="font-size-1 font-weight-bold" href="<?php echo e(route('user.savings')); ?>"><?php echo e(__('Apply Now')); ?> <i class="fad fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <?php endif; ?>
-->
    <div class="container how-work">
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
    <!--
    <?php if($set->plan==1): ?>
      <?php if($set->s_inv==1): ?>
      <div class="overflow-hidden" id="plans">
        <div class="container space-top-2 space-bottom-2 space-bottom-lg-2">
          <div class="w-md-80 w-lg-60 text-center mx-auto mb-9">
            <h2><?php echo e($ui->plan_title); ?></h2>
            <p><?php echo e($ui->plan_body); ?></p>
          </div>
        </div>
        <div class="container mt-n10">
          <div class="w-lg-100 mx-lg-auto position-relative">
            <div class="row position-relative z-index-2 mx-n2 mb-5 space-bottom-1">
              <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-4 px-6 mb-3">
                    <div class="card h-100 <?php if($val->popular==1): ?> text-white bg-dark <?php endif; ?>">
                        <div class="card-header border-0 mb-0 <?php if($val->popular==1): ?> text-white bg-dark <?php endif; ?> text-center">
                            <span class="d-block h3 <?php if($val->popular==1): ?> text-white <?php endif; ?>"><?php echo e($val->name); ?></span>
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
                                <?php echo e($currency->symbol.number_format($val->min_deposit)); ?> <?php echo e(__('Minimum Deposit')); ?>

                                </div>
                            </div>                              
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
                                <?php echo e($val->interest); ?>% <?php echo e(__('Return on Investment')); ?>

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
      <?php endif; ?>
      
    <?php endif; ?>
    -->
    <?php if($set->review==1): ?>
      <?php if(count($review)>0): ?>
        <div class="container space-top-2 space-top-lg-3 testimonials-block">
          <!-- Title -->
          <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
              <span class="d-block small text-dark-70 font-weight-bold text-cap mb-2"><?php echo e(__('Reviews')); ?></span>
              <h2 class="text-dark"><?php echo e(__('Backed by strong global partners')); ?></h2>
          </div>
          <!-- End Title -->

          <!-- Testimonials Section -->
          <div class="testimonials">
            <!-- Testimonials -->
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
                      "slidesToShow": 3
                      }
                  }, {
                  "breakpoint": 768,
                  "settings": {
                      "slidesToShow": 1
                      }
                  }, {
                  "breakpoint": 554,
                  "settings": {
                      "slidesToShow": 1
                  }
                  }]
              }'>
              <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="js-slide">
                  <div class="card h-100">
                    <div class="card-body">
                      <ul class="list-inline text-warning">
                        <li class="list-inline-item mx-0">
                          <i class="fas fa-star"></i>
                        </li>
                        <li class="list-inline-item mx-0">
                          <i class="fas fa-star"></i>
                        </li>
                        <li class="list-inline-item mx-0">
                          <i class="fas fa-star"></i>
                        </li>
                        <li class="list-inline-item mx-0">
                          <i class="fas fa-star"></i>
                        </li>
                        <li class="list-inline-item mx-0">
                          <i class="fas fa-star"></i>
                        </li>
                      </ul>
                      <div class="mb-auto">
                        <p class="text-dark mb-0"><?php echo e($val->review); ?></p>
                      </div>
                    </div>

                    <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-5">
                      <div class="media align-items-center">
                        <div class="avatar avatar-circle mr-3">
                          <img class="avatar-img" src="<?php echo e(url('/')); ?>/asset/review/<?php echo e($val->image_link); ?>" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="mb-0"><?php echo e($val->name); ?></h4>
                          <small class="d-block text-body"><?php echo e($val->occupation); ?></small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- End Testimonials -->
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php if($set->stat==1): ?>
      <div class="container space-top-1 space-top-md-2 info-star-box">
        <div class="row justify-content-lg-center">
          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center px-md-3 px-lg-7">
                <figure class="mb-3">
                <i class="fas fa-star">

                </i>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_profit)); ?></span> <p class="mb-0"><?php echo e(__('Profit Shared')); ?></p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4 mb-7 mb-lg-0">
            <div data-aos="fade-up" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                <i class="fas fa-users">

                </i>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_amount)); ?></span> <p class=" mb-0"><?php echo e(__('Money invested')); ?></p>
              </div>
              <!-- End Stats -->
            </div>
          </div>

          <div class="col-md-4">
            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
              <!-- Stats -->
              <div class="text-center column-divider-md column-divider-20deg px-md-3 px-lg-7">
                <figure class="mb-3">
                <i class="fas fa-file-alt">

                </i>
                </figure>
                <span class="text-dark font-weight-bold"><?php echo e($currency->symbol.number_format($t_payout)); ?></span> <p class=" mb-0"><?php echo e(__('Payouts processed')); ?></p>
              </div>
              <!-- End Stats -->
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if($set->team==1): ?>
        <?php if(count($team)>0): ?>
            <div class="container space-2 our-team">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2"><?php echo e(__('Our Team')); ?></span>
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
                        <div class="card-body text-center UpinUp">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/front/index.blade.php ENDPATH**/ ?>