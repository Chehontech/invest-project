@extends('loginlayout')

@section('content')
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
        <!-- Form -->
        <form role="form" action="{{route('user.upload-kyc')}}" enctype="multipart/form-data" method="post">
          @csrf
          <div class="mb-5 mb-md-7">
            <h1 class="h2">{{ __('KYC VERIFICATION') }}</h1>
            <p>{{ __('Ensure document provided contains thesame information as of registration') }}</p>
          </div>
          <!-- End Title -->

          <div class="form-group mb-3">
                    <select class="form-control select" @if($user->kyc_link!=null && $user->kyc_status==0 || $user->kyc_link!=null && $user->kyc_status==1) disabled @endif name="type" required>
                        <option value="">{{__('Identification type')}}</option>
                        <option value="National ID" @if($user->kyc_type=='International Passport') selected @endif>{{__('International Passport')}}</option>
                        <option value="National ID" @if($user->kyc_type=='National ID') selected @endif>{{__('National ID')}}</option>
                        <option value="Driver license" @if($user->kyc_type=='Driver license') selected @endif>{{__('Driver license')}}</option>
                        <option value="Voters card" @if($user->kyc_type=='Voters card') selected @endif>{{__('Voters card')}}</option>
                    </select>
                </div> 
                @if($user->kyc_link==null && $user->kyc_status==0)
                    <div class="text-center">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" name="image" accept="image/*">
                                <label class="custom-file-label" for="customFileLang">{{__('Select document')}}</label>
                            </div> 
                        </div> 
                        @if ($errors->has('image'))
                            <span class="error form-error-msg ">
                            <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif 
                    </div>
                @endif  
                <div class="text-center">
                    @if($user->kyc_link==null && $user->kyc_status==0)
                        <button type="submit" class="btn btn-primary btn-block transition-3d-hover">{{__('Upload')}}</button>
                    @endif
                    <div class="loginSignUpSeparator"><span class="textInSeparator text-sm text-uppercase">Status</span></div>
                    @if($user->kyc_link!=null && $user->kyc_status==0)
                      <span class="error form-error-msg ">
                        <span class="badge badge-pill badge-primary mb-3">{{__('Under review')}}</span>
                      </span>                    
                    @elseif($user->kyc_link!=null && $user->kyc_status==1)
                      <span class="error form-error-msg ">
                        <span class="badge badge-pill badge-success mb-3">{{__('Approved')}}</span>
                      </span>
                    @endif
                </div>
        </form>
        <!-- End Form -->
      </div>
    </div>
  </div>
@stop