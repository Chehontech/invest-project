<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-lg-12 mb-3">
          <div class="card">
          <div class="card-body">
          <h4 class="mb-0"><?php echo e(__('Earning log')); ?></h5>
          <?php if(count($history)>0): ?>
          <canvas id="myChart" width="400" height="180"></canvas>
          <?php else: ?>
            <div class="text-center mb-5 mt-8">
              <div class="mb-3">
                <img src="<?php echo e(url('/')); ?>/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Earning History</h3>
              <p class="text-dark text-sm card-text">We couldn't find any earning log to this account</p>
            </div>
          <?php endif; ?>
        </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0"><?php echo e(__('Available Profit')); ?></h4>
                      <span class="mb-0 text-dark"><?php echo e($currency->symbol.number_format($user->profit)); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>             
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0"><?php echo e(__('Total Profit')); ?></h4>
                      <span class="mb-0 text-dark"><?php echo e($currency->symbol.number_format($user->total_profit)); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0"><?php echo e(__('Referral')); ?></h4>
                      <span class="mb-0 text-dark"><?php echo e($currency->symbol.number_format($user->ref_bonus)); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title mb-0"><?php echo e(__('Total Bonus')); ?></h4>
                      <span class="mb-0 text-dark"><?php echo e($currency->symbol.number_format($user->trade_bonus)); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <div class="icon icon-shape text-white rounded-circle" style="background-color:<?php echo e($set->s_c); ?>;">
                    <i class="fal fa-unlock"></i>
                  </div>
                </div>
                <div class="col">
                  <h3 class="mb-0 h4"><?php echo e(__('Two Factor Authentication')); ?></h3>
                  
                    <?php if($user->fa_status==0): ?>
                    <span class="badge badge-pill badge-danger">
                    <?php echo e(__('Disabled')); ?>

                    </span>
                    <?php else: ?>
                    <span class="badge badge-pill badge-success">
                    <?php echo e(__('Active')); ?>

                    </span>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-auto">
                  <div class="icon icon-shape text-white rounded-circle" style="background-color:<?php echo e($set->s_c); ?>;">
                    <i class="fal fa-calendar-o"></i>
                  </div>
                </div>
                <div class="col">
                  <h3 class="mb-0 h4"><?php echo e(__('Next Settlement')); ?></h3>
                  <ul class="list list-unstyled mb-0">
                    <li><span class="text-default text-sm"><?php echo e(date("Y/m/d", strtotime($set->next_settlement))); ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
    <?php if($set->upgrade_status==1): ?>
            <?php if($user->upgrade==0): ?>
            <div class="card" style="background-color:<?php echo e($set->s_c); ?>;">
              <!-- Card header -->
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <!-- Title -->
                    <h4 class="mb-0 text-white">Start Receiving Bonuses</h4>
                  </div>
                </div>
                <p class="card-text text-sm mb-4 text-white">You can now receive certain bonus of total profit after investment ends.</p>
                <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn btn-block btn-neutral text-white">Upgrade Account</a>
                <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                    <div class="modal-content form-block form-modal">
                      <div class="modal-body">
                        <div class="text-left mt-2 mb-3 text-dark text-sm">Don't let your money sit there, upgrade your account & start receiving bonuses</div> 
                        <div class="text-left mt-2 mb-3 text-dark text-sm">Upgrade fee costs <?php echo e($currency->symbol.$set->upgrade_fee); ?></div> 
                        <div class="text-left">
                          <a href="<?php echo e(route('user.upgrade')); ?>" class="btn btn-success btn-block">Upgrade</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
            <?php endif; ?> 
          <?php endif; ?> 
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <!-- Surtitle -->
              <h5 class="surtitle" style="color: <?php echo e($set->s_c); ?>;"><?php echo e(__('Recent Investment')); ?></h5>
              <!-- Title -->
              <h5 class="h3 mb-0 text-dark"><?php echo e(__('Progress track')); ?></h5>
            </div>
          </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- List group -->
          <ul class="list-group list-group-flush list my--3">
            <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col">
                <?php $pp=$val->compound*$val->amount/100; ?>
                  <span class="card-text text-sm text-dark">#<?php echo e($val->trx); ?> @ <?php echo e($val->plan->name); ?> [<?php echo e(number_format($val->profit)); ?>/<?php echo e(number_format($pp).$currency->name); ?>]</span>
                  <div class="progress progress-xs mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(($val->profit*100)/$pp); ?>%;background-color:<?php echo e($set->s_c); ?>;"></div>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>  
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nn/core/resources/views/user/index.blade.php ENDPATH**/ ?>