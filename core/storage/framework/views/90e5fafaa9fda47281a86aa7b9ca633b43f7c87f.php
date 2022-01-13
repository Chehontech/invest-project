<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="card shadow">
          <div class="card-header bg-transparent">
            <h3 class="mb-0"><?php echo e(__('Log')); ?></h3>
          </div>
          <div class="card-body">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
              <div class="timeline-block">
                  <span class="timeline-step badge-primary">
                    <i class="fad fa-user"></i>
                  </span>
                  <div class="timeline-content">
                      <small class="font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($ticket->created_at))); ?></small>
                      <h5 class="mt-3 mb-0"><?php echo e($ticket->message); ?></h5>
                      <p class="text-sm mt-1 mb-0"><?php echo e(__('User')); ?></p>
                      </br>
                      <?php if($ticket->name != null): ?>
                      <div class="container mt--12 pb-5 mb-0">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($ticket->image); ?>" alt="Image placeholder">
                                    <div class="card-body">
                                        <span class="text-sm text-muted mb-0"><?php echo e($ticket->original-$ticket->units); ?> / <?php echo e($ticket->original); ?></span>
                                        <div class="progress progress mb-3">
                                        
                                        </div>
                                        <h5 class="h2 card-title mb-0"><?php echo e($ticket->name); ?></h5>
                                        <small class="text-muted text-uppercase"><?php echo e($ticket->location); ?> - <?php echo e($ticket->duration.' '.$ticket->period); ?>(s)</small>
                                        <div class="row justify-content-between align-items-center mb-3">
                                            <div class="col-6">
                                                <span class="form-text text-sm text-dark"><?php echo e(__('Price')); ?></span>
                                                <span class="form-text text-xs text-muted"><?php echo e($currency->symbol.$ticket->price); ?> @ 1 Unit</span>
                                            </div>
                                            <div class="col-6"> 
                                                <span class="form-text text-sm text-dark"><?php echo e(__('Profit Margin')); ?></span>
                                                <h4 class="mb-1 h1 text-primary"><?php echo e($ticket->interest); ?>%</h4> 
                                            </div>
                                            <div class="col-6">
                                                <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                                <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($ticket->start_date))); ?></span>
                                            </div>
                                            <div class="col-6"> 
                                                <span class="form-text text-sm text-dark"><?php echo e(__('Closing Date')); ?></span>
                                                <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($ticket->expiring_date))); ?></span> 
                                            </div>
                                        </div>             
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                        <h5 class="h3 mb-0"><?php echo e(__('Description')); ?></h5>
                                        </div>
                                        <div class="col-4 text-right">
                                        <?php if($ticket->units>0): ?>
                                            <?php if($ticket->start_date <= Carbon\Carbon::now()->isoFormat('M/D/Y') && $ticket->expiring_date > Carbon\Carbon::now()->isoFormat('M/D/Y')): ?>
                                                <a href="<?php echo e(route('user.plans')); ?>"  class="btn btn-sm btn-success"><?php echo e(__('Purchase Units')); ?></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text text-sm mb-4"><?php echo $ticket->description; ?></p>
                                        <div class="row">
                                            <div class="col-4">
                                            <?php
                                            $category=App\Models\Sandplancategory::whereid($ticket->cat_id)->first();
                                            ?>

                                            </div>
                                            <div class="col-4"> 
                                                <span class="form-text text-sm text-muted"><?php echo e(__('Insurance')); ?>: <?php if($ticket->insurance==1): ?> <?php echo e(__('Yes')); ?> <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <a href="<?php echo e(url()->previous()); ?>"><i class="fad fa-long-arrow-alt-left"></i> Back</a>
                        </div>
                      </div>
                      <?php endif; ?>
                  </div>
              </div>
            <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $df): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($df->status==1): ?>
                <div class="timeline-block">
                  <span class="timeline-step badge-primary">
                    <i class="fad fa-user-cog"></i>
                  </span>
                  <div class="timeline-content">
                    <small class="font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($df->created_at))); ?></small>
                    <h5 class="mt-3 mb-0"><?php echo e($df->reply); ?></h5>
                    <p class="text-sm mt-1 mb-0"><?php echo e(__('User')); ?></p>
                  </div>
                </div>
                <?php elseif($df->status==0): ?>
                  <div class="timeline-block">
                      <span class="timeline-step badge-primary">
                        <i class="fad fa-user-cog"></i>
                      </span>
                      <div class="timeline-content">
                      <small class="font-weight-bold"><?php echo e(date("Y/m/d h:i:A", strtotime($df->created_at))); ?></small>
                      <h5 class="mt-3 mb-0"><?php echo e($df->reply); ?></h5>
                      <p class="text-sm mt-1 mb-0"><?php echo e(__('Admin')); ?></p>
                      </div>
                  </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
		<div class="card">
          	<div class="card-header header-elements-inline">
            	<h3 class="mb-0"><?php echo e(__('Reply')); ?></h3>
          	</div>
          	<div class="card-body form-block">
				<form method="post" action="<?php echo e(route('ticket.reply')); ?>">
					<?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <textarea class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."  name="reply" required></textarea>
                            <input type="hidden"  name="ticket_id" value="<?php echo e($ticket->ticket_id); ?>">		
                        </div>
                    </div>	
					<div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Send')); ?></button>
                        </div>
                    </div>	
				</form>
		  	</div>
        </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/admin/user/edit-ticket.blade.php ENDPATH**/ ?>