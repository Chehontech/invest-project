

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0"><?php echo e(__('Your Profile')); ?></h3>
          </div>
          <div class="card-body">
            <form action="<?php echo e(url('user/account')); ?>" method="post">
              <?php echo csrf_field(); ?>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3"><?php echo e(__('Full Name')); ?></label>
                  <div class="col-lg-9">
                    <div class="row">
                        <div class="col-6">
                          <input type="text" name="first_name" class="form-control" placeholder="<?php echo e(__('First Name')); ?>" value="<?php echo e($user->first_name); ?>">
                        </div>      
                        <div class="col-6">
                          <input type="text" name="last_name" class="form-control" placeholder="<?php echo e(__('Last Name')); ?>" value="<?php echo e($user->last_name); ?>">
                        </div>
                    </div>
                  </div>
                </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-3"><?php echo e(__('Username')); ?></label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" placeholder="<?php echo e(__('Your Username')); ?>" value="<?php echo e($user->username); ?>" required>
                  </div>
                </div>   
                <div class="form-group row">
                  <label class="col-form-label col-lg-3"><?php echo e(__('Phone Number')); ?></label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+</span>
                      </div>
                      <input type="number" inputmode="numeric" name="phone" placeholder="<?php echo e(__('Phone Number')); ?>" maxlength="14" class="form-control" value="<?php echo e($user->phone); ?>">
                    </div>
                  </div>
                </div>                 
                <div class="form-group row">
                  <label class="col-form-label col-lg-3"><?php echo e(__('Email Address')); ?></label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('Email Address')); ?>" value="<?php echo e($user->email); ?>">
                    </div>
                  </div>
                </div>               
                <div class="form-group row">
                  <label class="col-form-label col-lg-3"><?php echo e(__('Address')); ?></label>
                  <div class="col-lg-9">
                    <input type="text" name="address" class="form-control" placeholder="<?php echo e(__('Address')); ?>" value="<?php echo e($user->address); ?>">
                  </div>
                </div>                                   
              <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save Changes')); ?></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="card-title mb-3"><?php echo e(__('Account Photo')); ?></h3>
            <a href="#" class="avatar text-center mb-3">
              <img src="<?php echo e(url('/')); ?>/asset/profile/<?php echo e($cast); ?>"/>
            </a>
            <form action="<?php echo e(url('user/avatar')); ?>" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" accept="image/*" required>
                    <label class="custom-file-label" for="customFileLang" style="border-color: <?php echo e($set->s_c); ?>;"><?php echo e(__('Choose Media')); ?></label>
                  </div> 
                </div>              
              <div class="text-right">
                <button type="submit" class="btn btn-neutral btn-block"><?php echo e(__('Change Photo')); ?></button>
              </div>
            </form>
          </div>
        </div>
          <div class="card">
            <div class="card-body text-center">
              <h3 class="card-title mb-3"><?php echo e(__('Delete Account')); ?></h3>
              <p class="card-text text-sm text-dark"><?php echo e(__('Closing this account means you will no longer be able to access this account on')); ?> <?php echo e($set->site_name); ?></p>
              <div class="text-right">
                  <a data-toggle="modal" data-target="#modal-formp" href="" class="btn btn-danger btn-block"><i class="fad fa-trash"></i> <?php echo e(__('Delete Account')); ?></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formp" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-header">
                <h3 class="mb-0"><?php echo e(__('Delete Account')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('delaccount')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <textarea type="text" name="reason" class="form-control" rows="5" placeholder="<?php echo e(__('Sorry to see you leave, Please tell us why you are leaving')); ?>" required></textarea>
                    </div>
                  </div>             
                  <div class="text-right">
                    <button type="submit" class="btn btn-neutral btn-block"><?php echo e(__('Delete account')); ?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>         
      </div>
    </div>
  </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/profile/index.blade.php ENDPATH**/ ?>