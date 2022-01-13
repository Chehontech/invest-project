<?php $__env->startSection('content'); ?>
<div class="main-content">
    <!-- Header -->
    <div class="header py-5 py-lg-6 pt-lg-1">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image); ?>" alt="Image placeholder">
                    <div class="card-body">
                        <span class="text-sm text-muted mb-0"><?php echo e($plan->original-$plan->units); ?> / <?php echo e($plan->original); ?></span>
                        <div class="progress progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($plan->original-$plan->units)*100)/$plan->original); ?>%;"></div>
                        </div>
                        <h5 class="h2 card-title mb-0"><?php echo e($plan->name); ?></h5>
                        <small class="text-muted text-uppercase"><?php echo e($plan->location); ?> - <?php echo e($plan->duration.' '.$plan->period); ?>(s)</small>
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col-6">
                                <span class="form-text text-sm text-dark"><?php echo e(__('Price')); ?></span>
                                <span class="form-text text-xs text-muted"><?php echo e($currency->symbol.$plan->price); ?> @ 1 Unit</span>
                            </div>
                            <div class="col-6"> 
                                <span class="form-text text-sm text-dark"><?php echo e(__('Profit Margin')); ?></span>
                                <h4 class="mb-1 h1 text-primary"><?php echo e($plan->interest); ?>%</h4> 
                            </div>
                            <div class="col-6">
                                <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                <span class="form-text text-xs text-muted"><?php echo e(date("Y/m/d h:i:A", strtotime($plan->start_date))); ?></span>
                            </div>
                            <div class="col-6"> 
                                <span class="form-text text-sm text-dark"><?php echo e(__('Closing Date')); ?></span>
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
                        <h5 class="h3 mb-0"><?php echo e(__('Description')); ?></h5>
                        </div>
                        <div class="col-4 text-right">
                        <?php if($plan->units>0): ?>
                            <?php if($plan->start_date <= Carbon\Carbon::now()->isoFormat('M/D/Y') && $plan->expiring_date > Carbon\Carbon::now()->isoFormat('M/D/Y')): ?>
                                <a href="<?php echo e(route('user.plans')); ?>"  class="btn btn-sm btn-success"><?php echo e(__('Purchase Units')); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <p class="card-text text-sm mb-4"><?php echo e($plan->description); ?></p>
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
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a href="<?php echo e(url()->previous()); ?>"><i class="fad fa-long-arrow-alt-left"></i> Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/front/view.blade.php ENDPATH**/ ?>