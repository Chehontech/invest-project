@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-lg-3">
          <div class="media align-items-center user-box">
            <span class="avatar avatar-md rounded-circle">
              <img alt="Image placeholder" src="{{url('/')}}/asset/profile/{{$cast}}">
            </span>
            <div class="media-body ml-2">
              <h3 class="mb-0 text-sm text-dark font-weight-bolder">{{$user->first_name}} {{$user->last_name}}</h3>
              <span class="mb-1 text-xs text-dark">Hi, {{$user->username}} welcome to your dashboard</span><br>
            </div>
          </div>
      </div>      
    </div>
    <div class="row summary-page-user">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-6">
                    <h4 class="card-title mb-0 font-weight-bolder">{{__('Balance')}}</h4>
                    <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->balance)}}</span>
                  </div>
                  <div class="col-6 text-right">
                    <a href="{{route('user.fund')}}" class="btn btn-sm btn-neutral">{{__('Add Funds')}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h4 class="card-title mb-0 font-weight-bolder">{{__('Available Profit')}}</h4>
                    <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->profit)}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h4 class="card-title mb-0 font-weight-bolder">{{__('Total Profit')}}</h4>
                    <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->total_profit)}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h4 class="card-title mb-0 font-weight-bolder">{{__('Investment Bonus')}}</h4>
                    <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->trade_bonus)}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row agit-blocks">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-6 mb-3">
            <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover">
              <div class="row align-items-center mt-3">
                <div class="col-8 col-md-8">
                  <div class="py-3 pl-4">
                  <h3 class="font-weight-bolder">Invest in Companies</h3>
                  <p class="text-sm">Invest in startups and existing companies buy purchasing units.</p>
                  <span class="font-size-1 text-primary text-sm link"><a href="{{route('user.sandplans')}}">Buy units </a><i class="fad fa-angle-right fa-sm ml-1"></i></span>
                  </div>
                </div>
                <div class="col-4 col-md-4 px-0">
                  <img class="img-fluid" src="{{url('/')}}/asset/images/4760012.png" alt="SVG">
                </div>
              </div>
            </div>
          </div>        
          <div class="col-lg-6 mb-3">
            <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover">
              <div class="row align-items-center mt-3">
                <div class="col-8 col-md-8">
                  <div class="py-3 pl-4">
                  <h3 class="font-weight-bolder">Standard Investment</h3>
                  <p class="text-sm">With our low risk plans, easy access to profit, recurring capital.</p>
                  <span class="font-size-1 text-primary text-sm link"><a href="{{route('user.plans')}}">Investment Plans </a><i class="fad fa-angle-right fa-sm ml-1"></i></span>
                  </div>
                </div>
                <div class="col-4 col-md-4 px-0">
                  <img class="img-fluid" src="{{url('/')}}/asset/images/3569284.png" alt="SVG">
                </div>
              </div>
            </div>
          </div>        
          <div class="col-lg-6 mb-3">
            <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover">
              <div class="row align-items-center mt-3">
                <div class="col-8 col-md-8">
                  <div class="py-3 pl-4">
                  <h3 class="font-weight-bolder">Save & Earn</h3>
                  <p class="text-sm">Let's run the race with you. Save and earn competitive percentage.</p>
                  <span class="font-size-1 text-primary text-sm link"><a href="{{route('user.savings')}}">Apply now </a><i class="fad fa-angle-right fa-sm ml-1"></i></span>
                  </div>
                </div>
                <div class="col-4 col-md-4 px-0">
                  <img class="img-fluid" src="{{url('/')}}/asset/images/4436053.png" alt="SVG">
                </div>
              </div>
            </div>
          </div> 
          @if($set->referral==1)       
          <div class="col-lg-6 mb-3">
            <div class="card card-bg-light h-100 shadow-none overflow-hidden transition-3d-hover">
              <div class="row align-items-center mt-3">
                <div class="col-8 col-md-8">
                  <div class="py-3 pl-4">
                  <h3 class="font-weight-bolder">Affiliate System</h3>
                  <p class="text-sm">Earn money by referring family and friends to invest on {{$set->site_name}}.</p>
                  <span class="font-size-1 text-primary text-sm link"><a href="{{route('user.referral')}}">Refer family & friends </a><i class="fad fa-angle-right fa-sm ml-1"></i></span>
                  </div>
                </div>
                <div class="col-4 col-md-4 px-0">
                  <img class="img-fluid" src="{{url('/')}}/asset/images/2992779.png" alt="SVG">
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    <div class="col-lg-4">
      @if($user->fa_status==0)
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          Two Factor Authentication on your account is currently disabled, click <a href="{{route('user.2fa')}}">here</a> to set it up.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      @if($set->ns==1)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h3 class="mb-0 h4 font-weight-bolder">{{__('Next Settlement')}}</h3>
                <ul class="list list-unstyled mb-0">
                  <li><span class="text-default text-sm">{{date("Y/m/d", strtotime($set->next_settlement))}}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endif
      @if($set->upgrade_status==1)
        @if($user->upgrade==0)
          <div class="card bg-primary castro-secret">
            <!-- Card header -->
            <div class="card-header">
              <h4 class="mb-0 text-white font-weight-bolder">Start Receiving Bonuses</h4>
            </div>
            <div class="card-body">
              <p class="card-text text-sm mb-4 text-white">You can now receive certain bonus of total profit after investment ends.</p>
              <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn btn-block btn-white"><i class="fad fa-arrow-up"></i> Upgrade Account</a>
              <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-body">
                      <div class="text-left mt-2 mb-3 text-dark text-sm">Don't let your money sit there, upgrade your account & start receiving bonuses</div> 
                      <div class="text-left mt-2 mb-3 text-dark text-sm">Upgrade fee costs {{$currency->symbol.$set->upgrade_fee}}</div> 
                      <div class="text-left">
                        <a href="{{route('user.upgrade')}}" class="btn btn-success btn-block">Upgrade</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        @endif 
      @endif 
    </div>  
  </div>
@stop