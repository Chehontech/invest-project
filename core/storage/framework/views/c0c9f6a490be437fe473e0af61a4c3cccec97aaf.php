
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-img-hero castro-secret2">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
            <h1><?php echo e(__('Contact us')); ?></h1>
            <p><?php echo e(__('We love to talk about how we can help you.')); ?></p>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="<?php echo e(route('user.ticket')); ?>">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/icon-7.svg" alt="SVG">
                  </figure>
                  <h3 class="h4"><?php echo e(__('Knowledgebase')); ?></h3>
                  <p class="text-body mb-0"><?php echo e(__('We are here to help with any questions or code.')); ?></p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5">
                <?php echo e(__('Create ticket')); ?> <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>

            <div class="col-md-6 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="<?php echo e(route('faq')); ?>">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/icon-4.svg" alt="SVG">
                  </figure>
                  <h3 class="h4"><?php echo e(__('FAQ')); ?></h3>
                  <p class="text-body mb-0"><?php echo e(__('Search our FAQ for answers to anything you might ask.')); ?></p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5">
                <?php echo e(__('Visit FAQ')); ?> <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>
        </div>
    </div>
</div>
<!-- SVG Shape -->
    <figure class="position-absolute bottom-0 right-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
    </figure>
<!-- End SVG Shape -->
<?php if($set->contact==1): ?>
<!-- Contact Form Section -->
    <div class="container space-2 space-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2><?php echo e(__('Tell us about yourself')); ?></h2>
            <p><?php echo e(__('Whether you have questions or you would just like to say hello, contact us.')); ?></p>
        </div>
        <!-- End Title -->

        <div class="w-lg-80 mx-auto">
            <!-- Contacts Form -->
            <form class="js-validate" action="<?php echo e(route('contact-submit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label"><?php echo e(__('Your name')); ?></label>
                            <input type="text" class="form-control" name="full_name" placeholder="<?php echo e(__('Scott Marshal')); ?>" aria-label="<?php echo e(__('Scott Marshal')); ?>" required
                                data-msg="Please enter your name.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label"><?php echo e(__('Your email address')); ?></label>
                            <input type="email" class="form-control" name="email" placeholder="<?php echo e(__('a@b.com')); ?>" aria-label="<?php echo e(__('a@b.com')); ?>" required
                                data-msg="Please enter a valid email address.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="w-100"></div>

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label"><?php echo e(__('Subject')); ?></label>
                            <input type="text" class="form-control" name="subject" placeholder="<?php echo e(__('Investment plans')); ?>" aria-label="<?php echo e(__('Sponsored plans')); ?>" required
                                data-msg="Please enter a subject.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label"><?php echo e(__('Your phone number')); ?></label>
                            <input type="number" class="form-control" name="mobile" placeholder="<?php echo e(__('1-234-5678-4567')); ?>" aria-label="<?php echo e(__('1-234-5678-4567')); ?>" required
                                data-msg="Please enter a valid phone number.">
                        </div>
                    </div>
                    <!-- End Input -->
                </div>

                <!-- Input -->
                <div class="js-form-message mb-6">
                    <label class="input-label"><?php echo e(__('How can we help you?')); ?></label>
                    <div class="input-group">
                    <textarea class="form-control" rows="4" name="message" placeholder="<?php echo e(__('Hi there, I would like to ...')); ?>" aria-label="<?php echo e(__('Hi there, I would like to ...')); ?>" required
                                data-msg="Please enter a reason."></textarea>
                    </div>
                </div>
                <!-- End Input -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4"><?php echo e(__('Submit')); ?></button>
                    <p class="small"><?php echo e(__('We will get back to you in 1-2 business days.')); ?></p>
                </div>
            </form>
            <!-- End Contacts Form -->
        </div>
    </div>
<!-- End Contact Form Section -->
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/front/contact.blade.php ENDPATH**/ ?>