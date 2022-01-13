@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">    
        <div class="card">
            <div class="card-header checkx">
                <h3 class="mb-0 text-dark font-weight-bolder">{{__('Password')}}</h3>
            </div>
          <div class="card-body form-block">
            <form action="{{route('change.password')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Current password')}}</label>
                    <div class="col-lg-10">
                        <input type="password" name="password" class="form-control" placeholder="{{__('Current password')}}" required>
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('New password')}}</label>
                    <div class="col-lg-10">
                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="{{__('New password')}}" required>
                        <span class="error form-error-msg"><span id="result"></span></span>
                        
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">{{__('Confirm password')}}</label>
                    <div class="col-lg-10">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="{{__('Confirm password')}}" required>
                        <span class="error form-error-msg" id="msg"></span>
                    </div>
                </div> 
                <h4 class="mb-0 text-dark font-weight-bolder">{{__('Password requirements')}}</h4>
                <p class="mb-2 text-default text-sm">{{__('Ensure that these requirements are met')}}</p>
                <ul class="text-default text-sm">
                  <li>{{__('Minimum 8 characters long - the more, the better')}}</li>
                  <li>{{__('At least one lowercase character.')}}</li>
                  <li>{{__('At least one uppercase character.')}}</li>
                  <li>{{__('At least one number, symbol, or whitespace character.')}}</li>
                </ul>
                <div class="text-right">
                    <button type="submit" class="btn btn-success btn-sm" id="update_password">{{__('Update Password')}}</button>
                </div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h3 class="mb-0 text-dark font-weight-bolder">{{__('Devices')}}</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead>
                <tr>
                  <th>{{__('S / N')}}</th>
                  <th>{{__('Name')}}</th>
                  <th>{{__('Last login')}}</th>
                  <th>{{__('Ip adress')}}</th>
                </tr>
              </thead>
              <tbody>  
                @foreach($devices as $k=>$val)
                  <tr>
                    <td>{{++$k}}.</td>
                    <td>{{$val->name}}</td>
                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                    <td>{{$val->ip_address}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop 