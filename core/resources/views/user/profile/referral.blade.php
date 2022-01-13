@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">  
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0 text-dark font-weight-bolder">{{__('Referral Earnings')}}</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead>
                <tr>
                  <th>{{__('S / N')}}</th>
                  <th>{{__('Amount')}}</th>
                  <th>{{__('From')}}</th>
                  <th>{{__('Type')}}</th>
                  <th>{{__('Plan')}}</th>
                  <th>{{__('Created')}}</th>
                </tr>
              </thead>
              <tbody>  
                @foreach($earning as $k=>$val)
                  <tr>
                    <td>{{++$k}}.</td>
                    <td>{{$currency->symbol.number_format($val->amount)}}</td>
                    <td>@if($val->ref_id!=null){{$val->shared['first_name']}} {{$val->shared['last_name']}} @else [Account Deleted]@endif</td>
                    <td>@if($val->type==0) Standard Investment @else Project Investment @endif</td>
                    <td>{{$val->plan['name']}}</td>
                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        @if($set->referral==1)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title mb-0 font-weight-bolder">{{__('Referral')}}</h4>
                <span class="mb-0 text-dark">{{$currency->symbol.number_format($user->ref_bonus)}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title mb-3">{{__('Referral link')}}</h3>
            <p class="card-text text-sm">{{__('Automatically Top up your Balance by Sharing your Referral Link, Earn a percentage of whatever Plan your Referred user Buys.')}}</p>
            <span class="form-text text-sm">{{$refLink}}</span>
            <button type="button" class="btn-icon-clipboard" data-clipboard-text="{{$refLink}}" title="Copy">{{__('Copy')}}</button>
          </div>
        </div>
        @endif
          <div class="card">
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Referrals</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <tbody>
                  @foreach($referral as $k=>$val)
                    <tr>
                      <td class="table-user">
                        <img src="{{url('/')}}/asset/profile/{{$val['image']}}" class="avatar rounded-circle mr-3">
                      </td>                      
                      <td>
                        {{$val->first_name}} {{$val->last_name}}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
      </div> 
    </div>
@stop