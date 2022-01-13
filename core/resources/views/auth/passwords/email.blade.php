@extends('loginlayout')

@section('content')
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{route('user.password.email')}}" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{ __('Forgot password') }}</h1>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrEmail">{{ __('Email address')}}</label>
            <input type="email" class="form-control" name="email"  tabindex="2" placeholder="{{ __('Email address') }}" aria-label="********" required
                    data-msg="Email address is invalid. Please try again.">
          </div>
          <!-- End Form Group -->

          <!-- Button -->
          <div class="row align-items-center mb-5">
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted">{{__('Have an account?')}}</span>
              <a class="font-size-1 font-weight-bold" href="{{route('login')}}">{{__('Sign In')}}</a>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover">{{__('Reset Password')}}</button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
@stop