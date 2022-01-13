<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>{{ $title }} - {{$set->site_name}}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="{{$set->m_c}}"/>
        <meta name="description" content="{{$set->site_desc}}"/>
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{$logo->image_link2}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/font-awesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/aos/dist/aos.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/dzsparallaxer/dzsparallaxer.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/vendor/cubeportfolio/css/cubeportfolio.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/theme.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/cus.css" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
         @yield('css')
    </head>
    <body class="content-front">
        <header id="header" class="header header-box-shadow-on-scroll header-show-hide header-bg-transparent header-abs-top_enablet"
            
        >
            
            
            <div class="header-section">
                <!--

                data-hs-header-options='{
                    "fixMoment": 1000,
                    "fixEffect": "slide"
                }'

                <div class="container header-hide-content pt-2">
                    <div class="d-flex align-items-center">
                        @if($set->language==1)
                            <div class="hs-unfold">
                                @php $locale = session()->get('locale'); @endphp
                                <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
                                data-hs-unfold-options='{
                                    "target": "#languageDropdown",
                                    "type": "css-animation",
                                    "event": "hover",
                                    "hideOnScroll": "true"
                                }'>
                                @switch($locale)
                                    @case('fr')
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/fr.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">French</span>
                                    @break
                                    @case('ge')
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/ge.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">German</span>
                                    @break
                                    @case('es')
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/es.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">Spanish</span>
                                    @break
                                    @case('in')
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/in.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">Hindi</span>
                                    @break                        
                                    @case('ch')
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/ch.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">China</span>
                                    @break
                                    @default
                                    <img class="dropdown-item-icon mr-2" src="{{url('/')}}/asset/images/flags/us.svg" alt="SVG">
                                    <span class="d-none d-sm-inline-block">English</span>
                                @endswitch
                                </a>
                                <div id="languageDropdown" class="hs-unfold-content dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/')}}/lang/en">English</a>
                                    <a class="dropdown-item" href="{{url('/')}}/lang/fr">France</a>
                                    <a class="dropdown-item" href="{{url('/')}}/lang/ge">Germany</a>
                                    <a class="dropdown-item" href="{{url('/')}}/lang/ch">China</a>
                                    <a class="dropdown-item" href="{{url('/')}}/lang/in">Hindi</a>
                                    <a class="dropdown-item" href="{{url('/')}}/lang/es">Spanish</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                -->
                <div id="logoAndNav" class="container">
                    <!-- Nav -->
                    <nav class="js-mega-menu navbar navbar-expand-lg">
                    <div class="navbar-nav-wrap">
                        <!-- Logo -->
                        <a class="navbar-brand navbar-nav-wrap-brand" href="{{url('/')}}" aria-label="Front">
                            <img src="{{url('/')}}/asset/{{$logo->image_link}}" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-content text-center">
                            <div class="d-none d-lg-block login-btn">
                                @if (Auth::guard('user')->check())
                                    <a href="{{route('user.dashboard')}}" class="btn btn-sm btn-light">{{__('Dashboard')}}</a>
                                @else
                                    <a href="{{route('login')}}" class="btn btn-sm btn-light ">{{__('Sign In')}}</a>
                                @endif
                            </div>
                        </div>
                        <!-- End Secondary Content -->

                        <!-- Responsive Toggle Button -->
                        <button type="button" class="navbar-toggler navbar-nav-wrap-toggler btn btn-icon btn-sm rounded-circle"
                                aria-label="Toggle navigation"
                                aria-expanded="false"
                                aria-controls="navBar"
                                data-toggle="collapse"
                                data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                            </svg>
                        </span>
                        </button>
                        <!-- End Responsive Toggle Button -->

                        <!-- Navigation -->
                        <div id="navBar" class="collapse navbar-collapse navbar-nav-wrap-collapse">
                            <div class="navbar-body header-abs-top-inner">
                                <ul class="navbar-nav">
                                    <!--
                                    <li class="header-nav-item">
                                        <form>
                                            <input type="search" class="search-header" placeholder="Search">
                                        </form>
                                    </li>
                                    -->
                                    <li class="header-nav-item">
                                        <a class="nav-link header-nav-link" href="{{route('about')}}">{{__('About us')}}</a>
                                    </li>
                                    @if($set->blog==1)
                                        <li class="header-nav-item">
                                            <a class="nav-link header-nav-link" href="{{route('blog')}}">{{__('Blog')}}</a>
                                        </li>
                                    @endif                                    
                                    @if($set->faq==1)
                                        <li class="header-nav-item">
                                            <a class="nav-link header-nav-link" href="{{route('faq')}}">{{__('FAQs')}}</a>
                                        </li>
                                    @endif     
                                    @if($set->contact==1)                     
                                        <li class="header-nav-item">
                                            <a class="nav-link header-nav-link" href="{{route('contact')}}">{{__('Contact us')}}</a>
                                        </li>  
                                    @endif 
                                    <li class="hs-has-sub-menu navbar-nav-item">
                                        <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">{{__('More Pages')}}</a>
                                        <div id="blogSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                            @foreach($pages as $val)
                                                <a class="dropdown-item" href="{{url('/')}}/page/{{$val->slug}}">{{$val->title}}</a>
                                            @endforeach
                                        </div>
                                    </li>    
                                    @if (Auth::guard('user')->check())                         
                                    <li class="header-nav-item d-block d-sm-none">
                                        <a class="nav-link header-nav-link" href="{{route('user.dashboard')}}">{{__('Dashboard')}}</a>
                                    </li>          
                                    @else                  
                                        <li class="header-nav-item d-block d-sm-none">
                                            <a class="nav-link header-nav-link" href="{{route('login')}}">{{__('Login')}}</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- End Navigation -->
                    </div>
                    </nav>
                    <!-- End Nav -->
                </div>
            </div>
        </header>
        <main id="content"  role="main">
            @yield('content')
        </main>
        <footer class="bg-light">
            <div class="container">
                <div class="space-bottom-1 space-2 space-bottom-lg-2"  style="display: none;">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                            <!-- Logo -->
                            <div class="mb-4">
                                <a href="{{url('/')}}" aria-label="Front">
                                    <img class="brand" src="{{url('/')}}/asset/{{$logo->image_link}}" alt="Logo">
                                </a>
                            </div>
                            <!-- End Logo -->

                            <!-- Nav Link -->
                            @if($set->contact==1)
                                <ul class="nav nav-sm nav-x-0 flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link media" href="javascript:;">
                                        <span class="media">
                                            <span class="fad fa-location-arrow mt-1 mr-2"></span>
                                            <span class="media-body">
                                                {{$set->address}}
                                            </span>
                                        </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link media" href="tel:1-062-109-9222">
                                        <span class="media">
                                            <span class="fad fa-phone-alt mt-1 mr-2"></span>
                                            <span class="media-body">
                                            {{$set->mobile}}
                                            </span>
                                        </span>
                                        </a>
                                    </li>                                
                                    <li class="nav-item">
                                        <a class="nav-link media" href="tel:1-062-109-9222">
                                        <span class="media">
                                            <span class="fad fa-envelope mt-1 mr-2"></span>
                                            <span class="media-body">
                                            {{$set->email}}
                                            </span>
                                        </span>
                                        </a>
                                    </li>
                                </ul>
                            @endif
                            <!-- End Nav Link -->
                        </div>

                        <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                            <h5>{{__('Quick Links')}}</h5>
                            <!-- Nav Link -->
                            <ul class="nav nav-sm nav-x-0 flex-column">
                                @if($set->s_inv==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('user.plans')}}">{{__('Standard Plans')}}</a></li>
                                @endif
                                @if($set->p_inv==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('user.sandplans')}}">{{__('Project Plans')}}</a></li>
                                @endif
                                @if($set->referral==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('user.referral')}}">{{__('Affiliate System')}}</a></li>
                                @endif
                                @if($set->savings==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('user.savings')}}">{{__('Save & Earn')}}</a></li>
                                @endif
                            </ul>
                            <!-- End Nav Link -->
                        </div>

                        <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                            <h5>{{__('Company')}}</h5>

                            <!-- Nav Link -->
                            <ul class="nav nav-sm nav-x-0 flex-column">
                                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">{{__('About us')}}</a></li>
                                @if($set->contact==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">{{__('Reach us')}}</a></li>
                                @endif
                                @if($set->faq==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">{{__('FAQs')}}</a></li>
                                @endif
                                @if($set->blog==1)
                                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">{{__('Blog')}}</a></li>
                                @endif
                            </ul>
                            <!-- End Nav Link -->
                        </div>

                        <div class="col-6 col-md-3 col-lg">
                            <h5>More</h5>

                            <!-- Nav Link -->
                            <ul class="nav nav-sm nav-x-0 flex-column">
                                @foreach($pages as $val)
                                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}/page/{{$val->slug}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                            <!-- End Nav Link -->
                        </div>

                        <div class="col-6 col-md-3 col-lg">
                            <h5>Resources</h5>

                            <!-- Nav Link -->
                            <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.ticket')}}">
                                <span class="media align-items-center">
                                    <i class="fad fa-info-circle mr-2"></i>
                                    <span class="media-body">{{__('Raise a Dispute')}}</span>
                                </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.profile')}}">
                                <span class="media align-items-center">
                                    <i class="fad fa-user-circle mr-2"></i>
                                    <span class="media-body">{{__('Your Account')}}</span>
                                </span>
                                </a>
                            </li>
                            </ul>
                            <!-- End Nav Link -->
                        </div>
                    </div>
                </div>

                <hr class= "my-0">

                <div class="space-1">
                    <div class="row align-items-md-center mb-7">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <!-- Nav Link -->
                            <ul class="nav nav-sm nav-x-sm align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('privacy')}}">{{__('Privacy Policy')}}</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('terms')}}">{{__('Terms & Conditions')}}</a>
                            </li>
                            </ul>
                            <!-- End Nav Link -->
                        </div>

                        <div class="col-md-6 text-md-right">
                            <ul class="list-inline mb-0">
                                <!-- Social Networks -->
                                @foreach($social as $socials)
                                    @if(!empty($socials->value))
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="{{$socials->value}}">
                                            <i class="fab fa-{{$socials->type}}"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach 
                                <!-- End Social Networks -->
                            </ul>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="w-md-75 text-lg-center mx-lg-auto">
                    <p class="opacity-sm small">&copy; {{$set->site_name}}. {{date('Y')}}. {{__('All rights reserved.')}}</p>
                    <p class="opacity-sm small">{{__('When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.')}}</p>
                    </div>
                    <!-- End Copyright -->
                </div>
            </div>
        </footer>
        <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
            data-hs-go-to-options='{
            "offsetTop": 700,
            "position": {
                "init": {
                "right": 15
                },
                "show": {
                "bottom": 15
                },
                "hide": {
                "bottom": -15
                }
            }
            }'>
            <i class="fas fa-angle-up"></i>
        </a>
        {!!$set->livechat!!}
        <script src="{{url('/')}}/asset/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{url('/')}}/asset/vendor/hs-header/dist/hs-header.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/slick-carousel/slick/slick.js"></script>
        <script src="{{url('/')}}/asset/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/dzsparallaxer/dzsparallaxer.js"></script>
        <script src="{{url('/')}}/asset/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/typed.js/lib/typed.min.js"></script>
        <script src="{{url('/')}}/asset/vendor/aos/dist/aos.js"></script>
        <script src="{{url('/')}}/asset/dashboard/js/argon.js"></script>
        <!-- JS Front -->
        <script src="{{url('/')}}/asset/js/hs.core.js"></script>
        <script src="{{url('/')}}/asset/js/hs.slick-carousel.js"></script>
        <script src="{{url('/')}}/asset/js/hs.validation.js"></script>
        <script src="{{url('/')}}/asset/js/hs.cubeportfolio.js"></script>
        <script src="{{url('/')}}/asset/js/toast.js"></script>

        <!-- JS Plugins Init. -->
        <script>
            "use strict";
            $(document).on('ready', function () {
                // initialization of header
                var header = new HSHeader($('#header')).init();

                // initialization of mega menu
                var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                    desktop: {
                    position: 'left'
                    }
                }).init();

                // initialization of unfold
                var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

                // initialization of form validation
                $('.js-validate').each(function() {
                    $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                        equalTo: '#signupPassword'
                        }
                    }
                    });
                });

                // initialization of show animations
                $('.js-animation-link').each(function () {
                    var showAnimation = new HSShowAnimation($(this)).init();
                });

                // initialization of cubeportfolio
                $('.cbp').each(function () {
                    var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    plugins: {
                        loadMore: {
                        element: '#cubeLoadMore',
                        action: 'click',
                        loadItems: 4,
                        }
                    }
                    });
                });

                // initialization of slick carousel
                $('.js-slick-carousel').each(function() {
                    var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
                });

                // initialization of text animation (typing)
                    var typed = new Typed(".js-text-animation", {
                        strings: ["{{$set->title}}"],
                        typeSpeed: 100,
                        loop: true,
                        backSpeed: 50,
                        backDelay: 1500
                    });
                

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });

                // initialization of go to
                $('.js-go-to').each(function () {
                    var goTo = new HSGoTo($(this)).init();
                });
            });
        </script>

        <!-- IE Support -->
        <script>
            "use strict";
            if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{url('/')}}/asset/vendor/polifills.js"><\/script>');
        </script>
        @yield('script')
        @if (session('success'))
            <script>
                "use strict";
                toastr.success("{{ session('success') }}");
            </script>    
        @endif
        @if (session('alert'))
            <script>
                "use strict";
                toastr.warning("{{ session('alert') }}");
            </script>
        @endif
    </body>
</html>