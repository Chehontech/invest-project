@extends('layout')
@section('css')

@stop
@section('content')
<div class="bg-img-hero">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto">
            <h1>{{__('Terms & Conditions')}}</h1>
            <p>{{$set->title}}</p>
        </div>
    </div>
</div>
<div class="container space-2 space-bottom-lg-3">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="intro" class="space-bottom-1">
                <p>{!!$about->terms!!}</p>
            </div>
            <div id="stickyBlockEndPoint"></div>
        </div>
    </div>
</div>
@stop