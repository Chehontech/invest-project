@extends('master')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="h3 mb-0">{{__('Media')}}</h5>
          </div>
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              @foreach($plan as $k=>$val)
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <a href="#" class="avatar">
                        <img alt="Image placeholder" src="{{url('/')}}/asset/images/{{$val->image}}">
                      </a>
                    </div>
                    <div class="col ml--2">
                    <span class="text-gray text-uppercase form-text">{{$val->title}}</span>
                    </div>
                    <div class="col-auto">
                      <a href="{{url('/')}}/admin/sand-delete-product-image/{{$val->id}}" class="btn btn-sm btn-neutral"><i class="fa fa-trash"></i> {{__('Delete')}}</a>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul><br><br>
            <form action="{{route('admin.sand.plan.status.image.submit')}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group row">
                  <div class="col-lg-12">
                      <div class="custom-file text-center">
                      <input type="hidden" value="{{$check}}" name="id">
                          <input type="file" class="custom-file-input" name="image" accept="image/*" id="customFileLang">
                          <label class="custom-file-label" for="customFileLang">{{__('Choose Media')}}</label>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Title')}}</label>
                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>  
  
              <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm">{{__('Upload')}}</a>
              </div>  
            </form>
          </div>
        </div>
      </div>
@stop