@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder">{{__('Investment Plans')}}</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card bg-primary castro-secret">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 @if(route('user.sandplans')==url()->current()) active @endif" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fal fa-smile-wink"></i> {{__('Active')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 @if(route('user.sandplanssoon')==url()->current()) active @endif" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fal fa-lock-alt"></i> {{__('Coming Soon')}}</a>
                    </li>                 
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 @if(route('user.sandplansclosed')==url()->current()) active @endif" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fal fa-frown-open"></i> {{__('Matured')}}</a>
                    </li>   
                </ul>
            </div>
        </div>
      </div>          
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade @if(route('user.sandplans')==url()->current())show active @endif" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
            <div class="row">
                @if(count($open)>0)
                    @foreach($open as $val)
                        <div class="col-lg-4">
                        <div class="card">
                            <!-- Card image -->
                            <a class="card-link-img-top" href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                <img class="card-img-top" src="{{url('/')}}/asset/images/{{$val->image}}" alt="Image placeholder">
                            </a>
                            <!-- Card body -->
                            <div class="card-body">
                                <span class="text-sm text-muted mb-0">{{$val->original-$val->units}} / {{$val->original}} Units Sold</span>
                                <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($val->original-$val->units)*100)/$val->original}}%;"></div>
                                </div>
                                <a href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                    <h5 class="h2 card-title mb-0 font-weight-bolder">{{$val->name}}</h5>
                                </a>
                                <small class="text-muted">{{$val->location}}</small>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="text-sm text-dark mb-0"><span class="text-primary h3 font-weight-bolder">{{$val->interest}}%</span> Returns in {{$val->duration.' '.$val->period}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-sm text-dark mb-0"><span class="text-success h3 font-weight-bolder">{{$currency->symbol.$val->price}}</span> Per Unit</p>
                                    </div>
                                </div>
                                <p class="text-sm text-dark mb-0">@if($val->ref_percent!=null){{$val->ref_percent}}% @else {{__('No')}} @endif{{__('Referral Bonus')}}</p> 
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6">
                                        <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                                        <span class="form-text text-xs text-muted">{{date("Y/m/d h:i:A", strtotime($val->start_date))}}</span>
                                    </div>
                                    <div class="col-6"> 
                                        <span class="form-text text-sm text-dark">{{__('Maturity Date')}}</span>
                                        <span class="form-text text-sm text-muted">{{date("Y/m/d h:i:A", strtotime($val->expiring_date))}}</span> 
                                    </div>
                                </div>    
                                @php
                                    $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                    $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                @endphp         
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6 text-left"> 
                                        @if($check>0)
                                        <a href="{{route('unfollow', ['id' => $val->slug])}}" class="text-uppercase text-xs">unfollow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
                                        @else
                                        <a href="{{route('follow', ['id' => $val->slug])}}" class="text-uppercase text-xs" title="follow plan">Follow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
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
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>      
        <div class="tab-pane fade @if(route('user.sandplanssoon')==url()->current())show active @endif" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
            <div class="row">
                @if(count($coming)>0)
                    @foreach($coming as $val)
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Card image -->
                                <a href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                    <img class="card-img-top" src="{{url('/')}}/asset/images/{{$val->image}}" alt="Image placeholder">
                                </a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <span class="text-sm text-muted mb-0">{{$val->original-$val->units}} / {{$val->original}} Units Sold</span>
                                    <div class="progress progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($val->original-$val->units)*100)/$val->original}}%;"></div>
                                    </div>
                                    <a href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                        <h5 class="h2 card-title mb-0 font-weight-bolder">{{$val->name}}</h5>
                                    </a>
                                    <small class="text-muted">{{$val->location}}</small>
                                    <p class="text-sm text-dark mb-0"><span class="text-primary h3 font-weight-bolder">{{$val->interest}}%</span> Returns in {{$val->duration.' '.$val->period}}</p>
                                    <p class="text-sm text-dark mb-0"><span class="text-success h4 font-weight-bolder">{{$currency->symbol.$val->price}}</span> per Unit</p>
                                    <p class="text-sm text-dark mb-0">@if($val->ref_percent!=null){{$val->ref_percent}}% @else {{__('No')}} @endif{{__('Referral Bonus')}}</p>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6">
                                            <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                                            <span class="form-text text-xs text-muted">{{date("Y/m/d h:i:A", strtotime($val->start_date))}}</span>
                                        </div>
                                        <div class="col-6"> 
                                            <span class="form-text text-sm text-dark">{{__('Maturity Date')}}</span>
                                            <span class="form-text text-sm text-muted">{{date("Y/m/d h:i:A", strtotime($val->expiring_date))}}</span> 
                                        </div>
                                    </div>  
                                    @php
                                        $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                        $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                    @endphp         
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6 text-left"> 
                                            @if($check>0)
                                            <a href="{{route('unfollow', ['id' => $val->slug])}}" class="text-uppercase text-xs">unfollow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
                                            @else
                                            <a href="{{route('follow', ['id' => $val->slug])}}" class="text-uppercase text-xs" title="follow plan">follow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
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
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade @if(route('user.sandplansclosed')==url()->current())show active @endif" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row">
                @if(count($closed)>0)
                    @foreach($closed as $val)
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Card image -->
                                <a href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                    <img class="card-img-top" src="{{url('/')}}/asset/images/{{$val->image}}" alt="Image placeholder">
                                </a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <span class="text-sm text-muted mb-0">{{$val->original-$val->units}} / {{$val->original}} Units Sold</span>
                                    <div class="progress progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($val->original-$val->units)*100)/$val->original}}%;"></div>
                                    </div>
                                    <a href="{{route('view.sandplan', ['id' => $val->slug])}}">
                                        <h5 class="h2 card-title mb-0 font-weight-bolder">{{$val->name}}</h5>
                                    </a>
                                    <small class="text-muted">{{$val->location}}</small>
                                    <p class="text-sm text-dark mb-0"><span class="text-primary h3 font-weight-bolder">{{$val->interest}}%</span> Returns in {{$val->duration.' '.$val->period}}</p>
                                    <p class="text-sm text-dark mb-0"><span class="text-success h4 font-weight-bolder">{{$currency->symbol.$val->price}}</span> per Unit</p>
                                    <p class="text-sm text-dark mb-0">@if($val->ref_percent!=null){{$val->ref_percent}}% @else {{__('No')}} @endif{{__('Referral Bonus')}}</p>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6">
                                            <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                                            <span class="form-text text-xs text-muted">{{date("Y/m/d h:i:A", strtotime($val->start_date))}}</span>
                                        </div>
                                        <div class="col-6"> 
                                            <span class="form-text text-sm text-dark">{{__('Maturity Date')}}</span>
                                            <span class="form-text text-sm text-muted">{{date("Y/m/d h:i:A", strtotime($val->expiring_date))}}</span> 
                                        </div>
                                    </div>     
                                    @php
                                        $check=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->count();     
                                        $ss=App\Models\Sandfollowed::whereplan_id($val->id)->whereuser_id($user->id)->first();     
                                    @endphp         
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6 text-left"> 
                                            @if($check>0)
                                            <a href="{{route('unfollow', ['id' => $val->slug])}}" class="text-uppercase text-xs">unfollow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
                                            @else
                                            <a href="{{route('follow', ['id' => $val->slug])}}" class="text-uppercase text-xs" title="follow plan">Follow<i class="fad fa-angle-right fa-sm ml-1"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    @endforeach
                @else
                    <div class="col-md-12 mb-5">
                        <div class="text-center mt-8">
                            <div class="btn-wrapper text-center">
                                <a href="javascript:void;" class="btn btn-neutral btn-icon mb-3">
                                    <span class="btn-inner--icon"><i class="fad fa-sad-tear fa-4x"></i></span>
                                </a>
                            </div>
                            <h3 class="text-dark">No Project found</h3>
                            <p class="text-dark text-sm card-text">We couldn't find any investment plans</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
  </div>
</div>
@stop