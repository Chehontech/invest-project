@extends('layout')
@section('css')

@stop
@section('content')
<div class="container space-top-3 space-top-lg-4 space-bottom-1 about-us">
    <!-- Hero -->
        <div class="text-center mb-5 mb-md-9">
            <p class="lead">{{__('About us')}}</p>
            <h1 class="display-4 mb-0">
                <span class="js-text-animation"></span>
            </h1>
        </div>
    <!-- End Hero -->
    <!-- Content -->
    <div class="cbp"
        data-hs-cbp-options='{
            "animationType": "quicksand",
            "gapHorizontal": 40,
            "gapVertical": 40,
            "mediaQueries": [
            {"width": 1500, "cols": 3},
            {"width": 1100, "cols": 3},
            {"width": 800, "cols": 3},
            {"width": 480, "cols": 2},
            {"width": 380, "cols": 1}
            ]
        }'>
        @foreach($images as $val)
        <!-- Item -->
            <div class="cbp-item rounded product">
                <a class="cbp-caption" href="single-page-grid.html">
                <div class="cbp-caption-defaultWrap">
                    <img class="rounded" src="{{url('/')}}/asset/images/{{$val->image}}" alt="Image Description">
                </div>
                </a>
            </div>
        <!-- End Item -->
        @endforeach
    </div>
</div>
<!-- About Section -->
<div class="container space-1">
    <div class="row justify-content-lg-between">
            <div class="col-lg-12 about-text">
                <p>{{$set->site_desc}}</p>
                <p>{!!$about->about!!}</p>
        </div>
    </div>
</div>
<!-- End About Section -->
@if($set->team==1)
        @if(count($team)>0)
            <div class="container space-1">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2">Our Team</span>
                    <h2>{{$ui->team}}</h2>
                </div>
                <!-- End Title -->

                <!-- Team Carousel -->
                <div class="js-slick-carousel slick slick-gutters-3 mb-5 mb-lg-3"
                    data-hs-slick-carousel-options='{
                        "slidesToShow": 4,
                        "dots": true,
                        "dotsClass": "slick-pagination d-lg-none",
                        "responsive": [{
                        "breakpoint": 1200,
                            "settings": {
                            "slidesToShow": 3
                            }
                        }, {
                        "breakpoint": 992,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 768,
                        "settings": {
                            "slidesToShow": 2
                            }
                        }, {
                        "breakpoint": 554,
                        "settings": {
                            "slidesToShow": 1
                        }
                        }]
                    }'>
                    @foreach($team as $val)
                    <div class="js-slide pb-6">
                    <!-- Team -->
                    <div class="card mx-3">
                    <img class="card-img-top" src="{{url('/')}}/asset/review/{{$val->image}}" alt="Image Description">

                        <div class="card-body text-center">
                        <h4 class="mb-1">{{$val->name}}</h4>
                        <p class="font-size-1 mb-0">{{$val->position}}</p>
                        </div>
                    </div>
                    <!-- End Team -->
                    </div>
                    @endforeach
                </div>
                <!-- End Team Carousel -->
            </div>
        @endif
    @endif

@stop