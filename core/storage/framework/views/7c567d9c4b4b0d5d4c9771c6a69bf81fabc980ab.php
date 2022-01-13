<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0"><?php echo e(__('Congifure website')); ?></h3>
            </div>
            <div class="card-body form-block">
                <form action="<?php echo e(route('admin.settings.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Website name')); ?></label>
                        <div class="col-lg-10">
                            <input type="text" name="site_name" maxlength="200" value="<?php echo e($set->site_name); ?>" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Company email')); ?></label>
                        <div class="col-lg-10">
                            <input type="email" name="email" value="<?php echo e($set->email); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Mobile')); ?></label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="mobile" max-length="14" value="<?php echo e($set->mobile); ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Website title')); ?></label>
                        <div class="col-lg-10">
                            <input type="text" name="title" max-length="200" value="<?php echo e($set->title); ?>" class="form-control">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Livechat code')); ?></label>
                        <div class="col-lg-10">
                            <textarea type="text" name="livechat" class="form-control"><?php echo e($set->livechat); ?></textarea>
                        </div>
                    </div>                     
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Welcome Message')); ?></label>
                        <div class="col-lg-10">
                            <textarea type="text" rows="5" name="welcome_message" class="form-control"><?php echo e($set->welcome_message); ?></textarea>
                        </div>
                    </div>                    
                    <div class="form-group row">
                                            
                        <label class="col-form-label col-lg-2"><?php echo e(__('Balance on signup')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                </span>
                                <input type="number" name="bal" step="any" max-length="10" value="<?php echo e(convertFloat($set->balance_reg)); ?>" class="form-control">
                            </div>
                        </div>    
                        <label class="col-form-label col-lg-2"><?php echo e(__('Upgrade_fee for bonus')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-append">
                                    <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                </span>
                                <input type="number" name="upgrade_fee" max-length="10" value="<?php echo e($set->upgrade_fee); ?>" class="form-control">
                            </div>
                        </div>                                                                                 
                        <label class="col-form-label col-lg-2"><?php echo e(__('Withdraw charge')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" name="withdraw_charge" max-length="10" value="<?php echo e($set->withdraw_charge); ?>" class="form-control">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                              
                        <label class="col-form-label col-lg-2"><?php echo e(__('Transfer charge')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" name="transfer_charge" max-length="10" value="<?php echo e($set->transfer_charge); ?>" class="form-control">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                                      
                        </div>           
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?> <span class="text-danger">*</span></label>
                            <div class="col-lg-5">
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->kyc==1): ?>
                                        <input type="checkbox" name="kyc" id="customCheckLogin1" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="kyc" id="customCheckLogin1"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin1">
                                    <span class="text-muted"><?php echo e(__('Kyc')); ?></span>     
                                    </label>
                                </div>                        
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->email_verification==1): ?>
                                        <input type="checkbox" name="email_activation" id="customCheckLogin2" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="email_activation"id="customCheckLogin2"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin2">
                                    <span class="text-muted"><?php echo e(__('Email verification')); ?></span>     
                                    </label>
                                </div>                       
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->email_notify==1): ?>
                                        <input type="checkbox" name="email_notify" id="customCheckLogin3" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="email_notify"id="customCheckLogin3"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin3">
                                    <span class="text-muted"><?php echo e(__('Email notify')); ?></span>     
                                    </label>
                                </div>                        
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->registration==1): ?>
                                        <input type="checkbox" name="registration" id="customCheckLogin4" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="registration"id="customCheckLogin4"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin4">
                                    <span class="text-muted"><?php echo e(__('Registration')); ?></span>     
                                    </label>
                                </div> 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->referral==1): ?>
                                        <input type="checkbox" name="referral" id="customCheckLogin5" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="referral"id="customCheckLogin5"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin5">
                                    <span class="text-muted"><?php echo e(__('Referral')); ?></span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->recaptcha==1): ?>
                                        <input type="checkbox" name="recaptcha" id="customCheckLogin6" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="recaptcha"id="customCheckLogin6"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin6">
                                    <span class="text-muted"><?php echo e(__('Recaptcha')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->language==1): ?>
                                        <input type="checkbox" name="language" id="customCheckLogin7" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="language"id="customCheckLogin7"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin7">
                                    <span class="text-muted"><?php echo e(__('Language')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->blog==1): ?>
                                        <input type="checkbox" name="blog" id="customCheckLogin8" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="blog"id="customCheckLogin8"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin8">
                                    <span class="text-muted"><?php echo e(__('Blog')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->transfer==1): ?>
                                        <input type="checkbox" name="transfer" id="customCheckLogin17" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="transfer" id="customCheckLogin17"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin17">
                                    <span class="text-muted"><?php echo e(__('Transfer')); ?></span>     
                                    </label>
                                </div>                               
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->ns==1): ?>
                                        <input type="checkbox" name="ns" id="customCheckLoginx17" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="ns" id="customCheckLoginx17"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLoginx17">
                                    <span class="text-muted"><?php echo e(__('Next Settlement')); ?></span>     
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-5">      
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->services==1): ?>
                                        <input type="checkbox" name="services" id="customCheckLogin9" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="services"id="customCheckLogin9"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin9">
                                    <span class="text-muted"><?php echo e(__('Services')); ?></span>     
                                    </label>
                                </div>  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->review==1): ?>
                                        <input type="checkbox" name="review" id="customCheckLogin10" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="review"id="customCheckLogin10"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin10">
                                    <span class="text-muted"><?php echo e(__('Review')); ?></span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->plan==1): ?>
                                        <input type="checkbox" name="plan" id="customCheckLogin11" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="plan"id="customCheckLogin11"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin11">
                                    <span class="text-muted"><?php echo e(__('Plan')); ?></span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->team==1): ?>
                                        <input type="checkbox" name="team" id="customCheckLogin12" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="team"id="customCheckLogin12"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin12">
                                    <span class="text-muted"><?php echo e(__('Team')); ?></span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->stat==1): ?>
                                        <input type="checkbox" name="stat" id="customCheckLogin13" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="stat"id="customCheckLogin13"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin13">
                                    <span class="text-muted"><?php echo e(__('Stat')); ?></span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->contact==1): ?>
                                        <input type="checkbox" name="contact" id="customCheckLogin14" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="contact"id="customCheckLogin14"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin14">
                                    <span class="text-muted"><?php echo e(__('Contact')); ?></span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->faq==1): ?>
                                        <input type="checkbox" name="faq" id="customCheckLogin15" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="faq"id="customCheckLogin15"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin15">
                                    <span class="text-muted"><?php echo e(__('Faq')); ?></span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->upgrade_status==1): ?>
                                        <input type="checkbox" name="upgrade_status" id="customCheckLogin16" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="upgrade_status" id="customCheckLogin16"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin16">
                                    <span class="text-muted"><?php echo e(__('Upgrade status')); ?></span>     
                                    </label>
                                </div>  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->kyc_restriction==1): ?>
                                        <input type="checkbox" name="kyc_restriction" id="customCheckLogin117" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="kyc_restriction" id="customCheckLogin117"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin117">
                                    <span class="text-muted"><?php echo e(__('Kyc Restriction')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->p_inv==1): ?>
                                        <input type="checkbox" name="p_inv" id="customCheckLogin118" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="p_inv" id="customCheckLogin118"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin118">
                                    <span class="text-muted"><?php echo e(__('Project Investment')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->s_inv==1): ?>
                                        <input type="checkbox" name="s_inv" id="customCheckLogin119" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="s_inv" id="customCheckLogin119"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin119">
                                    <span class="text-muted"><?php echo e(__('Standard Investment')); ?></span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <?php if($set->savings==1): ?>
                                        <input type="checkbox" name="savings" id="customCheckLogin127" class="custom-control-input" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="savings" id="customCheckLogin127"  class="custom-control-input" value="1">
                                    <?php endif; ?>
                                    <label class="custom-control-label" for="customCheckLogin127">
                                    <span class="text-muted"><?php echo e(__('Savings')); ?></span>     
                                    </label>
                                </div>                                                                                                                                                                                                                                                   
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Short description')); ?></label>
                            <div class="col-lg-10">
                                <textarea type="text" name="site_desc" rows="4" class="form-control"><?php echo e($set->site_desc); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Address')); ?></label>
                            <div class="col-lg-10">
                                <textarea type="text" name="address" rows="4" class="form-control"><?php echo e($set->address); ?></textarea>
                            </div>
                        </div> 
                        <p>Settlement</p>
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Duration')); ?></label>
                            <div class="col-lg-10">
                                <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo e($set->duration); ?>" id="duration" class="form-control" placeholder="1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Period')); ?></label>
                            <div class="col-lg-10">
                                <select class="form-control select" name="period" id="period" data-fouc required>    
                                    <option value="Day" 
                                        <?php if($set->period=='Day'): ?>
                                        <?php echo e(__('selected')); ?>

                                        <?php endif; ?>
                                        ><?php echo e(__('Day')); ?>

                                    </option>                                         
                                    <option value="Week" 
                                        <?php if($set->period=='Week'): ?>
                                        <?php echo e(__('selected')); ?>

                                        <?php endif; ?>
                                        ><?php echo e(__('Week')); ?>

                                    </option>                                         
                                    <option value="Month" 
                                        <?php if($set->period=='Month'): ?>
                                        <?php echo e(__('selected')); ?>

                                        <?php endif; ?>
                                        ><?php echo e(__('Month')); ?>

                                    </option>                                         
                                    <option value="Year" 
                                        <?php if($set->period=='Year'): ?>
                                        <?php echo e(__('selected')); ?>

                                        <?php endif; ?>
                                        ><?php echo e(__('Year')); ?>

                                    </option>                                       
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Next Settlement')); ?></label>
                            <div class="col-lg-10">
                                <input type="text" readonly value='<?php echo e(date("Y/m/d", strtotime($set->next_settlement))); ?>' class="form-control">
                            </div>
                        </div>            
                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Send')); ?></button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0"><?php echo e(__('Savings')); ?></h3>
            </div>
            <div class="card-body form-block">
                <form action="<?php echo e(route('admin.savings.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>       
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><?php echo e(__('3 Months')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_3m" value="<?php echo e($set->s_3m); ?>" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><?php echo e(__('6 Months')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_6m" value="<?php echo e($set->s_6m); ?>" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><?php echo e(__('9 Months')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_9m" value="<?php echo e($set->s_9m); ?>" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><?php echo e(__('12 Months')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_12m" value="<?php echo e($set->s_12m); ?>" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><?php echo e(__('Minimum Amount')); ?> <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                                </span>
                                <input type="number" step="any"  name="s_min" value="<?php echo e($set->s_min); ?>" class="form-control" required>
                            </div>
                        </div>                                    
                    </div>  
                    <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Send')); ?></button>
                                </div>
                            </div>
                </form>
            </div>
        </div>    
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="mb-0"><?php echo e(__('Security')); ?></h3>
            </div>
            <div class="card-body form-block">
                <form action="<?php echo e(route('admin.account.update')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Username')); ?></label>
                            <div class="col-lg-10">
                                <input type="text" name="username" value="<?php echo e($val->username); ?>" class="form-control">
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"><?php echo e(__('Password')); ?></label>
                            <div class="col-lg-10">
                                <input type="password" name="password"  class="form-control" required>
                            </div>
                        </div>          
                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Send')); ?></button>
                                </div>
                            </div>
                </form>
            </div>
        </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sites/invest.adder.com.ua/core/resources/views/admin/settings/index.blade.php ENDPATH**/ ?>