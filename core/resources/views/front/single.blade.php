@extends('layout')
@section('css')

@stop
@section('content')
<div class="container space-top-3 space-bottom-2">
      <div class="w-lg-60 mx-lg-auto">
        <div class="mb-4">
          <h1 class="h2">{{$post->title}}</h1>
        </div>

        <!-- Author -->
        <div class="border-top border-bottom py-4 mb-5">
          <div class="row align-items-md-center">
            <div class="col-md-7 mb-5 mb-md-0">
              <div class="media align-items-center">
                <div class="media-body font-size-1 ml-3">
                  <span class="d-block text-muted">{{date("M j, Y", strtotime($post->created_at))}}</span>
                </div>
              </div>
            </div>
            @php $slug  = str_slug($post->title); @endphp
            <div class="col-md-5">
              <div class="d-flex justify-content-md-end align-items-center">
                <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.facebook.com/sharer.php?u={{url('/')}}/single/{{$post->id}}/{{$slug}}">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://twitter.com/intent/tweet?url={{url('/')}}/single/{{$post->id}}/{{$slug}}&text={{$post->title}}">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://plus.google.com/share?url={{url('/')}}/single/{{$post->id}}/{{$slug}}&text={{$post->title}}&hl=english">
                  <i class="fab fa-google-plus"></i>
                </a>
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://pinterest.com/pin/create/button/?url={{url('/')}}/single/{{$post->id}}/{{$slug}}">
                  <i class="fab fa-pinterest-p"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Author -->
        <div class="my-4 my-sm-8">
            <img class="img-fluid rounded" src="{{url('/')}}/asset/thumbnails/{{$post->image}}" alt="Image Description">
        </div>
        <p>{!!$post->details!!}</p>
      </div>
@stop