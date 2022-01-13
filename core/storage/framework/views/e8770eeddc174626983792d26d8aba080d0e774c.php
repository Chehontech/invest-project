<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6 view-sandplan">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image); ?>" alt="Image placeholder">
                    <div class="card-body">
                        <span class="text-sm text-muted mb-0"><?php echo e($plan->original-$plan->units); ?> / <?php echo e($plan->original); ?> Units Sold</span>
                        <div class="progress progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($plan->original-$plan->units)*100)/$plan->original); ?>%;"></div>
                        </div>
                        <h5 class="h2 card-title mb-1 font-weight-bolder"><?php echo e($plan->name); ?></h5>
                        <small class="text-muted"><?php echo e($plan->location); ?></small>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-sm text-dark mb-0"><span class="text-primary h3 font-weight-bolder"><?php echo e($plan->interest); ?>%</span> Returns in <?php echo e($plan->duration.' '.$plan->period); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-sm text-dark mb-0"><span class="text-success h3 font-weight-bolder"><?php echo e($currency->symbol.$plan->price); ?></span> Per Unit</p>
                            </div>
                        </div>
                        
                        <p class="text-sm text-dark mb-0"><?php if($plan->ref_percent!=null): ?><?php echo e($plan->ref_percent); ?>% <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?><?php echo e(__('Referral Bonus')); ?></p>
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col-6">
                                <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($plan->start_date))); ?></span>
                            </div>
                            <div class="col-6"> 
                                <span class="form-text text-sm text-dark"><?php echo e(__('Maturity Date')); ?></span>
                                <span class="form-text text-sm text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($plan->expiring_date))); ?></span> 
                            </div>
                        </div>             
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h5 class="h3 mb-0 font-weight-bolder"><?php echo e(__('Description')); ?></h5>
                        </div>
                        <div class="col-4 text-right">
                        <?php if($plan->units>0): ?>
                            <?php if($plan->start_date <= Carbon\Carbon::now()->toDateTimeLocalString() && $plan->expiring_date > Carbon\Carbon::now()->toDateTimeLocalString()): ?>
                                <a href="#" data-toggle="modal" data-target="#buy<?php echo e($plan->id); ?>"   class="btn btn-sm btn-primary">Purchase Units</a>
                            <?php endif; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <p class="card-text text-sm mb-4"><?php echo $plan->description; ?></p>
                        <div class="row">
                            <div class="col-4">
                            <?php
                            $category=App\Models\Sandplancategory::whereid($plan->cat_id)->first();
                            ?>
                                <span class="form-text text-sm text-muted"><?php echo e(__('Category')); ?>: <?php echo e($category->name); ?></span>
                            </div>
                            <div class="col-4"> 
                                <span class="form-text text-sm text-muted"><?php echo e(__('Insurance')); ?>: <?php if($plan->insurance==1): ?> <?php echo e(__('Yes')); ?> <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Plan Updates')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                        <thead>
                            <tr>
                            <th><?php echo e(__('S / N')); ?></th>
                            <th><?php echo e(__('Information')); ?></th>
                            <th><?php echo e(__('Report')); ?></th>
                            <th><?php echo e(__('Activity')); ?></th>
                            <th><?php echo e(__('Stage')); ?></th>
                            <th><?php echo e(__('Weeks')); ?></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php $__currentLoopData = $updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e(str_limit($val->information, 10)); ?></td>
                                <td><?php echo e(str_limit($val->report, 10)); ?></td>
                                <td><?php echo e(str_limit($val->activity, 10)); ?></td>
                                <td><?php echo e($val->stage); ?></td>
                                <td><?php echo e($val->weeks); ?></td>
                                <td><a href="<?php echo e(route('view.sandplan.update', ['id' => $val->id])); ?>"><i class="fa fa-eye"></i></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Your Investments')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                        <thead>
                            <tr>
                            <th><?php echo e(__('S / N')); ?></th>
                            <th><?php echo e(__('Reference ID')); ?></th>
                            <th><?php echo e(__('Units')); ?></th>
                            <th><?php echo e(__('Amount')); ?></th>
                            <th><?php echo e(__('Profit')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>
                            <th><?php echo e(__('Created')); ?></th>
                            <th><?php echo e(__('Updated')); ?></th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td>#<?php echo e($val->trx); ?></td>
                                <td><?php echo e($val->units); ?></td>
                                <td><?php echo e($currency->symbol.number_format($val->amount)); ?></td>
                                <td><?php echo e($currency->symbol.number_format($val->profit)); ?></td>
                                <td><?php if($val->status==1): ?> Running <?php else: ?> Ended <?php endif; ?></td>
                                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></td>
                                <td><?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="buy<?php echo e($plan->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content form-block form-modal">
        <div class="modal-body p-0">
            <div class="card border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
                <div class="text-dark text-center mt-2 mb-3"><small><?php echo e(__('Purchase plan')); ?></small></div>
                <div class="btn-wrapper text-center">
                <h4 class="text-uppercase ls-1 text-dark py-3 mb-0"><?php echo e($plan->name); ?></h4>
                </div>
            </div>
            <div class="card-body">
                <form role="form" action="<?php echo e(route('user.sandcheck_plan')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">#</span>
                    </div>
                    <input type="number" class="form-control" placeholder="<?php echo e(__('Units')); ?>" id="units" name="units" onkeyup="buycharge()"max="<?php echo e($plan->units); ?>" required>
                    <input type="hidden" name="plan" value="<?php echo e($plan->id); ?>">
                    <input type="hidden" name="price" id="price" value="<?php echo e($plan->price); ?>">
                    </div>
                </div>                                                   
                <div class="text-center">
                    <button type="submit" class="btn btn-neutral btn-block"><?php echo e(__('Purchase')); ?> <span id="cardresult"></span></button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/user/trading/view.blade.php ENDPATH**/ ?>