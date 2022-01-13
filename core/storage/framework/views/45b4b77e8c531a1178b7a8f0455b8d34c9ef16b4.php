<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-sh">
    <div class="main-content">
        <!-- Page content -->
        <div class="container check-plan-front mt--8 pb-5 mb-0">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="img-header">
                            <img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image); ?>" alt="Image placeholder">
                        </div>
                        <div class="card-body des-project">
                            <span class="text-sm text-muted mb-0 progres-bar"> <cl> <?php echo e($plan->original-$plan->units); ?> </cl>  / <?php echo e($plan->original); ?></span>
                            <div class="progress progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((($plan->original-$plan->units)*100)/$plan->original); ?>%;"></div>
                            </div>
                            <h5 class="h2 card-title mb-0"><?php echo e($plan->name); ?></h5>
                            <small class="text-muted text-uppercase"><?php echo e($plan->location); ?> - <cl><?php echo e($plan->duration); ?></cl> <?php echo e($plan->period); ?>(s)</small>
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col-6">
                                    <span class="form-text text-sm text-dark"><?php echo e(__('Price')); ?></span>
                                    <span class="form-text text-xs text-muted"><?php echo e($currency->symbol); ?><cl><?php echo e($plan->price); ?></cl></span>
                                </div>
                                <div class="col-6"> 
                                    <span class="form-text text-sm text-dark right-text"><?php echo e(__('Profit Margin')); ?></span>
                                    <h4 class="mb-1 h1 form-text text-primary right-text"><?php echo e($plan->interest); ?>%</h4> 
                                </div>
                                <div class="col-6">
                                    <span class="form-text text-sm text-dark"><?php echo e(__('Opening Date')); ?></span>
                                    <span class="form-text text-xs text-muted"><?php echo e(date("Y-m-d", strtotime($plan->start_date))); ?></span>
                                </div>
                                <div class="col-6"> 
                                    <span class="form-text text-sm text-dark right-text"><?php echo e(__('Closing Date')); ?></span>
                                    <span class="form-text text-sm text-muted right-text"><?php echo e(date("Y-m-d", strtotime($plan->expiring_date))); ?></span> 
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col-12">
                                    <h5 class="h3 mb-3 card-title"><?php echo e(__('Purchase Units')); ?></h5>
                                    <?php if(Auth::guard('user')->check()): ?>
                                        <?php if($plan->units>0): ?>
                                        <form role="form" action="<?php echo e(route('user.sandcheck_plan')); ?>" method="post">
                                            <?php echo csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-alternative">
                                                        <!--
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">#</span>
                                                        </div>
                                                        -->
                                                        <input type="number" class="form-control" placeholder="<?php echo e(__('Units')); ?>" id="units" name="units" onkeyup="buycharge()"max="<?php echo e($plan->units); ?>" required>
                                                        <input type="hidden" name="plan" value="<?php echo e($plan->id); ?>">
                                                        <input type="hidden" name="price" id="price" value="<?php echo e($plan->price); ?>">
                                                        <input type="hidden" name="profitInput" id="profitInput" value="<?php echo e($plan->interest); ?>">
                                                        </div>
                                                    </div>    
                                                </div> 
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="form-control text-dark text-center">
                                                            <cl><span id="profitU"><?php echo e(__('Your profit')); ?></span></cl>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                            </div>
                                            
                                                                                           
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Purchase')); ?> <span id="cardresult"></span></button>
                                            </div>
                                        </form>
                                            <!--
                                                <a href="#" data-toggle="modal" data-target="#buy<?php echo e($plan->id); ?>"   class="btn btn-sm btn-primary">Purchase Units</a>
                                            -->
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/')); ?>/login"    class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                                    <?php endif; ?>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center  campaning-block">
                        
                        <div class="col-md-8">
                            <div class="card header">
                                <div class="card-header">
                                    <h5 class="h3 mb-0"><?php echo e($plan->name_campaign); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="img-header">
                                    <a href="<?php echo e($plan->url_campaign); ?>" target="_blank">
                                        <!--<img class="card-img-top" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image_campaign); ?>" alt="Image campaning">
                                        --><img class="card-img-top" src="https://invest.adder.com.ua/asset/images/BAM/1626944041_LOGO_white 400x400px.jpg" alt="Image campaning">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php if($plan->description_campaign): ?>
                            <div class="col-md-12">
                                <hr class="hr-style">
                                <div class="desc-campaign">
                                        <?php echo $plan->description_campaign; ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card description">
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
                        <hr class="hr-style">
                        <div class="card-body">
                        <p class="card-text text-sm "><?php echo $plan->description; ?></p>
                            <div class="row card-category">
                                <div class="col-4">
                                <?php
                                $category=App\Models\Sandplancategory::whereid($plan->cat_id)->first();
                                ?>
                                    <span class="form-text text-sm text-muted"><?php echo e(__('Category')); ?>: <cl><?php echo e($category->name); ?></cl></span>
                                </div>
                                <div class="col-4"> 
                                    <span class="form-text text-sm text-muted"><?php echo e(__('Insurance')); ?>:<cl> <?php if($plan->insurance==1): ?> <?php echo e(__('Yes')); ?> <?php else: ?> <?php echo e(__('No')); ?> <?php endif; ?> </cl></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <?php if(Auth::guard('user')->check()): ?>
                        <div class="card card-table">
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
                    <?php else: ?>
                        <div class="card not-login justify-content-lg-center">
                            <div class="card-header header-elements-inline">
                                <h3 class="mb-0"><?php echo e(__('Plan Updates')); ?></h3>
                            </div>
                            <a href="<?php echo e(url('/')); ?>/login" data-toggle="modal"   class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                        </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="block-pdf info-star-box justify-content-lg-center row">
                    <div class="col-md-3 mb-7 mb-lg-0">
                        <?php if(Auth::guard('user')->check()): ?>
                        <a href="<?php echo e(url('/')); ?>/asset/images/BAM/1627377261_DE_210714_Investment-Analyse_BAM_TW.pdf" target="_blank">
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>/login" target="_blank">
                        <?php endif; ?>
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-file">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold"><?php echo e(__('PDF prpject')); ?></span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        <?php if(Auth::guard('user')->check()): ?>
                        <a href="<?php echo e(url('/')); ?>/asset/images/BAM/1627466134_210728_BAM_exposé_IC_DE_v2.pdf" target="_blank">
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>/login" target="_blank">
                        <?php endif; ?>
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-pie-chart">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold"><?php echo e(__('PDF Analytics')); ?></span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        <?php if(Auth::guard('user')->check()): ?>
                        <a href="<?php echo e(url('/')); ?>/asset/images/BAM/1627316505_Beteiligungsdokumente_DE.pdf" target="_blank">
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>/login" target="_blank">
                        <?php endif; ?>
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-sticky-note">
                                    
                                </i>
                                
                                </figure>
                                <span class="text-dark font-weight-bold"><?php echo e(__('PDF Statut')); ?></span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        <?php if(Auth::guard('user')->check()): ?>
                        <a href="<?php echo e(url('/')); ?>/asset/images/BAM/1627404717_20210727_BAM Pitch Deck_Companisto_DE_V8.pdf" target="_blank">
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>/login" target="_blank">
                        <?php endif; ?>
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-newspaper-o">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold"><?php echo e(__('PDF presentation')); ?></span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="block-video justify-content-lg-center row">
                    <div class="col-md-12 mb-7 mb-lg-0 video-item">
                    <?php if(Auth::guard('user')->check()): ?>
                    <iframe src="https://www.youtube.com/embed/nvBgnEh0p4k" width="900" height="505" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php else: ?>
                        <div class="card not-login justify-content-lg-center">
                            <div class="card-header header-elements-inline">
                                <h3 class="mb-0"><?php echo e(__('Plan video')); ?></h3>
                            </div>
                            <a href="<?php echo e(url('/')); ?>/login" data-toggle="modal"   class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                        </div>
                    <?php endif; ?>
                    </div>  
                </div>
                <div class="block-shares justify-content-lg-center row">
                    <div class="col-md-12 mb-7 mb-lg-0">
                    <script src="https://code.highcharts.com/stock/highstock.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
                    <script src="https://code.highcharts.com/stock/highcharts-more.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

                    <div id="containerG" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    <script>
                        Highcharts.getJSON('https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/range.json', function (data) {

                        Highcharts.stockChart('containerG', {

                        chart: {
                            type: 'columnrange'
                        },

                        rangeSelector: {
                            selected: 2
                        },

                        title: {
                            text: 'Shares variation by day'
                        },

                        tooltip: {
                            valueSuffix: '$'
                        },

                        series: [{
                            name: 'Shares',
                            data: data
                        }]

                        });
                        });
                    </script>
                    </div>
                </div>
            <div class="row justify-content-center back-btn mt-5">
                <a href="<?php echo e(url()->previous()); ?>"><i class="fad fa-long-arrow-alt-left"></i> Back</a>
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
                <div class="text-dark text-center mt-2 mb-3"><small><?php echo e(__('Your profit')); ?></small> <cl><span id="profitU"></span></cl></div>
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
                    <input type="hidden" name="profitInput" id="profitInput" value="<?php echo e($plan->interest); ?>">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/front/view.blade.php ENDPATH**/ ?>