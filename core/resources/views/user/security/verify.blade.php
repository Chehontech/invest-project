@extends('loginlayout')

@section('content')

<div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{ route('send.email-verify')}}" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{__('Email verification')}}</h1>
            <small>{{__('Verify your Email')}}, <span class="text-muted"><a href="{{route('user.resend.email')}}">{{__('Resend email')}}</a></span></small>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fad fa-unlock"></i></span>
              </div>
              <input type="hidden"  name="id" value="{{Auth::guard('user')->user()->id}}">
              <input class="form-control" placeholder="{{ __('Code') }}" type="text" name="email_code" required>
            </div>
          </div> 
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block transition-3d-hover">{{__('Verify')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop