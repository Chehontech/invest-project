@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">{{__('Congifure website')}}</h3>
            </div>
            <div class="card-body form-block">
                <form action="{{route('admin.settings.update')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Website name')}}</label>
                        <div class="col-lg-10">
                            <input type="text" name="site_name" maxlength="200" value="{{$set->site_name}}" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Company email')}}</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" value="{{$set->email}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Mobile')}}</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="mobile" max-length="14" value="{{$set->mobile}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Website title')}}</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" max-length="200" value="{{$set->title}}" class="form-control">
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Livechat code')}}</label>
                        <div class="col-lg-10">
                            <textarea type="text" name="livechat" class="form-control">{{$set->livechat}}</textarea>
                        </div>
                    </div>                     
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Welcome Message')}}</label>
                        <div class="col-lg-10">
                            <textarea type="text" rows="5" name="welcome_message" class="form-control">{{$set->welcome_message}}</textarea>
                        </div>
                    </div>                    
                    <div class="form-group row">
                                            
                        <label class="col-form-label col-lg-2">{{__('Balance on signup')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">{{$currency->symbol}}</span>
                                </span>
                                <input type="number" name="bal" step="any" max-length="10" value="{{convertFloat($set->balance_reg)}}" class="form-control">
                            </div>
                        </div>    
                        <label class="col-form-label col-lg-2">{{__('Upgrade_fee for bonus')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-append">
                                    <span class="input-group-text">{{$currency->symbol}}</span>
                                </span>
                                <input type="number" name="upgrade_fee" max-length="10" value="{{$set->upgrade_fee}}" class="form-control">
                            </div>
                        </div>                                                                                 
                        <label class="col-form-label col-lg-2">{{__('Withdraw charge')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" name="withdraw_charge" max-length="10" value="{{$set->withdraw_charge}}" class="form-control">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                              
                        <label class="col-form-label col-lg-2">{{__('Transfer charge')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="number" name="transfer_charge" max-length="10" value="{{$set->transfer_charge}}" class="form-control">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                                      
                        </div>           
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Status')}} <span class="text-danger">*</span></label>
                            <div class="col-lg-5">
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->kyc==1)
                                        <input type="checkbox" name="kyc" id="customCheckLogin1" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="kyc" id="customCheckLogin1"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin1">
                                    <span class="text-muted">{{__('Kyc')}}</span>     
                                    </label>
                                </div>                        
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->email_verification==1)
                                        <input type="checkbox" name="email_activation" id="customCheckLogin2" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="email_activation"id="customCheckLogin2"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin2">
                                    <span class="text-muted">{{__('Email verification')}}</span>     
                                    </label>
                                </div>                       
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->email_notify==1)
                                        <input type="checkbox" name="email_notify" id="customCheckLogin3" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="email_notify"id="customCheckLogin3"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin3">
                                    <span class="text-muted">{{__('Email notify')}}</span>     
                                    </label>
                                </div>                        
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->registration==1)
                                        <input type="checkbox" name="registration" id="customCheckLogin4" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="registration"id="customCheckLogin4"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin4">
                                    <span class="text-muted">{{__('Registration')}}</span>     
                                    </label>
                                </div> 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->referral==1)
                                        <input type="checkbox" name="referral" id="customCheckLogin5" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="referral"id="customCheckLogin5"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin5">
                                    <span class="text-muted">{{__('Referral')}}</span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->recaptcha==1)
                                        <input type="checkbox" name="recaptcha" id="customCheckLogin6" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="recaptcha"id="customCheckLogin6"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin6">
                                    <span class="text-muted">{{__('Recaptcha')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->language==1)
                                        <input type="checkbox" name="language" id="customCheckLogin7" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="language"id="customCheckLogin7"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin7">
                                    <span class="text-muted">{{__('Language')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->blog==1)
                                        <input type="checkbox" name="blog" id="customCheckLogin8" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="blog"id="customCheckLogin8"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin8">
                                    <span class="text-muted">{{__('Blog')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->transfer==1)
                                        <input type="checkbox" name="transfer" id="customCheckLogin17" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="transfer" id="customCheckLogin17"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin17">
                                    <span class="text-muted">{{__('Transfer')}}</span>     
                                    </label>
                                </div>                               
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->ns==1)
                                        <input type="checkbox" name="ns" id="customCheckLoginx17" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="ns" id="customCheckLoginx17"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLoginx17">
                                    <span class="text-muted">{{__('Next Settlement')}}</span>     
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-5">      
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->services==1)
                                        <input type="checkbox" name="services" id="customCheckLogin9" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="services"id="customCheckLogin9"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin9">
                                    <span class="text-muted">{{__('Services')}}</span>     
                                    </label>
                                </div>  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->review==1)
                                        <input type="checkbox" name="review" id="customCheckLogin10" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="review"id="customCheckLogin10"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin10">
                                    <span class="text-muted">{{__('Review')}}</span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->plan==1)
                                        <input type="checkbox" name="plan" id="customCheckLogin11" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="plan"id="customCheckLogin11"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin11">
                                    <span class="text-muted">{{__('Plan')}}</span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->team==1)
                                        <input type="checkbox" name="team" id="customCheckLogin12" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="team"id="customCheckLogin12"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin12">
                                    <span class="text-muted">{{__('Team')}}</span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->stat==1)
                                        <input type="checkbox" name="stat" id="customCheckLogin13" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="stat"id="customCheckLogin13"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin13">
                                    <span class="text-muted">{{__('Stat')}}</span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->contact==1)
                                        <input type="checkbox" name="contact" id="customCheckLogin14" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="contact"id="customCheckLogin14"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin14">
                                    <span class="text-muted">{{__('Contact')}}</span>     
                                    </label>
                                </div>                                 
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->faq==1)
                                        <input type="checkbox" name="faq" id="customCheckLogin15" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="faq"id="customCheckLogin15"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin15">
                                    <span class="text-muted">{{__('Faq')}}</span>     
                                    </label>
                                </div>                                  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->upgrade_status==1)
                                        <input type="checkbox" name="upgrade_status" id="customCheckLogin16" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="upgrade_status" id="customCheckLogin16"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin16">
                                    <span class="text-muted">{{__('Upgrade status')}}</span>     
                                    </label>
                                </div>  
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->kyc_restriction==1)
                                        <input type="checkbox" name="kyc_restriction" id="customCheckLogin117" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="kyc_restriction" id="customCheckLogin117"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin117">
                                    <span class="text-muted">{{__('Kyc Restriction')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->p_inv==1)
                                        <input type="checkbox" name="p_inv" id="customCheckLogin118" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="p_inv" id="customCheckLogin118"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin118">
                                    <span class="text-muted">{{__('Project Investment')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->s_inv==1)
                                        <input type="checkbox" name="s_inv" id="customCheckLogin119" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="s_inv" id="customCheckLogin119"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin119">
                                    <span class="text-muted">{{__('Standard Investment')}}</span>     
                                    </label>
                                </div>                                
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    @if($set->savings==1)
                                        <input type="checkbox" name="savings" id="customCheckLogin127" class="custom-control-input" value="1" checked>
                                    @else
                                        <input type="checkbox" name="savings" id="customCheckLogin127"  class="custom-control-input" value="1">
                                    @endif
                                    <label class="custom-control-label" for="customCheckLogin127">
                                    <span class="text-muted">{{__('Savings')}}</span>     
                                    </label>
                                </div>                                                                                                                                                                                                                                                   
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Short description')}}</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="site_desc" rows="4" class="form-control">{{$set->site_desc}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Address')}}</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="address" rows="4" class="form-control">{{$set->address}}</textarea>
                            </div>
                        </div> 
                        <p>Settlement</p>
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Duration')}}</label>
                            <div class="col-lg-10">
                                <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="{{$set->duration}}" id="duration" class="form-control" placeholder="1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Period')}}</label>
                            <div class="col-lg-10">
                                <select class="form-control select" name="period" id="period" data-fouc required>    
                                    <option value="Day" 
                                        @if($set->period=='Day')
                                        {{__('selected')}}
                                        @endif
                                        >{{__('Day')}}
                                    </option>                                         
                                    <option value="Week" 
                                        @if($set->period=='Week')
                                        {{__('selected')}}
                                        @endif
                                        >{{__('Week')}}
                                    </option>                                         
                                    <option value="Month" 
                                        @if($set->period=='Month')
                                        {{__('selected')}}
                                        @endif
                                        >{{__('Month')}}
                                    </option>                                         
                                    <option value="Year" 
                                        @if($set->period=='Year')
                                        {{__('selected')}}
                                        @endif
                                        >{{__('Year')}}
                                    </option>                                       
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Next Settlement')}}</label>
                            <div class="col-lg-10">
                                <input type="text" readonly value='{{date("Y/m/d", strtotime($set->next_settlement))}}' class="form-control">
                            </div>
                        </div>            
                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('Send')}}</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">{{__('Savings')}}</h3>
            </div>
            <div class="card-body form-block">
                <form action="{{route('admin.savings.update')}}" method="post">
                    @csrf       
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{__('3 Months')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_3m" value="{{$set->s_3m}}" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{__('6 Months')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_6m" value="{{$set->s_6m}}" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{__('9 Months')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_9m" value="{{$set->s_9m}}" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{__('12 Months')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input type="number" step="any"  name="s_12m" value="{{$set->s_12m}}" class="form-control" required>
                                <span class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </span>
                            </div>
                        </div>                                    
                    </div>                                 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{__('Minimum Amount')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">{{$currency->symbol}}</span>
                                </span>
                                <input type="number" step="any"  name="s_min" value="{{$set->s_min}}" class="form-control" required>
                            </div>
                        </div>                                    
                    </div>  
                    <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('Send')}}</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>    
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="mb-0">{{__('Security')}}</h3>
            </div>
            <div class="card-body form-block">
                <form action="{{route('admin.account.update')}}" method="post">
                    @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Username')}}</label>
                            <div class="col-lg-10">
                                <input type="text" name="username" value="{{$val->username}}" class="form-control">
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Password')}}</label>
                            <div class="col-lg-10">
                                <input type="password" name="password"  class="form-control" required>
                            </div>
                        </div>          
                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('Send')}}</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>    
@stop