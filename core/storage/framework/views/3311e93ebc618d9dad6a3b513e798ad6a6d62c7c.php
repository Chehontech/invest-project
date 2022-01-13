<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Create')); ?></h3>
                    </div>
                    <div class="card-body form-block">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.sand.plan.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Duration')); ?></label>
                                <div class="col-lg-10">
                                    <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" id="duration" class="form-control" placeholder="1" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Period')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="period" data-fouc required>    
                                        <option value="Day"><?php echo e(__('Day - 1')); ?></option>                                         
                                        <option value="Week"><?php echo e(__('Week - 7')); ?></option>                                         
                                        <option value="Month"><?php echo e(__('Month - 30')); ?></option>                                         
                                        <option value="Year"><?php echo e(__('Year - 365')); ?></option>                                       
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                          
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="interest" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Price')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="price" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Units')); ?></label>
                                <div class="col-lg-10">
                                        <input type="number" step="any" name="units" class="form-control" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="exampleDatepicker"><?php echo e(__('Start date')); ?></label>
                                <div class="col-lg-10">
                                    <input type="date-local" name="start_date" class="form-control datepicker" value="06/20/2020" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Location')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="location" class="form-control" required>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status" required>
                                        <option value="1"><?php echo e(__('Active')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('Disable')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Insurance')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="insurance" required>
                                        <option value="1"><?php echo e(__('Yes')); ?>

                                        </option>
                                        <option value="0"><?php echo e(__('No')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Referral percent:')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en" required>
                                    <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Media')); ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12"><?php echo e(__('Description')); ?></label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="4" name="description" class="form-control tinymce"></textarea>
                                </div>
                            </div>
                            <!-- campaign -->
                            <hr class="my-3">
                              
                            <div class="card-header">
                                <h3 class="card-title"><?php echo e(__('Campaign Info')); ?></h3>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileCampaign" name="imageCampaign" lang="en" required>
                                    <label class="custom-file-label" for="customFileCampaign"><?php echo e(__('Choose Avatar Campaign')); ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name Campaign')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_campaign" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Url Campaign')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="url_campaign" class="form-control" >
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12"><?php echo e(__('Description Campaign')); ?></label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="4" name="description_campaign" class="form-control tinymce"></textarea>
                                </div>
                            </div>
                            <!-- campaign -->
                            <!-- file -->
                            <hr class="my-3">
                            <!-- file -->
                            <div class="card-header">
                                <h3 class="card-title"><?php echo e(__('Add File')); ?></h3>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_pdf" name="customFile_pdf" lang="en" >
                                    <label class="custom-file-label" for="customFile_pdf"><?php echo e(__('Choose PDF')); ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_analyse" name="customFile_analyse" lang="en" >
                                    <label class="custom-file-label" for="customFile_analyse"><?php echo e(__('Choose PDF Analyse')); ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_statut" name="customFile_statut" lang="en" >
                                    <label class="custom-file-label" for="customFile_statut"><?php echo e(__('Choose PDF Statut')); ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_presentation" name="customFile_presentation" lang="en" >
                                    <label class="custom-file-label" for="customFile_presentation"><?php echo e(__('Choose PDF Presentation')); ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Video Url')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="video_sand" class="form-control" placeholder="Add YouTube url" >
                                </div>
                            </div> 
                            
                            <!-- file -->

                            <hr class="my-3">

                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/admin/project/create.blade.php ENDPATH**/ ?>