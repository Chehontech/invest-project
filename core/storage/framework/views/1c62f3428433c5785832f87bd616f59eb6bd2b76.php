<?php $__env->startSection('content'); ?>
<div class="main-content">
    <!-- Header -->
    <div class="header py-9 pt-7">
      <div class="container">
        <div class="header-body text-center mb-7">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card card-profile border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-dark">
                    <h2 class="text-dark font-weight-bolder"><?php echo e(__('Unlock Script')); ?></h2>
                    <p><?php echo e(__('How to unlock flutter, add a valid purchase code to core/.env by updating ENVATO_PURCHASECODE')); ?></p>
                    <p>
                    <?php 
                    session_start();
                    echo $_SESSION["error"]; 
                    session_destroy()
                    ?></p>
                </div>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <a href="<?php echo e(url('/')); ?>"><i class="fad fa-sync"></i> Refresh</a>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<script>
window.history.replaceState({}, document.title, "/" + "zebra");
</script>
<?php echo $__env->make('loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/auth/lock.blade.php ENDPATH**/ ?>