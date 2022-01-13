@extends('layout')
@section('css')

@stop
@section('content')
<div class="bg-img-hero contact-hero">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
            <h1>{{__('Contact us')}}</h1>
            <p>{{__('We love to talk about how we can help you.')}}</p>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="{{route('user.ticket')}}">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="{{url('/')}}/asset/images/icon-7.svg" alt="SVG">
                  </figure>
                  <h3 class="h4">{{__('Knowledgebase')}}</h3>
                  <p class="text-body mb-0">{{__('We are here to help with any questions or code.')}}</p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5 upinup">
                {{__('Create ticket')}} <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>

            <div class="col-md-6 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="{{route('faq')}}">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="{{url('/')}}/asset/images/icon-4.svg" alt="SVG">
                  </figure>
                  <h3 class="h4">{{__('FAQ')}}</h3>
                  <p class="text-body mb-0">{{__('Search our FAQ for answers to anything you might ask.')}}</p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5 upinup">
                {{__('Visit FAQ')}} <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>
        </div>
    </div>
</div>
<!-- SVG Shape -->
    
<!-- End SVG Shape -->
@if($set->contact==1)
<!-- Contact Form Section -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>{{__('Tell us about yourself')}}</h2>
            <p>{{__('Whether you have questions or you would just like to say hello, contact us.')}}</p>
        </div>
<div class="container-contact">
    <div class="container space-2 space-lg-3">
        <!-- Title -->
        
        <!-- End Title -->

        <div class="w-lg-80 mx-auto">
            <!-- Contacts Form -->
            <form class="js-validate" action="{{route('contact-submit')}}" method="post">
                @csrf
                <div class="row">
                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">{{__('Your name')}}</label>
                            <input type="text" class="form-control" name="full_name" placeholder="{{__('Scott Marshal')}}" aria-label="{{__('Scott Marshal')}}" required
                                data-msg="Please enter your name.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">{{__('Your email address')}}</label>
                            <input type="email" class="form-control" name="email" placeholder="{{__('a@b.com')}}" aria-label="{{__('a@b.com')}}" required
                                data-msg="Please enter a valid email address.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="w-100"></div>

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">{{__('Subject')}}</label>
                            <input type="text" class="form-control" name="subject" placeholder="{{__('Investment plans')}}" aria-label="{{__('Sponsored plans')}}" required
                                data-msg="Please enter a subject.">
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-4">
                        <div class="js-form-message">
                            <label class="input-label">{{__('Your phone number')}}</label>
                            <input type="number" class="form-control" name="mobile" placeholder="{{__('1-234-5678-4567')}}" aria-label="{{__('1-234-5678-4567')}}" required
                                data-msg="Please enter a valid phone number.">
                        </div>
                    </div>
                    <!-- End Input -->
                </div>

                <!-- Input -->
                <div class="js-form-message mb-6">
                    <label class="input-label">{{__('How can we help you?')}}</label>
                    <div class="input-group">
                    <textarea class="form-control" rows="4" name="message" placeholder="{{__('Hi there, I would like to ...')}}" aria-label="{{__('Hi there, I would like to ...')}}" required
                                data-msg="Please enter a reason."></textarea>
                    </div>
                </div>
                <!-- End Input -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">{{__('Submit')}}</button>
                    <p class="small">{{__('We will get back to you in 1-2 business days.')}}</p>
                </div>
            </form>
            <!-- End Contacts Form -->
        </div>
    </div>
</div>
<!-- End Contact Form Section -->
@endif
@stop