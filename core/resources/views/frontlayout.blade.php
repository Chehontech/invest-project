<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="{{url('/')}}"/>
        <title>{{ $title }} | {{$set->site_name}}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="{{$set->site_desc}}" />
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <link rel="apple-touch-icon" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <link rel="stylesheet" href="{{url('/')}}/asset/css/theme.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/cus.css" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
         @yield('css')
    </head>
<!-- header begin-->
  <body class="{{$set->m_c}} castro-secret admin-panel check-plan">
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
          <div class="navbar-collapse-header">
          </div>
        </div>
      </div>
    </nav>
<!-- header end -->

@yield('content')


<!-- footer begin -->
<footer class="py-5 mt-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-white">
          <a href="{{url('/')}}" class="ml-1 text-white">{{$set->site_name}}</a>  &copy; {{date('Y')}}. {{__('All Rights Reserved.')}} 
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">                      
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('privacy')}}">{{__('Privacy Policy')}}</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('terms')}}">{{__('Terms & Conditions')}}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  {!!$set->livechat!!}
  <!-- Argon Scripts -->
  <!-- Core -->
  <script>
  "use strict";
  var urx='{{$currency->name}}';
  </script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/clipboard/dist/clipboard.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/select2/dist/js/select2.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/quill/dist/quill.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="{{url('/')}}/asset/dashboard/js/argon.js?v=1.1.0"></script>
    <script src="{{url('/')}}/asset/dashboard/js/demo.min.js"></script>
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
@yield('script')