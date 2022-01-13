@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-transparent">
            <h3 class="mb-0">{{__('Log')}}</h3>
          </div>
          <div class="card-body">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
              <div class="timeline-block">
                  <span class="timeline-step badge-primary">
                      <i class="ni ni-like-2"></i>
                  </span>
                  <div class="timeline-content">
                      <small class="">{{date("Y/m/d h:i:A", strtotime($ticket->created_at))}}</small>
                      <h5 class="mt-3 mb-0">{{$ticket->message}}</h5>
                      <p class="text-sm mt-1 mb-0">{{__('User')}}</p>
                      </br>
                      @if($ticket->name != null)
                      <div class="container mt--12 pb-5 mb-0">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <img class="card-img-top" src="{{url('/')}}/asset/images/{{$ticket->image}}" alt="Image placeholder">
                                    <div class="card-body">
                                        <span class="text-sm text-muted mb-0">{{$ticket->original-$ticket->units}} / {{$ticket->original}}</span>
                                        <div class="progress progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($ticket->original-$ticket->units)*100)/$ticket->original}}%;"></div>
                                        </div>
                                        <h5 class="h2 card-title mb-0">{{$ticket->name}}</h5>
                                        <small class="text-muted text-uppercase">{{$ticket->location}} - {{$ticket->duration.' '.$ticket->period}}(s)</small>
                                        <div class="row justify-content-between align-items-center mb-3">
                                            <div class="col-6">
                                                <span class="form-text text-sm text-dark">{{__('Price')}}</span>
                                                <span class="form-text text-xs text-muted">{{$currency->symbol.$ticket->price}} @ 1 Unit</span>
                                            </div>
                                            <div class="col-6"> 
                                                <span class="form-text text-sm text-dark">{{__('Profit Margin')}}</span>
                                                <h4 class="mb-1 h1 text-primary">{{$ticket->interest}}%</h4> 
                                            </div>
                                            <div class="col-6">
                                                <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                                                <span class="form-text text-xs text-muted">{{date("Y/m/d h:i:A", strtotime($ticket->start_date))}}</span>
                                            </div>
                                            <div class="col-6"> 
                                                <span class="form-text text-sm text-dark">{{__('Closing Date')}}</span>
                                                <span class="form-text text-sm text-muted">{{date("Y/m/d h:i:A", strtotime($ticket->expiring_date))}}</span> 
                                            </div>
                                        </div>             
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                        <h5 class="h3 mb-0">{{__('Description')}}</h5>
                                        </div>
                                        <div class="col-4 text-right">
                                        @if($ticket->units>0)
                                            @if($ticket->start_date <= Carbon\Carbon::now()->isoFormat('M/D/Y') && $ticket->expiring_date > Carbon\Carbon::now()->isoFormat('M/D/Y'))
                                                <a href="{{route('user.plans')}}"  class="btn btn-sm btn-success">{{__('Purchase Units')}}</a>
                                            @endif
                                        @endif
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text text-sm mb-4">{!!$ticket->description!!}</p>
                                        <div class="row">
                                            <div class="col-4">
                                            @php
                                            $category=App\Models\Sandplancategory::whereid($ticket->cat_id)->first();
                                            @endphp
                                                <span class="form-text text-sm text-muted">{{__('Category')}}: {{$category->name}}</span>
                                            </div>
                                            <div class="col-4"> 
                                                <span class="form-text text-sm text-muted">{{__('Insurance')}}: @if($ticket->insurance==1) {{__('Yes')}} @else {{__('No')}} @endif</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <a href="{{ url()->previous()}}"><i class="fad fa-long-arrow-alt-left"></i> Back</a>
                        </div>
                      </div>
                      @endif
                  </div>
              </div>
            @foreach($reply as $df)
              @if($df->status==1)
                <div class="timeline-block">
                  <span class="timeline-step badge-primary">
                    <i class="ni ni-like-2"></i>
                  </span>
                  <div class="timeline-content">
                    <small class="">{{date("Y/m/d h:i:A", strtotime($df->created_at))}}</small>
                    <h5 class="mt-3 mb-0">{{$df->reply}}</h5>
                    <p class="text-sm mt-1 mb-0">{{__('User')}}</p>
                  </div>
                </div>
                @elseif($df->status==0)
                  <div class="timeline-block">
                      <span class="timeline-step badge-primary">
                      <i class="ni ni-like-2"></i>
                      </span>
                      <div class="timeline-content">
                      <small class="">{{date("Y/m/d h:i:A", strtotime($df->created_at))}}</small>
                      <h5 class="mt-3 mb-0">{{$df->reply}}</h5>
                      <p class="text-sm mt-1 mb-0">{{__('Admin')}}</p>
                      </div>
                  </div>
                @endif
            @endforeach
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0">{{__('Reply')}}</h3>
          </div>

          <div class="card-body">
            <form action="{{url('user/reply-ticket')}}" method="post">
            @csrf
              <div class="form-group row">
                  <div class="col-lg-12">
                  <textarea name="details" class="form-control no-border" rows="4" required></textarea>
                  <input name="id" value="{{$ticket->ticket_id}}" type="hidden">
                  </div>
              </div>               
              <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm">{{__('Send')}}<i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@stop