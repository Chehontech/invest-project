@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-4">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder">{{__('Payout')}}</h6>
      </div>
      <div class="col-8 text-right">
        <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> {{__('Withdraw request')}}</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-header">
                <h3 class="mb-0 h3">{{__('Create Payout Request')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('withdraw.submit')}}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label class="col-form-label col-lg-12">{{__('Amount')}}</label>
                    <div class="col-lg-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">{{$currency->symbol}}</span>
                        </div>
                        <input type="number" step="any" name="amount" maxlength="10" id="amount" onkeyup="withdrawcharge()" class="form-control" required="">
                        <input type="hidden" value="{{$set->withdraw_charge}}" id="charge" name="charge">
                      </div>
                      <span class="form-text text-xs">Withdrawal charge is {{$set->withdraw_charge}}%</span>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <select class="form-control select" name="type" required>
                        <option value="">{{__('Type')}}</option>
                        <option value="1">{{__('Profit')}} - {{$currency->symbol.number_format($user->profit)}}</option>
                        <option value="2">{{__('Account balance')}} - {{$currency->symbol.number_format($user->balance)}}</option>
                        <option value="3">{{__('Referral earnings')}} - {{$currency->symbol.number_format($user->ref_bonus)}}</option>
                      </select>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <select class="form-control select" name="coin" data-dropdown-css-class="bg-primary" data-fouc required>
                      <option value="">{{__('Method')}}</option>
                      @foreach($method as $val)
                        <option value='{{$val->id}}'>{{$val->method}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="col-lg-12">
                    <textarea type="text" name="details" rows="4" class="form-control" placeholder="Details" required=""></textarea>
                    </div>
                  </div>                
                  <div class="text-right">
                    <button type="submit" class="btn btn-success btn-block">{{__('Request Payout')}} <span id="result"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>   
    <div class="row">
      <div class="col-md-12">
        <div class="row"> 
          @if(count($withdraw)>0)
            @foreach($withdraw as $k=>$val)
              <div class="col-md-4">
                <div class="card">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <!-- Title -->
                        <h4 class="mb-0 text-dark">{{$val->reference}}</h4>
                      </div>
                      <div class="col-4 text-right">
                        @if($val->status==0)
                          <a data-toggle="modal" data-target="#modal-forma{{$val->id}}" href="" class="btn btn-sm btn-success">{{__('Update')}}</a>
                        @endif
                      </div>
                      <div class="col">
                        <p class="text-sm mb-0">{{__('Amount')}}: {{number_format($val->amount).$currency->name}}</p>
                        <p class="text-sm mb-0">{{__('Method')}}: {{$val->wallet['method']}}</p>
                        <p class="text-sm mb-0">{{__('Details')}}: {{$val->details}}</p>
                        <p class="text-sm mb-0">{{__('Type')}}: @if($val->type==1) {{__('Trading profit')}} @elseif($val->type==2) {{__('Account balance')}} @elseif($val->type==3) {{__('Referral bonus')}} @endif</p>
                        <hr>
                        @if($set->ns==1)
                        <p class="text-sm mb-0">{{__('Next Settlement')}}: @if($val->status==0){{date("Y/m/d", strtotime($val->next_settlement))}} @else - @endif</p>
                        @endif
                        <p class="text-sm mb-0">{{__('Created')}}: {{date("Y/m/d h:i:A", strtotime($val->created_at))}}</p>
                        <p class="text-sm mb-2">{{__('Updated')}}: {{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</p>
                        <span class="badge badge-pill badge-primary">{{__('Charge')}}: {{$currency->symbol.number_format($val->charge, 2, '.', '')}}</span>
                        @if($val->status==1)
                          <span class="badge badge-pill badge-success"><i class="fad fa-check"></i> {{__('Paid out')}}</span>
                        @elseif($val->status==0)
                          <span class="badge badge-pill badge-danger"><i class="fad fa-spinner"></i>  {{__('Pending')}}</span>                        
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="modal fade" id="modal-forma{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                  <div class="modal-content form-block form-modal">
                    <div class="modal-header">
                      <h3 class="mb-0">{{__('Withdraw Request')}}</h3>
                    </div>
                    <div class="modal-body">
                      <form action="{{url('user/withdraw-update')}}" method="post">
                        @csrf
                        <div class="form-group row">
                          <label class="col-form-label col-lg-12">{{__('Method')}}</label>
                          <div class="col-lg-12">
                            <select class="form-control select" name="coin" data-fouc>
                            @foreach($method as $valx)
                              <option value='{{$valx->id}}'
                                @if($valx->id==$val->wallet->id)
                                {{__('selected')}}
                                @endif
                                >{{$valx->method}}</option>
                            @endforeach
                            </select>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label class="col-form-label col-lg-12">{{__('Details')}}</label>
                          <div class="col-lg-12">
                            <textarea name="details" class="form-control" rows="4">{{$val->details}}</textarea>
                            <input name="withdraw_id" type="hidden" value="{{$val->id}}">
                          </div>
                        </div>                
                        <div class="text-right">
                          <button type="submit" class="btn btn-success btn-block">{{__('Save')}}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div> 
            @endforeach
          @else
          <div class="col-md-12 mb-5">
            <div class="text-center mt-8">
              <div class="mb-3">
                <img src="{{url('/')}}/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Payout</h3>
              <p class="text-dark text-sm card-text">We couldn't find any payouts money request to this account</p>
            </div>
          </div>
          @endif
        </div>
        <div class="row">
          <div class="col-md-12">
          {{ $withdraw->links('pagination::bootstrap-4') }}
          </div>
        </div>
      </div>
    </div>
@stop