@extends('layout')
@section('css')

@stop
@section('content')
<div class="bg-img-hero">
    <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
        <div class="w-md-80 w-lg-60 text-center mx-md-auto">
            <h1>{{__('FAQ')}}</h1>
            <p>{{__('Search our FAQ for answers to anything you might ask.')}}</p>
        </div>
    </div>
</div>
<div class="container space-2 space-bottom-lg-3 faq-style">
      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
            @foreach($fcat as $val)
                <div id="cat{{$val->id}}" class="space-bottom-1">
                    <h2>{{$val->name}}</h2>
                    <div id="basicsAccordion">
                        @php
                            $faq=App\Models\Faq::whereCat_id($val->id)->get();
                        @endphp
                        @foreach($faq as $faqs)
                            <!-- Card -->
                                <div class="card shadow-none mb-3 card-faq">
                                    <div class="card-header card-collapse" id="basicsHeadingOne{{$faqs->id}}">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne{{$faqs->id}}" aria-expanded="false" aria-controls="basicsCollapseOne{{$faqs->id}}">
                                            {{$faqs->question}}
                                            <span class="card-btn-toggle">
                                            <span class="card-btn-toggle-default">&plus;</span>
                                            <span class="card-btn-toggle-active">&minus;</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div id="basicsCollapseOne{{$faqs->id}}" class="collapse" aria-labelledby="basicsHeadingOne{{$faqs->id}}" data-parent="#basicsAccordion">
                                        <div class="card-body px-0">
                                            <p>{{$faqs->answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Card -->
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
@stop