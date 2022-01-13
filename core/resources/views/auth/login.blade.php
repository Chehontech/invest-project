@extends('loginlayout')

@section('content')
  <div class="container login-page">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{route('submitlogin')}}" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{ __('Welcome back')}}</h1>
            <p>{{ __('Login to manage your account.')}}</p>
          </div>
          <!-- End Title -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <!--<label class="input-label" for="signinSrEmail">{{ __('Email address')}}</label>-->
            <input class="form-control" tabindex="1" placeholder="{{ __('Email address') }}" type="email" name="email"  aria-label="{{ __('Email address') }}" required
                    data-msg="Please enter a valid email address.">
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="js-form-message form-group">
            <label class="input-label" for="signinSrPassword" tabindex="0">
              <!-- <span class="d-flex justify-content-between align-items-center">
                Password
              </span> -->
            </label>
           <div class="input-group">
              <input type="password" name="password" placeholder="password" class="form-control" data-toggle="password">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-eye"></i></span>
              </div>
            </div>
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
            <div class="col-sm-12 mb-3">
              <span class="font-size-1 text-muted">{{__('Don\'t have an account?')}}</span>
              <a class="font-size-1 font-weight-bold" href="{{route('register')}}">{{__('Signup')}}</a>
            </div>
            @if($set->recaptcha==1)
              {!! app('captcha')->display() !!}
              @if ($errors->has('g-recaptcha-response'))
                  <span class="help-block">
                      {{ $errors->first('g-recaptcha-response') }}
                  </span>
              @endif
            @endif
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block ">{{__('Login')}}</button>
            </div>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
@stop