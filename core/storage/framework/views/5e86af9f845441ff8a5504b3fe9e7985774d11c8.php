<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6 user-tiket">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="">
          <div class="card-body">
            <div class="">
              <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> <?php echo e(__('Open Ticket')); ?></a>
              <a data-toggle="modal" data-target="#modal-formx-add" href="" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> <?php echo e(__('Create an investment project')); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-body p-0">
                <div class="card border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0"><?php echo e(__('Open Ticket')); ?></h3>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo e(route('submit-ticket')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Subject')); ?></label>
                        <div class="col-lg-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="subject" class="form-control" required="">
                          </div>
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Priority')); ?></label>
                        <div class="col-lg-10">
                        <select class="form-control select" name="category" required>
                          <option  value="Low"><?php echo e(__('Low')); ?></option>
                          <option  value="Medium"><?php echo e(__('Medium')); ?></option> 
                          <option  value="High"><?php echo e(__('High')); ?></option>
                        </select>
                      </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Details')); ?></label>
                        <div class="col-lg-10">
                          <textarea name="details" class="form-control" rows="4" required></textarea>
                        </div>
                      </div>
                      
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
        <div class="modal fade" id="modal-formx-add" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-body p-0">
                <div class="card border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0"><?php echo e(__('Create an investment project')); ?></h3>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo e(route('submit-ticket-plan')); ?>" method="post">
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
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Subject')); ?></label>
                        <div class="col-lg-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="subject" class="form-control" required="">
                          </div>
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Details')); ?></label>
                        <div class="col-lg-10">
                          <textarea name="details" class="form-control" rows="4" required></textarea>
                        </div>
                      </div>
                      
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
      </div>
    </div>  
    <div class="row">
      <?php if(count($ticket)>0): ?>
        <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6">
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-7">
                      <!-- Title -->
                      <h5 class="h4 mb-0">#<?php echo e($val->ticket_id); ?></h5>
                    </div>
                    <div class="col-5 text-right">
                      <a href="<?php echo e(url('/')); ?>/user/reply-ticket/<?php echo e($val->ticket_id); ?>" class="btn btn-sm btn-neutral"><?php echo e(__('Reply')); ?></a>
                      <a href="<?php echo e(url('/')); ?>/user/ticket/delete/<?php echo e($val->id); ?>" class="btn btn-sm btn-danger"><?php echo e(__('Delete')); ?></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Subject')); ?>: <?php echo e($val->subject); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Priority')); ?>: <?php echo e($val->priority); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Status')); ?>: <?php if($val->status==0): ?><?php echo e(__('Open')); ?> <?php elseif($val->status==1): ?><?php echo e(__('Closed')); ?> <?php elseif($val->status==2): ?><?php echo e(__('Resolved')); ?> <?php endif; ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Created')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->created_at))); ?></p>
                      <p class="text-sm text-dark mb-0"><?php echo e(__('Updated')); ?>: <?php echo e(date("Y/m/d h:i:A", strtotime($val->updated_at))); ?></p>
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
            <h3 class="text-dark">No Ticket</h3>
            <p class="text-dark text-sm card-text">We couldn't find any support ticket to this account</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      <?php echo e($ticket->links('pagination::bootstrap-4')); ?>

      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/user/support/index.blade.php ENDPATH**/ ?>