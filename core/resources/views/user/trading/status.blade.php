@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div id="carouselExampleIndicators" class="carousel slide bg-transparent" data-ride="carousel">
                            <div class="carousel-inner bg-transparent">
                                @foreach($images as $k=>$val)
                                    <div class="carousel-item bg-transparent @if($val->id==$first->id)active @endif">
                                        <img class="d-block w-100" src="{{url('/')}}/asset/images/{{$val->image}}" alt="product image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>{{$val->title}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">{{__('Previous')}}</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">{{__('Next')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <span class="form-text text-sm text-dark">{{__('Activity')}}</span>
                                <span class="form-text text-xs text-muted">{{$updates->activity}}</span>
                            </div>
                            <div class="col-6"> 
                                <span class="form-text text-sm text-dark">{{__('Progress')}}</span> 
                                <span class="form-text text-xs text-muted">{{__('Stage')}} {{$updates->stage}}</span>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-12">
                                <span class="form-text text-sm text-dark">{{__('Reports')}}</span>
                                <span class="form-text text-sm text-muted">{{$updates->report}}</span>
                            </div>
                            <div class="col-12"> 
                                <span class="form-text text-sm text-dark">{{__('Description')}}</span> 
                                <span class="form-text text-sm text-muted">{{$updates->information}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop