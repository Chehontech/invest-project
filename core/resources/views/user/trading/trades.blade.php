@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row" id="earnings">
      <div class="col-lg-12">
        <div class="row">
          @if(count($activity)>0)
            @foreach($activity as $k=>$val)
              @php
                $date_diffx=date_diff(date_create($val->date), date_create($val->end_date));
                $claimed=App\Models\Claimed::whereprofit_id($val->id)->sum('amount');
                $bonus=$val->amount*$val->c_bonus/100;
                $c=$val->recurring;
                $goalx=$val->compound*$val->amount/100;
                $goal=$val->compound*$val->amount/100;
                $profitx=$goalx-$val->amount;
                $profit=$goalx-$val->amount;
                $pp=$val->compound*$val->amount/100;
              @endphp
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header checkx">
                    <div class="row align-items-center">
                      <div class="col-6">
                        <h4 class="mb-1 h4 text-dark font-weight-bolder">{{$val->trx}}</h4>
                      </div>
                      <div class="col-6 text-right">
                        @if($val->claim==1)
                          @if($val->status!=2)
                            <a href="#" data-toggle="modal" data-target="#history{{$val->id}}" class="btn btn-sm btn-neutral">
                            <i class="fad fa-sync"></i> {{__('History')}}</a>
                            <a href="#" data-toggle="modal" data-target="#claim{{$val->id}}" class="btn btn-sm btn-neutral">
                            <i class="fad fa-smile"></i> {{__('Claim Profit')}}</a>
                          @endif
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row align-items-center mb-3">
                      <div class="col-6">                 
                        <p class="text-sm text-gray mb-0 text-uppercase">{{$val->plan->name}} {{__('Plan')}} {{$val->duration}}(s)</p>
                        <p class="text-sm text-dark mb-0 text-uppercase">{{date("M j, Y", strtotime($val->date))}} - {{date("M j, Y", strtotime($val->end_date))}}</p>
                        <p class="text-sm text-dark mb-0 text-uppercase">{{__('Invested')}} {{$val->amount.$currency->name}}</p>
                        <p class="text-sm text-dark mb-2 text-uppercase">{{$val->plan->percent}}% {{__('Daily')}}</p>
                        <h4 class="mb-1 h2 text-primary font-weight-bolder">{{$val->profit.$currency->name}}</h4>
                        <h5 class="h4 mb-0 text-dark text-uppercase">{{__('Current Progress')}}</h5>
                      </div>
                      <div class="col-6 text-right">
                        <h4 class="mb-1 h2 text-darker font-weight-bolder">GOAL {{$goal.$currency->name}}</h4>
                        <p class="text-sm text-dark mb-0 text-uppercase">{{__('ROI')}} - {{$profit.$currency->name}}</p>
                        @if($val->plan->bonus!=null)<p class="text-sm text-dark mb-0 text-uppercase">{{__('Bonus')}} - {{$bonus.$currency->name}}</p>@endif
                      </div>
                    </div>
                    <div class="row align-items-center mb-3">
                      <div class="col">                           
                        <div class="progress mb-0">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{($val->profit*100)/$pp}}%;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center mb-1"> 
                      @if($val->status!=2)             
                        <div class="col-12">
                          @if($val->recurring==1)
                            @if($val->c_r==1)
                            <a href="{{url('/')}}/user/cancel-recurring/{{$val->trx}}" class="btn btn-sm btn-danger"><i class="fad fa-ban"></i> {{__('Cancel Recurring')}}</a>
                            @elseif($val->c_r==0)
                            <a href="{{url('/')}}/user/start-recurring/{{$val->trx}}" class="btn btn-sm btn-success"><i class="fad fa-check"></i> {{__('Start Recurring')}}</a>
                            @endif
                          @endif
                          <a href="#" data-toggle="modal" data-target="#share{{$val->id}}" title="Share trading activity" class="btn btn-sm btn-neutral"><i class="fad fa-share"></i> {{__('Share')}}</a>
                        </div>   
                      @endif
                    </div>
                    <div class="row align-items-center"> 
                      @if($val->status!=2)                 
                        <div class="col-12">
                          @if($val->claim==1)<span class="mb-1 text-xs text-danger text-uppercase er"> {{__('Claimed')}} - {{$val->claimed.$currency->name}}</span> | <span class="mb-1 text-xs text-success text-uppercase er">{{__('Unclaimed')}} - {{$profitx-$claimed.$currency->name}}</span>@endif
                        </div>
                      @endif                      
                      @if($val->status==2)                 
                        <div class="col-12">
                          <span class="badge badge-pill badge-primary"> {{__('Ended')}} </span>
                        </div>
                      @endif                  
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="claim{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content form-block form-modal">
                      <div class="modal-body p-0">
                        <div class="card border-0 mb-0">
                          <div class="card-header bg-transparent pb-5">
                            <div class="text-dark text-center mt-2 mb-3"><small>{{$val->name}}</small></div>
                            <div class="btn-wrapper text-center">
                            @if(($goal-$val->amount)<$val->real_profit)
                              <h1 class="text-uppercase ls-1 text-primary py-1 mb-0">Available {{$profit-$claimed.$currency->name}}</h1>
                              <p class="text-uppercase text-sm text-danger mb-0">Unavailable 0{{$currency->name}}</p>
                            @else
                              <h1 class="text-uppercase ls-1 text-primary py-1 mb-0">Available {{$val->real_profit-$claimed.$currency->name}}</h1>
                              <p class="text-uppercase text-sm text-danger mb-0">unavailable {{$profitx-$val->real_profit.$currency->name}}</p>
                            @endif
                            </div>
                          </div>
                          <div class="card-body">
                            <form role="form" action="{{route('claim_profit')}}" method="post">
                              @csrf    
                              <input type="hidden" name="activity" value="{{$val->id}}">   
                              <div class="form-group row">
                                <div class="col-lg-12">
                                  <div class="input-group">
                                      <span class="input-group-prepend">
                                          <span class="input-group-text text-uppercase">{{$currency->symbol}}</span>
                                      </span>
                                      @if(($goal-$val->amount)<$val->real_profit)
                                        <input type="number" step="any" class="form-control" name="amount" max="{{$profit-$claimed}}" required>
                                      @else
                                        <input type="number" step="any" class="form-control" name="amount" max="{{$val->real_profit-$claimed}}" required>
                                      @endif
                                      
                                  </div>
                                </div>
                              </div>                            
                              <div class="text-center">
                                <button type="submit" class="btn btn-success btn-block my-4">{{__('Withdraw')}}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="recurring{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content form-block form-modal">
                      <div class="modal-body p-0">
                        <div class="card border-0 mb-0">
                          <div class="card-header bg-transparent pb-5 checkx">
                            <h4 class="text-dark text-center mt-2 mb-3 text-uppercase er">{{__('Recurring Capital')}}</h4>
                            <p class="text-dark text-center text-sm">{{__('Once recurring payment is active, capital will be retained until end of investment.')}}</p>
                          </div>
                          <div class="card-body">
                            <h4 class="text-dark text-center mt-2 mb-3 text-uppercase er">{{__('Extend investment duration')}}</h4>
                            <p class="text-dark text-center text-sm">{{__('You will not have access to cancel this once saved.')}}</p>
                            <form role="form" action="{{route('start-recurring')}}" method="post">
                            @csrf 
                              <input type="hidden" name="plan" value="{{$val->id}}">   
                              <div class="form-group row">
                                <div class="col-lg-12">
                                  <div class="input-group">
                                      <span class="input-group-prepend">
                                          <span class="input-group-text text-uppercase">{{__('By')}}</span>
                                      </span>
                                      <input type="number" class="form-control" name="duration" value="1" min="1">
                                      <span class="input-group-append">
                                          <span class="input-group-text text-uppercase">{{$val->plan->period}}</span>
                                      </span>
                                  </div>
                                </div>
                              </div>                             
                              <div class="text-center">
                                <button type="submit" class="btn btn-success btn-block my-4">{{__('Save')}}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="share{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                    <div class="modal-content form-block form-modal">
                      <div class="modal-body p-0">
                        <div class="card border-0 mb-0">
                          <div class="card-header bg-transparent pb-1">
                            <div class="text-dark text-center mt-2 mb-3 text-uppercase er">{{__('Share Activity')}}</div>
                          </div>
                          <div class="card-body">
                            <form role="form" action="" method="post">
                              <div class="form-group mb-3">
                                <textarea type="text"rows="5" name="address" class="form-control" readonly>I have currently earned {{$val->profit.$currency->name}} with {{$set->site_name}}. Register with username, {{$user->username}} to start earning</textarea>
                              </div>
                              <div class="text-right">
                              <button type="button" class="btn-icon-clipboard" data-clipboard-text="{{$user->username}}" title="Copy">{{__('Copy')}}</button>
                              </div>
                              <hr>
                              <div class="text-center">
                                <a  href="https://facebook.com" class="btn btn-facebook btn-icon-only">
                                  <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                                </a>                          
                                <a href="https://twitter.com" class="btn btn-twitter btn-icon-only">
                                  <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                                </a>                          
                                <a href="https://api.whatsapp.com/" class="btn btn-whatsapp btn-icon-only">
                                  <span class="btn-inner--icon"><i class="fab fa-whatsapp"></i></span>
                                </a>                          
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>            
                <div class="modal fade" id="history{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                    <div class="modal-content form-block form-modal">
                      <div class="modal-body p-0">
                        <div class="card border-0 mb-0">
                          <div class="card-header bg-transparent pb-1 checkx">
                            <div class="text-dark text-center mt-2 mb-3 text-uppercase er">{{__('Profit Claiming Log')}}</div>
                          </div>
                          <div class="">
                            <div class="table-responsive">
                              <table class="table align-items-center table-flush">
                                <tbody>
                                  @php $history=App\Models\Claimed::whereprofit_id($val->id)->get(); @endphp
                                  @if(count($history)>0)
                                    @foreach($history as $k=>$hval)
                                      <tr>                     
                                        <td>{{$currency->symbol.$hval->amount}}</td>
                                        <td>#{{$hval->ref}}</td>
                                        <td>{{date("M j, Y", strtotime($hval->date))}}</td>
                                      </tr>
                                    @endforeach
                                  @else
                                    <tr>                     
                                      <td class="text-center">{{__('Nothing found')}}</td>
                                    </tr>
                                  @endif
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
          <div class="col-md-12 mb-5">
            <div class="text-center mt-8">
              <div class="btn-wrapper text-center">
                  <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                      <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                  </a>
              </div>
              <h3 class="text-dark">No Activity</h3>
              <p class="text-dark text-sm card-text">We couldn't find any investment activity to this account</p>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
@stop