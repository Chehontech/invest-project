@extends('layout')
@section('css')

@stop
@section('content')
<div class="container space-top-md-2 space-bottom-2 space-bottom-lg-3">
  <div class="container space-top-3 space-top-lg-4 space-bottom-1 space-bottom-md-2">
    <div class="w-md-80 w-lg-75 text-center mx-md-auto">
      <h1 class="display-4">{{__('Newsroom')}}</h1>
      <p class="lead">{{__('Latest updates and Hand-picked resources.')}}</p>
    </div>
  </div>
  @if($first!=null)
  <article class="card mb-11">
    <div class="row no-gutters">
      <div class="col-lg-8">
        <div class="position-relative overflow-hidden">
          <img class="card-img" src="{{url('/')}}/asset/thumbnails/{{$first->image}}" alt="Image Description">
          <figure class="d-none d-lg-block">
            <svg class="ie-curved-x position-absolute top-0 right-0 bottom-0 mr-n1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="101%">
              <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z"/>
            </svg>
          </figure>
          <figure class="d-lg-none mb-n1">
            <svg class="ie-curved-y position-absolute right-0 bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
              <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
            </svg>
          </figure>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card-body d-flex flex-column h-100 p-4 p-lg-5">
          <h2><a class="text-inherit" href="{{url('/')}}/single/{{$first->slug}}">{{$first->title}}</a></h2>
          <p>{!!  str_limit($first->details, 60);!!}..</p>
          <div class="media align-items-center mt-auto">
            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
            {{date("M j, Y", strtotime($first->created_at))}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <div class="row mb-5">
    <div class="col-6">
      <h2 class="h3 mb-0">Latest news</h2>
    </div>
  </div>
  @endif
  <div class="row mb-3 blog-pic">
    @foreach($posts as $val)
      <div class="col-sm-6 col-lg-4 mb-3 mb-sm-8">
        <!-- Blog Card -->
        <article class="card h-100">
          <div class="card-img-top position-relative">
            <img class="card-img-top" src="{{url('/')}}/asset/thumbnails/{{$val->image}}" alt="Image Description">
            <figure class="ie-curved-y position-absolute right-0 bottom-0 left-0 mb-n1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
              </svg>
            </figure>
          </div>

          <div class="card-body">
            <h3><a class="text-inherit" href="{{url('/')}}/single/{{$val->slug}}">{{$val->title}}</a></h3>
            <p>{!! str_limit($val->details, 60);!!}..</p>
          </div>

          <div class="card-footer border-0 pt-0">
            <div class="media align-items-center">
              <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
              {{date("M j, Y", strtotime($val->created_at))}}
              </div>
            </div>
          </div>
        </article>
        <!-- End Blog Card -->
      </div>
    @endforeach
  </div>
  <div class="row">
    <div class="col-md-12">
    {{ $posts->links('pagination::bootstrap-4') }}
    </div>
  </div>
@stop