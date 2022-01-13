<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder"><?php echo e(__('Investment Plans')); ?></h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 <?php if(route('user.sandplans')==url()->current()): ?> active <?php endif; ?>" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fad fa-smile-wink"></i> <?php echo e(__('Running')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 <?php if(route('user.sandplanssoon')==url()->current()): ?> active <?php endif; ?>" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fad fa-lock-alt"></i> <?php echo e(__('Coming Soon')); ?></a>
                </li>                 
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 <?php if(route('user.sandplansclosed')==url()->current()): ?> active <?php endif; ?>" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fad fa-frown-open"></i> <?php echo e(__('Closed')); ?></a>
                </li>   
            </ul>
        </div>
      </div>          
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade <?php if(route('user.sandplans')==url()->current()): ?>show active <?php endif; ?>" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
            <div class="row">
                <?php if(count($open)>0): ?>
                    <?php $__currentLoopData = $open; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                        <div class="card">
                            <!-- Card image -->
                            <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image placeholder">
                            </a>
                            <!-- Card body -->
                            <div class="card-body">
                                <span class="text-sm text-muted mb-0"><?php echo e($val->original-$val->units); ?> / <?php echo e($val->original); ?> Units Sold</span>
                                <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($val->original-$val->units)*100)/$val->original); ?>%;"></div>
                                </div>
                                <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                    <h5 class="h2 card-title mb-0 font-weight-bolder"><?php echo e($val->name); ?></h5>
                                </a>
                                <small class="text-muted"><span class="text-primary h3 font-weight-bolder"><?php echo e($val->interest); ?>%</span> Returns in <?php echo e($val->duration.' '.$val->period); ?></small>
                                <span class="form-text text-xs text-muted"><span class="text-success h4 font-weight-bolder"><?php echo e($currency->symbol.$val->price); ?></span> per Unit</span>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6">
                                        <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                        <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->start_date))); ?></span>
                                    </div>
                                    <div class="col-6"> 
                                        <span class="form-text text-sm text-dark"><?php echo e(__('Maturity Date')); ?></span>
                                        <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></span> 
                                    </div>
                                </div>    
                                <?php
                                    $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                    $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                ?>         
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6 text-left"> 
                                        <?php if($check>0): ?>
                                        <a href="<?php echo e(route('unfollow', ['id' => $val->id])); ?>" class="text-uppercase text-xs">unfollow</a>
                                        <?php else: ?>
                                        <a href="<?php echo e(route('follow', ['id' => $val->id])); ?>" class="text-uppercase text-xs" title="follow plan">Follow</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-md-12 mb-5">
                        <div class="text-center mt-8">
                            <div class="btn-wrapper text-center">
                                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                                </a>
                            </div>
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>      
        <div class="tab-pane fade <?php if(route('user.sandplanssoon')==url()->current()): ?>show active <?php endif; ?>" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
            <div class="row">
                <?php if(count($coming)>0): ?>
                    <?php $__currentLoopData = $coming; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Card image -->
                                <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image placeholder">
                                </a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <span class="text-sm text-muted mb-0"><?php echo e($val->original-$val->units); ?> / <?php echo e($val->original); ?></span>
                                    <div class="progress progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($val->original-$val->units)*100)/$val->original); ?>%;"></div>
                                    </div>
                                    <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                        <h5 class="h2 card-title mb-0 font-weight-bolder"><?php echo e($val->name); ?></h5>
                                    </a>
                                    <small class="text-muted"><span class="text-primary h3 font-weight-bolder"><?php echo e($val->interest); ?>%</span> Returns in <?php echo e($val->duration.' '.$val->period); ?></small>
                                    <span class="form-text text-xs text-muted"><span class="text-success h4 font-weight-bolder"><?php echo e($currency->symbol.$val->price); ?></span> per Unit</span>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6">
                                            <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                            <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->start_date))); ?></span>
                                        </div>
                                        <div class="col-6"> 
                                            <span class="form-text text-sm text-dark"><?php echo e(__('Maturity Date')); ?></span>
                                            <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></span> 
                                        </div>
                                    </div>  
                                    <?php
                                        $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                        $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                    ?>         
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6 text-left"> 
                                            <?php if($check>0): ?>
                                            <a href="<?php echo e(route('unfollow', ['id' => $val->id])); ?>" class="text-uppercase text-xs">unfollow</a>
                                            <?php else: ?>
                                            <a href="<?php echo e(route('follow', ['id' => $val->id])); ?>" class="text-uppercase text-xs" title="follow plan">follow</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-md-12 mb-5">
                        <div class="text-center mt-8">
                            <div class="btn-wrapper text-center">
                                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                                </a>
                            </div>
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="tab-pane fade <?php if(route('user.sandplansclosed')==url()->current()): ?>show active <?php endif; ?>" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row">
                <?php if(count($closed)>0): ?>
                    <?php $__currentLoopData = $closed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Card image -->
                                <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($val->image); ?>" alt="Image placeholder">
                                </a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <span class="text-sm text-muted mb-0"><?php echo e($val->original-$val->units); ?> / <?php echo e($val->original); ?></span>
                                    <div class="progress progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($val->original-$val->units)*100)/$val->original); ?>%;"></div>
                                    </div>
                                    <a href="<?php echo e(route('view.sandplan', ['id' => $val->id])); ?>">
                                        <h5 class="h2 card-title mb-0 font-weight-bolder"><?php echo e($val->name); ?></h5>
                                    </a>
                                    <small class="text-muted"><span class="text-primary h3 font-weight-bolder"><?php echo e($val->interest); ?>%</span> Returns in <?php echo e($val->duration.' '.$val->period); ?></small>
                                    <span class="form-text text-xs text-muted"><span class="text-success h4 font-weight-bolder"><?php echo e($currency->symbol.$val->price); ?></span> per Unit</span>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6">
                                            <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                            <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->start_date))); ?></span>
                                        </div>
                                        <div class="col-6"> 
                                            <span class="form-text text-sm text-dark"><?php echo e(__('Maturity Date')); ?></span>
                                            <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($val->expiring_date))); ?></span> 
                                        </div>
                                    </div>     
                                    <?php
                                        $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                        $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                    ?>         
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6 text-left"> 
                                            <?php if($check>0): ?>
                                            <a href="<?php echo e(route('unfollow', ['id' => $val->id])); ?>" class="text-uppercase text-xs">unfollow</a>
                                            <?php else: ?>
                                            <a href="<?php echo e(route('follow', ['id' => $val->id])); ?>" class="text-uppercase text-xs" title="follow plan">Follow</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-md-12 mb-5">
                        <div class="text-center mt-8">
                            <div class="btn-wrapper text-center">
                                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                                </a>
                            </div>
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/trading/project-plans.blade.php ENDPATH**/ ?>