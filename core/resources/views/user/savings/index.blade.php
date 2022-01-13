@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0 font-weight-bolder">{{__('Save Money')}}</h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="{{route('user.new.savings')}}" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> {{__('Apply now')}}</a> 
        </div>   
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          @if(count($save)>0)  
            @foreach($save as $k=>$val)
              <div class="col-md-4">
                <div class="card bg-white">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="h4 mb-1 font-weight-bolder">{{$val->ref_id}}</h5>
                      </div>                      
                    </div>
                    <div class="row">
                        <div class="col">
                          <p class="text-sm mb-0">{{__('Amount')}}: {{$currency->symbol.number_format($val->amount, 2, '.', '')}}</p>
                          <p class="text-sm mb-0">{{__('Purpose')}}: {{$val->purpose}}</p>
                          <p class="text-sm mb-0">{{__('Profit')}}: {{$currency->symbol.number_format($val->profit, 2, '.', '')}} @ {{$val->percent}}% for {{$val->duration}}</p>
                          <p class="text-sm mb-0">{{__('Created')}}: {{date("Y/m/d h:i:A", strtotime($val->created_at))}}</p>
                          <p  class="text-sm mb-1">{{__('Ends')}}: {{date("Y/m/d h:i:A", strtotime($val->end_date))}}</p>
                          @if($val->status==0)
                            <span class="badge badge-pill badge-info"><i class="fad fa-spinner"></i> {{__('Still Running')}}</span>
                          @elseif($val->status==1)
                            <span class="badge badge-pill badge-success"><i class="fad fa-check"></i> {{__('Paid Off')}}</span>                        
                          @elseif($val->status==2)
                            <span class="badge badge-pill badge-danger"><i class="fad fa-close"></i> {{__('Cancelled')}}</span>
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
              <div class="mb-3">
                <img src="{{url('/')}}/asset/images/empty.svg">
              </div>
              <h3 class="text-dark">No Savings</h3>
              <p class="text-dark text-sm card-text">We couldn't find any saving history to this account</p>
            </div>
          </div>
          @endif
        </div> 
        <div class="row">
          <div class="col-md-12">
          {{ $save->links('pagination::bootstrap-4') }}
          </div>
        </div>
      </div> 
    </div>
@stop
