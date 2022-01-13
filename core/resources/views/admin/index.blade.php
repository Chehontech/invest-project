@extends('loginlayout')

@section('content')
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{route('admin.login')}}" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{ __('Welcome back')}}</h1>
            <p>{{ __('Login to manage platform.')}}</p>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrEmail">{{ __('Username')}}</label>
            <input class="form-control" tabindex="1" placeholder="{{ __('Username') }}" type="text" name="username"  aria-label="{{ __('Username') }}" required
                    data-msg="Please enter a valid username.">
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
          <!-- End Form Group -->
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="checkbox" id="customCheck12" class="custom-control-input" name="remember_me">
              <label class="custom-control-label" for="customCheck12">{{__('Remember me')}}</label>
            </div>
          </div>


          <!-- Button -->
          <div class="row align-items-center mb-5">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block transition-3d-hover">{{__('Login')}}</button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
@stop