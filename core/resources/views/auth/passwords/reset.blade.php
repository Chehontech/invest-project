@extends('loginlayout')

@section('content')
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{route('user.password.request')}}" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{__('Recover your account')}}</h1>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrEmail">{{ __('Email address')}}</label>
            <input class="form-control" tabindex="1" placeholder="{{ __('Email address') }}" type="email" name="email"  aria-label="{{ __('Email address') }}" required
                    data-msg="Please enter a valid email address.">
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrPassword" tabindex="0">
              <span class="d-flex justify-content-between align-items-center">
                Password
              </span>
            </label>
            <input type="password" class="form-control" name="password"  tabindex="2" placeholder="********" aria-label="********" required
                    data-msg="Your password is invalid. Please try again.">
          </div>
          <div class="row align-items-center mb-5">
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted">{{__('Don\'t have an account?')}}</span>
              <a class="font-size-1 font-weight-bold" href="{{route('register')}}">{{__('Signup')}}</a>
            </div>
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover">{{__('Continue')}}</button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
@stop