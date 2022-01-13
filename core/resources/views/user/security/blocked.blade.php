@extends('loginlayout')

@section('content')
<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">
                  {{__('Account has been suspended')}}
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">

          <div class="card card-profile bg-white border-0 mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <img src="{{url('/')}}/asset/{{$logo->favicon}}" class="rounded-circle border-0">
                </div>
              </div>
            </div>
            <div class="card-body pt-7 px-5">
              <div class="text-center text-dark mb-5">
                <small>{{__('Click')}}, <span class="text-muted"><a href="{{route('contact')}}">{{__('here')}}</a></span> {{__('to contact administrator')}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop