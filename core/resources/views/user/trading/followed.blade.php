@extends('userlayout')

@section('content')
<div class="container-fluid mt--6 followed-plans">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder">{{__('Followed Plans')}}</h6>
      </div>
    </div>
    <div class="row align-items-center"> 
      @if(count($followed)>0) 
        @foreach($followed as $val)
          <div class="col-lg-4">
            <div class="card">
            <a href="{{route('view.sandplan', ['id' => $val->plan['slug']])}}">
              <img class="card-img-top" src="{{url('/')}}/asset/images/{{$val->plan['image']}}" alt="Image placeholder">
            </a>
              <div class="card-body">
                <span class="text-sm text-muted mb-0">{{$val->plan['original']-$val->plan['units']}} / {{$val->plan['original']}} Units Sold</span>
                <div class="progress progress mb-3">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($val->plan['original']-$val->plan['units'])*100)/$val->plan['original']}}%;"></div>
                </div>
                <a href="{{route('view.sandplan', ['id' => $val->plan['slug']])}}">
                <h5 class="h2 card-title mb-0">{{$val->plan['name']}}</h5>
                </a>
                <small class="text-muted">{{$val->plan['location']}} - {{$val->plan['duration'].' '.$val->plan['period']}}</small>
                <p class="text-sm text-dark mb-0"><span class="text-primary h3 font-weight-bolder">{{$val->plan['interest']}}%</span> Returns in {{$val->plan['duration'].' '.$val->plan['period']}}</p>
                <p class="text-sm text-dark mb-0"><span class="text-success h4 font-weight-bolder">{{$currency->symbol.$val->plan['price']}}</span> per Unit</p>
                <p class="text-sm text-dark mb-0">@if($val->plan['ref_percent']!=null){{$val->plan['ref_percent']}}% @else {{__('No')}} @endif{{__('Referral Bonus')}}</p>
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                        <span class="form-text text-xs text-muted">{{date("Y/m/d h:i:A", strtotime($val->plan['start_date']))}}</span>
                    </div>
                    <div class="col-6"> 
                        <span class="form-text text-sm text-dark">{{__('Maturity Date')}}</span>
                        <span class="form-text text-sm text-muted">{{date("Y/m/d h:i:A", strtotime($val->plan['expiring_date']))}}</span> 
                    </div>
                </div>    
                  @php
                    $check=App\Models\Sandfollowed::whereplan_id($val->plan['id'])->whereuser_id($user->id)->get();     
                    $ss=App\Models\Sandfollowed::whereplan_id($val->plan['id'])->whereuser_id($user->id)->first();     
                  @endphp 
                  <div class="row justify-content-between align-items-center">
                    <div class="col-6 text-left"> 
                      @if(count($check)>0)
                        <a href="{{route('unfollow', ['id' => $val->plan['id']])}}" class="text-uppercase text-xs">unfollow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
                      @endif
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
            <h3 class="text-dark">No Plans</h3>
            <p class="text-dark text-sm card-text">{{__('You have not followed any plan')}}</p>
          </div>
        </div>
        @endif      
    </div>
  </div>
</div>
@stop