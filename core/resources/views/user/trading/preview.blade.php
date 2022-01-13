@extends('loginlayout')

@section('content')
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-10 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-lg-0">
        <div class="card-header bg-light text-center py-4 px-5 px-md-6">
          <h2 class="h4 mb-0">{{$title}}</h2>
          @php
            $interest=$currency->symbol.$amount*$plan->interest/100;
            $compound=$currency->symbol.$amount*$plan->compound/100;
          @endphp
        </div>
        <div class="card-body p-4 p-md-6">
          <p class="mb-0">{{__('Name')}}:{{$plan->name}}</p>
          <p class="mb-0">{{__('Duration')}}:{{$plan->duration.' '.$plan->period}}(s)</p>
          <p class="mb-0">{{__('Amount')}}:{{$currency->symbol.number_format($amount)}}</p>
          <p class="mb-0">{{__('Interest')}}:{{$interest}}</p>
          <p class="mb-0">{{__('Compound Interest')}}:{{$compound}}</p>
          @if(isset($coupon))
          <hr>
          <p class="mb-0">{{__('Coupon code')}}:{{$coupon->code}}</p>
          <p class="mb-0">{{__('Percent off')}}:{{$coupon->percent}}%</p>
          <p class="mb-">{{__('Total')}}:{{$currency->symbol}}{{$amount-($amount*$coupon->percent/100)}}</p>
          @endif
          <form action="{{url('user/buy')}}" method="post">
            @csrf
            <input type="hidden" name="coupon" value="@if(isset($coupon)) 1 @else 0 @endif">
            <input type="hidden" name="code" value="@if(isset($coupon)) $coupon->code @else 0 @endif">
            <input type="hidden" name="amount" value="{{$amount}}">
            <input type="hidden" name="plan" value="{{$plan->id}}">
            <!-- Checkbox -->
            <div class="js-form-message mb-5 mt-2">
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions.">
                <label class="custom-control-label" for="termsCheckbox">
                  <small>
                    I agree to the
                    <a class="link-underline" href="{{route('terms')}}">Terms and Conditions</a>
                  </small>
                </label>
              </div>
            </div>
            <!-- End Checkbox -->
            <button type="submit" class="btn btn-block btn-primary transition-3d-hover">
              Purchase Plan
              <i class="fas fa-angle-right fa-sm ml-1"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
