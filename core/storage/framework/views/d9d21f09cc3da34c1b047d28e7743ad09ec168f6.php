

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row" id="earnings">
      <div class="col-lg-12">
        <div class="row">
          <?php if(count($activity)>0): ?>
            <?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $date_diffx=date_diff(date_create($val->date), date_create($val->end_date));
                $claimed=App\Models\Claimed::whereprofit_id($val->id)->sum('amount');
                $bonus=$val->amount*$val->c_bonus/100;
                $c=$val->recurring;
                $goalx=$val->compound*$val->amount/100;
                $goal=$val->compound*$val->amount/100;
                $profitx=$goalx-$val->amount;
                $profit=$goalx-$val->amount;
                $pp=$val->compound*$val->amount/100;
              ?>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header checkx">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <h4 class="mb-1 h4 text-dark er"><?php echo e($val->trx); ?></h4>
                    </div>
                    <div class="col-6 text-right">
                      <?php if($val->claim==1): ?>
                        <?php if($val->status!=2): ?>
                          <a href="#" data-toggle="modal" data-target="#history<?php echo e($val->id); ?>" class="btn btn-sm btn-neutral"><?php echo e(__('History')); ?></a>
                          <a href="#" data-toggle="modal" data-target="#claim<?php echo e($val->id); ?>" class="btn btn-sm btn-neutral"><?php echo e(__('Claim Profit')); ?></a>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row align-items-center mb-3">
                    <div class="col-6">                 
                      <p class="text-sm text-gray mb-0 text-uppercase"><?php echo e($val->plan->name); ?> <?php echo e(__('Plan')); ?> <?php echo e($val->duration); ?>(s)</p>
                      <p class="text-sm text-dark mb-0 text-uppercase"><?php echo e(date("M j, Y", strtotime($val->date))); ?> - <?php echo e(date("M j, Y", strtotime($val->end_date))); ?></p>
                      <p class="text-sm text-dark mb-2 text-uppercase"><?php echo e(__('Invested')); ?> <?php echo e($val->amount.$currency->name); ?> @ <?php echo e($val->plan->percent); ?>% <?php echo e(__('Daily')); ?></p>
                      <h4 class="mb-1 h2" style="color: <?php echo e($set->s_c); ?>;"><?php echo e($val->profit.$currency->name); ?></h4>
                      <h5 class="h4 mb-0 text-dark text-uppercase"><?php echo e(__('Current Progress')); ?></h5>
                    </div>
                    <div class="col-6 text-right">
                      <h4 class="mb-1 h2 text-dark er">GOAL <?php echo e($goal.$currency->name); ?></h4>
                      <p class="text-sm text-dark mb-0 text-uppercase"><?php echo e(__('ROI')); ?> - <?php echo e($profit.$currency->name); ?></p>
                      <?php if($val->plan->bonus!=null): ?><p class="text-sm text-dark mb-0 text-uppercase"><?php echo e(__('Bonus')); ?> - <?php echo e($bonus.$currency->name); ?></p><?php endif; ?>
                    </div>
                  </div>
                  <div class="row align-items-center mb-3">
                    <div class="col">                           
                      <div class="progress mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(($val->profit*100)/$pp); ?>%;background-color:<?php echo e($set->s_c); ?>;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center mb-1"> 
                    <?php if($val->status!=2): ?>             
                      <div class="col-5">
                        <?php if($val->recurring==1): ?>
                          <?php if($val->c_r==1): ?>
                          <a href="<?php echo e(url('/')); ?>/user/cancel-recurring/<?php echo e($val->id); ?>" class="btn btn-sm btn-danger"><?php echo e(__('Cancel Recurring')); ?></a>
                          <?php elseif($val->c_r==0): ?>
                          <a href="<?php echo e(url('/')); ?>/user/start-recurring/<?php echo e($val->id); ?>" class="btn btn-sm btn-success"><?php echo e(__('Start Recurring')); ?></a>
                          <?php endif; ?>
                        <?php endif; ?>
                        <a href="#" data-toggle="modal" data-target="#share<?php echo e($val->id); ?>" title="Share trading activity" class="btn btn-sm btn-neutral"><?php echo e(__('Share')); ?></a>
                      </div>   
                    <?php endif; ?>
                    <?php if($val->status!=2): ?>                 
                      <div class="col-7 text-right">
                        <?php if($val->claim==1): ?><span class="mb-1 text-xs text-danger text-uppercase er"> <?php echo e(__('Claimed')); ?> - <?php echo e($val->claimed.$currency->name); ?></span> | <span class="mb-1 text-xs text-success text-uppercase er"><?php echo e(__('Unclaimed')); ?> - <?php echo e($profitx-$claimed.$currency->name); ?></span><?php endif; ?>
                      </div>
                    <?php endif; ?>                      
                    <?php if($val->status==2): ?>                 
                      <div class="col-7 text-left">
                      <span class="badge badge-pill badge-primary"> <?php echo e(__('Ended')); ?> </span>
                      </div>
                    <?php endif; ?>                  
                  </div>
                </div>
              </div>
              <div class="modal fade" id="claim<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-body p-0">
                      <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                          <div class="text-dark text-center mt-2 mb-3"><small><?php echo e($val->name); ?></small></div>
                          <div class="btn-wrapper text-center">
                          <?php if(($goal-$val->amount)<$val->real_profit): ?>
                            <h1 class="text-uppercase ls-1 text-primary py-1 mb-0">Available <?php echo e($profit-$claimed.$currency->name); ?></h1>
                            <p class="text-uppercase text-sm text-danger mb-0">Unavailable 0<?php echo e($currency->name); ?></p>
                          <?php else: ?>
                            <h1 class="text-uppercase ls-1 text-primary py-1 mb-0">Available <?php echo e($val->real_profit-$claimed.$currency->name); ?></h1>
                            <p class="text-uppercase text-sm text-danger mb-0">unavailable <?php echo e($profitx-$val->real_profit.$currency->name); ?></p>
                          <?php endif; ?>
                          </div>
                        </div>
                        <div class="card-body">
                          <form role="form" action="<?php echo e(route('claim_profit')); ?>" method="post">
                            <?php echo csrf_field(); ?>    
                            <input type="hidden" name="activity" value="<?php echo e($val->id); ?>">   
                            <div class="form-group row">
                              <div class="col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text text-uppercase"><?php echo e($currency->symbol); ?></span>
                                    </span>
                                    <?php if(($goal-$val->amount)<$val->real_profit): ?>
                                      <input type="number" step="any" class="form-control" name="amount" max="<?php echo e($profit-$claimed); ?>" required>
                                    <?php else: ?>
                                      <input type="number" step="any" class="form-control" name="amount" max="<?php echo e($val->real_profit-$claimed); ?>" required>
                                    <?php endif; ?>
                                    
                                </div>
                              </div>
                            </div>                            
                            <div class="text-center">
                              <button type="submit" class="btn btn-success btn-block my-4"><?php echo e(__('Withdraw')); ?></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="recurring<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-body p-0">
                      <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent pb-5 checkx">
                          <h4 class="text-dark text-center mt-2 mb-3 text-uppercase er"><?php echo e(__('Recurring Capital')); ?></h4>
                          <p class="text-dark text-center text-sm"><?php echo e(__('Once recurring payment is active, capital will be retained until end of investment.')); ?></p>
                        </div>
                        <div class="card-body">
                          <h4 class="text-dark text-center mt-2 mb-3 text-uppercase er"><?php echo e(__('Extend investment duration')); ?></h4>
                          <p class="text-dark text-center text-sm"><?php echo e(__('You will not have access to cancel this once saved.')); ?></p>
                          <form role="form" action="<?php echo e(route('start-recurring')); ?>" method="post">
                          <?php echo csrf_field(); ?> 
                            <input type="hidden" name="plan" value="<?php echo e($val->id); ?>">   
                            <div class="form-group row">
                              <div class="col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text text-uppercase"><?php echo e(__('By')); ?></span>
                                    </span>
                                    <input type="number" class="form-control" name="duration" value="1" min="1">
                                    <span class="input-group-append">
                                        <span class="input-group-text text-uppercase"><?php echo e($val->plan->period); ?></span>
                                    </span>
                                </div>
                              </div>
                            </div>                             
                            <div class="text-center">
                              <button type="submit" class="btn btn-success btn-block my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="share<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-body p-0">
                      <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent pb-1">
                          <div class="text-dark text-center mt-2 mb-3 text-uppercase er"><?php echo e(__('Share Activity')); ?></div>
                        </div>
                        <div class="card-body">
                          <form role="form" action="" method="post">
                            <div class="form-group mb-3">
                              <textarea type="text"rows="5" name="address" class="form-control" readonly>I have currently earned <?php echo e($val->profit.$currency->name); ?> with <?php echo e($set->site_name); ?>. Register with username, <?php echo e($user->username); ?> to start earning</textarea>
                            </div>
                            <div class="text-right">
                            <button type="button" class="btn-icon-clipboard" data-clipboard-text="<?php echo e($user->username); ?>" title="Copy"><?php echo e(__('Copy')); ?></button>
                            </div>
                            <hr>
                            <div class="text-center">
                              <a  href="https://facebook.com" class="btn btn-facebook btn-icon-only">
                                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                              </a>                          
                              <a href="https://twitter.com" class="btn btn-twitter btn-icon-only">
                                <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                              </a>                          
                              <a href="https://api.whatsapp.com/" class="btn btn-whatsapp btn-icon-only">
                                <span class="btn-inner--icon"><i class="fab fa-whatsapp"></i></span>
                              </a>                          
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>            
              <div class="modal fade" id="history<?php echo e($val->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-body p-0">
                      <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent pb-1 checkx">
                          <div class="text-dark text-center mt-2 mb-3 text-uppercase er"><?php echo e(__('Profit Claiming Log')); ?></div>
                        </div>
                        <div class="">
                          <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                              <tbody>
                                <?php $history=App\Models\Claimed::whereprofit_id($val->id)->get(); ?>
                                <?php if(count($history)>0): ?>
                                  <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$hval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>                     
                                      <td><?php echo e($hval->amount); ?></td>
                                      <td>#<?php echo e($hval->ref); ?></td>
                                      <td><?php echo e(date("M j, Y", strtotime($hval->date))); ?></td>
                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                  <tr>                     
                                    <td class="text-center"><?php echo e(__('Nothing found')); ?></td>
                                  </tr>
                                <?php endif; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <div class="col-md-12 mb-5">
            <div class="text-center mt-8">
              <div class="mb-3">
                <img src="<?php echo e(url('/')); ?>/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Activity</h3>
              <p class="text-dark text-sm card-text">We couldn't find any investment activity to this account</p>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nn/core/resources/views/user/trading/trades.blade.php ENDPATH**/ ?>