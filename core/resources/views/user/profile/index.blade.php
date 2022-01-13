@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">{{__('Your Profile')}}</h3>
          </div>
          <div class="card-body form-block">
            <form action="{{url('user/account')}}" method="post">
              @csrf
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">{{__('Full Name')}}</label>
                  <div class="col-lg-9">
                    <div class="row">
                        <div class="col-6">
                          <input type="text" name="first_name" class="form-control" placeholder="{{__('First Name')}}" value="{{$user->first_name}}">
                        </div>      
                        <div class="col-6">
                          <input type="text" name="last_name" class="form-control" placeholder="{{__('Last Name')}}" value="{{$user->last_name}}">
                        </div>
                    </div>
                  </div>
                </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">{{__('Username')}}</label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" placeholder="{{__('Your Username')}}" value="{{$user->username}}" required>
                  </div>
                </div>   
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">{{__('Phone Number')}}</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+</span>
                      </div>
                      <input type="number" inputmode="numeric" name="phone" placeholder="{{__('Phone Number')}}" maxlength="14" class="form-control" value="{{$user->phone}}">
                    </div>
                  </div>
                </div>                 
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">{{__('Email Address')}}</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="{{__('Email Address')}}" value="{{$user->email}}">
                    </div>
                  </div>
                </div>               
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">{{__('Address')}}</label>
                  <div class="col-lg-9">
                    <input type="text" name="address" class="form-control" placeholder="{{__('Address')}}" value="{{$user->address}}">
                  </div>
                </div>                                   
              <div class="text-right">
                <button type="submit" class="btn btn-success btn-sm">{{__('Save Changes')}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="card-title mb-3">{{__('Account Photo')}}</h3>
            <a href="#" class="avatar text-center mb-3">
              <img src="{{url('/')}}/asset/profile/{{$cast}}"/>
            </a>
            <form action="{{url('user/avatar')}}" enctype="multipart/form-data" method="post">
            @csrf
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" accept="image/*" required>
                    <label class="custom-file-label" for="customFileLang">{{__('Choose Media')}}</label>
                  </div> 
                </div>              
              <div class="text-right">
                <button type="submit" class="btn btn-neutral btn-block">{{__('Change Photo')}}</button>
              </div>
            </form>
          </div>
        </div>
          <div class="card">
            <div class="card-body text-center">
              <h3 class="card-title mb-3">{{__('Delete Account')}}</h3>
              <p class="card-text text-sm text-dark">{{__('Closing this account means you will no longer be able to access this account on')}} {{$set->site_name}}</p>
              <div class="text-right">
                  <a data-toggle="modal" data-target="#modal-formp" href="" class="btn btn-danger btn-block"><i class="fad fa-trash"></i> {{__('Delete Account')}}</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formp" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-header">
                <h3 class="mb-0">{{__('Delete Account')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('delaccount')}}" method="post">
                  @csrf
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <textarea type="text" name="reason" class="form-control" rows="5" placeholder="{{__('Sorry to see you leave, Please tell us why you are leaving')}}" required></textarea>
                    </div>
                  </div>             
                  <div class="text-right">
                    <button type="submit" class="btn btn-neutral btn-block">{{__('Delete account')}}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>         
      </div>
    </div>
  </div> 
@stop