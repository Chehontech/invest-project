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
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/sweetalert.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/toast.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(url('/')); ?>/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
         <?php echo $__env->yieldContent('css'); ?>
    </head>
  <body>
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" style="background-color:<?php echo e($set->m_c); ?>;" id="sidenav-main">
      <div class="scrollbar-inner">
        <div class="sidenav-header d-flex align-items-center">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(url('/')); ?>/asset/<?php echo e($logo->image_link); ?>" class="navbar-brand-img" alt="...">
          </a>
          <div class="ml-auto">
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-inner">
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.dashboard')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.dashboard')); ?>">
                  <i class="fal fa-television"></i>
                  <span class="nav-link-text"><?php echo e(__('Overview')); ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.fund')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.fund')); ?>">
                  <i class="fal fa-money-bill-wave-alt"></i>
                  <span class="nav-link-text"><?php echo e(__('Fund account')); ?></span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.withdraw')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.withdraw')); ?>">
                  <i class="fal fa-calendar-check-o"></i>
                  <span class="nav-link-text"><?php echo e(__('Payouts')); ?></span>
                </a>
              </li>  
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.plans')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.plans')); ?>">
                  <i class="fal fa-bar-chart-o"></i>
                  <span class="nav-link-text"><?php echo e(__('Plans')); ?></span>
                </a>
              </li>              
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.trades')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.trades')); ?>">
                  <i class="fal fa-chart-network"></i>
                  <span class="nav-link-text"><?php echo e(__('Activity')); ?></span>
                </a>
              </li>   
              <?php if($set->transfer==1): ?>   
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.ownbank')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.ownbank')); ?>">
                  <i class="fal fa-share"></i>
                  <span class="nav-link-text"><?php echo e(__('Send Money')); ?></span>
                </a>
              </li> 
              <?php endif; ?>                              
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.ticket')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.ticket')); ?>">
                  <i class="fal fa-user-headset"></i>
                  <span class="nav-link-text"><?php echo e(__('Disputes')); ?></span>
                </a>
              </li>              
              <?php if($set->referral==1): ?>
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.referral')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.referral')); ?>">
                  <i class="fal fa-user"></i>
                  <span class="nav-link-text"><?php echo e(__('Referral')); ?></span>
                </a>
              </li> 
              <?php endif; ?>   
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted"><?php echo e(__('More')); ?></h6>
            <ul class="navbar-nav mb-md-3">  
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.profile')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.profile')); ?>">
                  <i class="fal fa-cogs"></i>
                  <span class="nav-link-text"><?php echo e(__('Settings')); ?></span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.audit')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.audit')); ?>">
                  <i class="fal fa-sync"></i>
                  <span class="nav-link-text"><?php echo e(__('Audit Logs')); ?></span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.password')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.password')); ?>">
                  <i class="fal fa-low-vision"></i>
                  <span class="nav-link-text"><?php echo e(__('Password & Devices')); ?></span>
                </a>
              </li>               
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.2fa')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.2fa')); ?>">
                  <i class="fal fa-unlock-alt"></i>
                  <span class="nav-link-text"><?php echo e(__('2FA Security')); ?></span>
                </a>
              </li>              
              <li class="nav-item">
                <a class="nav-link <?php if(route('user.kyc')==url()->current()): ?> active <?php endif; ?> text-dark" href="<?php echo e(route('user.kyc')); ?>">
                  <i class="fal fa-file-pdf-o"></i>
                  <span class="nav-link-text"><?php echo e(__('KYC')); ?></span>
                </a>
              </li>  
              <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo e(route('user.logout')); ?>">
                  <i class="fal fa-sign-out"></i>
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
            <div class="">
              <h6 class="h2 mb-0" style="color: <?php echo e($set->s_c); ?>;">
                  <?php echo e($currency->symbol.number_format($user->balance)); ?>

              </h6>
            </div>
            <?php if($set->language==1): ?>
            <ul class="navbar-nav align-items-center ">
              <li class="nav-item dropdown">
              <?php $locale = session()->get('locale'); ?>
                <a class="nav-link pr-0"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <div class="media-body ml-2 d-lg-block">
                      <?php switch($locale):
                        case ('fr'): ?>
                        <span class="mb-0 text-sm"><span class="france"></span>French</span>
                        <?php break; ?>
                        <?php case ('ge'): ?>
                        <span class="mb-0 text-sm"><span class="germany"></span>German</span>
                        <?php break; ?>
                        <?php case ('es'): ?>
                        <span class="mb-0 text-sm"><span class="spain"></span>Spanish</span>
                        <?php break; ?>
                        <?php case ('in'): ?>
                        <span class="mb-0 text-sm"><span class="hindi"></span>Hindi</span>
                        <?php break; ?>                        
                        <?php case ('ch'): ?>
                        <span class="mb-0 text-sm"><span class="china"></span>China</span>
                        <?php break; ?>
                        <?php default: ?>
                        <span class="mb-0 text-sm"><span class="usa"></span>English</span>
                      <?php endswitch; ?>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right text-left">
                  <a href="<?php echo e(url('/')); ?>/lang/en" class="dropdown-item">
                    <span  class="mb-0 text-sm"><span class="usa"></span>English</span>
                  </a>
                  <a href="<?php echo e(url('/')); ?>/lang/fr" class="dropdown-item">
                    <span class="mb-0 text-sm"><span class="france"></span>France</span>
                  </a>                  
                  <a href="<?php echo e(url('/')); ?>/lang/ge" class="dropdown-item">
                    <span class="mb-0 text-sm"><span class="germany"></span>Germany</span>
                  </a>        
                  <a href="<?php echo e(url('/')); ?>/lang/ch" class="dropdown-item">
                    <span class="mb-0 text-sm"><span class="china"></span>China</span>
                  </a>            
                  <a href="<?php echo e(url('/')); ?>/lang/in" class="dropdown-item">
                    <span class="mb-0 text-sm"><span class="hindi"></span>Hindi</span>
                  </a>                  
                  <a href="<?php echo e(url('/')); ?>/lang/es" class="dropdown-item">
                    <span class="mb-0 text-sm"><span class="spain"></span>Spanish</span>
                  </a>
                </div>
              </li>
            </ul>
            <?php endif; ?>
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($cast); ?>">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm text-default"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('user.logout')); ?>" class="nav-link pr-0">
                  <i class="fal fa-sign-out text-danger"></i>
                </a>
              </li>   
            </ul>
          </div>
        </div>
      </nav>
      <div class="header pb-6">
        <div class="container-fluid">
          <div class="header-body">
          </div>
        </div>
      </div>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
    <?php echo $set->livechat; ?>

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
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [<?php foreach($history as $val){ echo "'".date("M j",strtotime($val->updated_at))."'".','; }?>],
          datasets: [{
              label: 'Received',
              data: [<?php foreach($history as $val){ echo $val->amount.','; }?>],
              backgroundColor: [
                  'transparent'
              ],
              borderColor: [
                  '<?php echo e($set->s_c); ?>'
              ],
              borderWidth: 1,
              pointBorderColor: 'rgba(0, 0, 0, 0.1)',
              pointBorderWidth:1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  display: true,
                  ticks: {
                      beginAtZero: true,
                      fontColor: '#32325d'
                  }
              }],       
              xAxes: [{
                  ticks: {
                      fontColor: '#32325d'
                  }
              }]
          },
        tooltips: {
          enabled:true,
          backgroundColor:'rgba(0, 0, 0, 0.8)'
        }
      }
    });
</script>
<?php $__currentLoopData = $xplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
'use strict';
var noUiSlider<?php echo $vplan->id; ?> = (function() {
	$('.input-slider-container<?php echo e($vplan->id); ?>').each(function() {
    var cur = '<?php echo e($currency->symbol); ?>';
    var bonus<?php echo $vplan->id; ?> = '<?php echo e($vplan->bonus); ?>/100';
		var c<?php echo $vplan->id; ?> = document.getElementById($(this).find('.source<?php echo e($vplan->id); ?>').attr('id'));
		var d<?php echo $vplan->id; ?> = document.getElementById($(this).find('.view<?php echo e($vplan->id); ?>').attr('id'));

		var xslider<?php echo $vplan->id; ?> = noUiSlider.create(c<?php echo $vplan->id; ?>, {
			start: [parseInt($(this).find('.view<?php echo e($vplan->id); ?>').data('range-value-low'))],
			connect: [true, false],
			range: {'min': [parseInt($(this).find('.source<?php echo e($vplan->id); ?>').data('range-value-min'))],'max': [parseInt($(this).find('.source<?php echo e($vplan->id); ?>').data('range-value-max'))]}
    });
    
    $("#sliderValueInput<?php echo e($vplan->id); ?>").val(xslider<?php echo $vplan->id; ?>.get());
			var xanswer<?php echo $vplan->id; ?> =parseFloat(xslider<?php echo $vplan->id; ?>.get())*parseInt($("#duration<?php echo e($vplan->id); ?>").val())/100; 
      var xcompound<?php echo $vplan->id; ?> =parseFloat(xanswer<?php echo $vplan->id; ?>.toFixed(2))*parseFloat(bonus<?php echo $vplan->id; ?>)/100; 
    $("#profit<?php echo e($vplan->id); ?>").text(cur+' '+xanswer<?php echo $vplan->id; ?>.toFixed(2));
    $("#bonus<?php echo e($vplan->id); ?>").text('+'+cur+' '+xcompound<?php echo $vplan->id; ?>.toFixed(2)+' bonus');
    $("#input-slider-value<?php echo e($vplan->id); ?>").text(cur+' '+parseFloat(xslider<?php echo $vplan->id; ?>.get(1)).toFixed());
    
		xslider<?php echo $vplan->id; ?>.on("change", function() {
      var answer<?php echo $vplan->id; ?> =parseFloat(xslider<?php echo $vplan->id; ?>.get())*parseInt($("#duration<?php echo e($vplan->id); ?>").val())/100;
      var compound<?php echo $vplan->id; ?> =parseFloat(answer<?php echo $vplan->id; ?>.toFixed(2))*parseFloat(bonus<?php echo $vplan->id; ?>)/100;  
      $("#profit<?php echo e($vplan->id); ?>").text(cur+' '+answer<?php echo $vplan->id; ?>.toFixed(2));
      $("#bonus<?php echo e($vplan->id); ?>").text('+'+cur+' '+compound<?php echo $vplan->id; ?>.toFixed(2)+' bonus');
			$("#sliderValueInput<?php echo e($vplan->id); ?>").val(xslider<?php echo $vplan->id; ?>.get());
      $("#input-slider-value<?php echo e($vplan->id); ?>").text(cur+' '+parseFloat(xslider<?php echo $vplan->id; ?>.get(1)).toFixed());
		});
	})
})();
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php if($set->recaptcha==1): ?>
  <?php echo NoCaptcha::renderJs(); ?>

<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nn/core/resources/views/userlayout.blade.php ENDPATH**/ ?>