<!doctype html>
  <html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="<?php echo e(url('/')); ?>"/>
        <title><?php echo e($title); ?> | <?php echo e($set->site_name); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="<?php echo e($set->site_name); ?>"/>
        <meta name="application-name" content="<?php echo e($set->site_name); ?>"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="<?php echo e($set->site_desc); ?>" />
        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link2); ?>" />
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/toast.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/cus.css" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
  <body class="bg-white  admin-panel">
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
        <div class="sidenav-header d-flex align-items-center mt-3">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" class="navbar-brand-img" alt="...">
          </a>
          <div class="ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-primary"></i>
                <i class="sidenav-toggler-line bg-primary"></i>
                <i class="sidenav-toggler-line bg-primary"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-inner">
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.dashboard')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.dashboard')); ?>">
                  <i class="fad fa-house-user text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Overview')); ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.withdraw')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.withdraw')); ?>">
                  <i class="fad fa-calendar text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Payouts')); ?></span>
                </a>
              </li>
              <?php if($set->s_inv==1): ?>
              <!--
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.plans')==url()->current() || route('user.trades')==url()->current()): ?> active <?php endif; ?>" href="#standard" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="standard">
                  <i class="fad fa-spa text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Standard Investment')); ?></span>
                </a>
                <div class="collapse <?php if(route('user.plans')==url()->current() || route('user.trades')==url()->current()): ?> show <?php endif; ?>" id="standard">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item <?php if(route('user.plans')==url()->current()): ?> active <?php endif; ?> text-default">
                      <a class="nav-link" href="<?php echo e(route('user.plans')); ?>">
                        <?php echo e(__('All Plans')); ?>

                      </a>
                    </li>
                    <li class="nav-item <?php if(route('user.trades')==url()->current()): ?> active <?php endif; ?> text-default">
                      <a class="nav-link" href="<?php echo e(route('user.trades')); ?>">
                        <?php echo e(__('Activity')); ?>

                      </a>
                    </li>                             
                  </ul>
                </div>
              </li> 
              -->
              <?php endif; ?>
              <?php if($set->p_inv==1): ?>
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.sandplans')==url()->current() || route('user.sandfollowed')==url()->current() || route('user.sandtrades')==url()->current()): ?> active <?php endif; ?>" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples2">
                  <i class="fad fa-construction text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Project Investment')); ?></span>
                </a>
                <div class="collapse <?php if(route('user.sandplans')==url()->current() || route('user.sandfollowed')==url()->current() || route('user.sandtrades')==url()->current()): ?> show <?php endif; ?>" id="navbar-examples2">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item <?php if(route('user.sandplans')==url()->current()): ?> active <?php endif; ?>">
                      <a href="<?php echo e(route('user.sandplans')); ?>" class="nav-link"><?php echo e(__('All Plans')); ?></a>
                    </li>                    
                    <li class="nav-item <?php if(route('user.sandtrades')==url()->current()): ?> active <?php endif; ?>">
                      <a href="<?php echo e(route('user.sandtrades')); ?>" class="nav-link"><?php echo e(__('Transactions')); ?></a>
                    </li>                                 
                    <li class="nav-item  <?php if(route('user.sandfollowed')==url()->current()): ?> active <?php endif; ?>">
                      <a href="<?php echo e(route('user.sandfollowed')); ?>" class="nav-link"><?php echo e(__('Followed')); ?></a>
                    </li>                                  
                  </ul>
                </div>
              </li> 
              <?php endif; ?>
              <?php if($set->savings==1): ?>
              <!--
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.savings')==url()->current()): ?> active <?php endif; ?>" href="<?php echo e(route('user.savings')); ?>">
                  <i class="fad fa-piggy-bank text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Save & Earn')); ?></span>
                </a>
              </li>   
              --> 
              <?php endif; ?>  
              <?php if($set->transfer==1): ?>   
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.ownbank')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.ownbank')); ?>">
                  <i class="fad fa-random text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Send Money')); ?></span>
                </a>
              </li> 
              <?php endif; ?>                              
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.ticket')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.ticket')); ?>">
                  <i class="fad fa-user-headset text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Disputes')); ?></span>
                </a>
              </li>              
              <?php if($set->referral==1): ?>
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.referral')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.referral')); ?>">
                  <i class="fad fa-share text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Affiliate System')); ?></span>
                </a>
              </li> 
              <?php endif; ?>   
              <li class="nav-item">
                <a class="nav-link" href="#set" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="set">
                  <i class="fad fa-users-cog text-primary"></i>
                  <span class="nav-link-text"><?php echo e(__('Preference')); ?></span>
                </a>
                <div class="collapse" id="set">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item text-default">
                      <a class="nav-link" href="<?php echo e(route('user.profile')); ?>">
                        <?php echo e(__('Profile')); ?>

                      </a>
                    </li>             
                    <li class="nav-item text-default">
                      <a class="nav-link" href="<?php echo e(route('user.audit')); ?>">
                        <?php echo e(__('Audit Logs')); ?>

                      </a>
                    </li>                  
                    <li class="nav-item text-default">
                      <a class="nav-link" href="<?php echo e(route('user.password')); ?>">
                        <?php echo e(__('Password & Devices')); ?>

                      </a>
                    </li>                   
                    <li class="nav-item text-default">
                      <a class="nav-link" href="<?php echo e(route('user.2fa')); ?>">
                        <?php echo e(__('2FA Security')); ?>

                      </a>
                    </li>                  
                    <li class="nav-item text-default">
                      <a class="nav-link" href="<?php echo e(route('user.kyc')); ?>">
                        <?php echo e(__('Know Your Customer')); ?>

                      </a>
                    </li>                             
                  </ul>
                </div>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('user.logout')); ?>">
                  <i class="fad fa-sign-out text-danger"></i>
                  <span class="nav-link-text"><?php echo e(__('Sign out')); ?></span>
                </a>
              </li>     
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="main-content" id="panel">
      <nav class="navbar navbar-top navbar-expand navbar-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center ml-md-auto">
              <li class="nav-item d-xl-none">
                <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="header pb-6">
        <div class="container-fluid">
        </div>
      </div>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
    <?php echo $set->livechat; ?>

    <script>
      "use strict";
      var urx='<?php echo e($currency->name); ?>';
    </script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/clipboard/dist/clipboard.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/quill/dist/quill.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/argon.js?v=1.1.0"></script>
    <script src="<?php echo e(url('/')); ?>/asset/dashboard/js/demo.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/asset/js/toast.js"></script>
  </body>
</html>
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
<?php $__currentLoopData = $xplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
  "use strict";
  function planamount(){
    var amount<?php echo $vplan->id; ?> = $("#buyplan<?php echo e($vplan->id); ?>").val();
    var cur = '<?php echo e($currency->symbol); ?>';
    var bonus<?php echo $vplan->id; ?> = '<?php echo e($vplan->bonus); ?>/100';
    var answer<?php echo $vplan->id; ?> =parseFloat(amount<?php echo $vplan->id; ?>)*parseInt($("#duration<?php echo e($vplan->id); ?>").val())/100;
    var compound<?php echo $vplan->id; ?> =parseFloat(answer<?php echo $vplan->id; ?>.toFixed(2))*parseFloat(bonus<?php echo $vplan->id; ?>)/100;
    $("#profit<?php echo e($vplan->id); ?>").text(cur+' '+answer<?php echo $vplan->id; ?>.toFixed(2));
    $("#bonus<?php echo e($vplan->id); ?>").text('+'+cur+' '+compound<?php echo $vplan->id; ?>.toFixed(2)+' bonus');
  }  
  $("#buyplan<?php echo e($vplan->id); ?>").keyup(planamount);
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php if($set->recaptcha==1): ?>
  <?php echo NoCaptcha::renderJs(); ?>

<?php endif; ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/userlayout.blade.php ENDPATH**/ ?>