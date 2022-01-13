@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Payment gateways')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th>{{__('Main name')}}</th>
                                    <th>{{__('Name for users')}}</th>
                                    <th>{{__('Minimum')}}</th>
                                    <th>{{__('Maximum')}}</th>
                                    <th>{{__('Charge')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Updated')}}</th>
                                    <th class="text-center"></th>    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($gateway as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td>{{$val->main_name}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$currency->symbol.$val->minamo}}</td>
                                    <td>{{$currency->symbol.$val->maxamo}}</td>
                                    <td>{{$val->charge}}%</td>
                                    <td>
                                        @if($val->status==0)
                                            <span class="badge badge-danger badge-pill">{{__('Disabled')}}</span>
                                        @elseif($val->status==1)
                                            <span class="badge badge-success badge-pill">{{__('Active')}}</span> 
                                        @endif
                                    </td>  
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                    <td class="text-center">
                                    <a data-toggle="modal" data-target="#edit{{$val->id}}" class="btn btn-primary btn-sm text-white" >
                                        {{__('Edit')}}
                                    </a>
                                    </td>                   
                                </tr>
                                <div id="edit{{$val->id}}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{$val->main_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{url('admin/storegateway')}}" method="post">
                                            @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label class="col-form-label">{{__('Name of gateway for users')}}</label>
                                                                <input value="{{$val->id}}"type="hidden" name="id">
                                                                <input type="text" value="{{$val->name}}" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">{{__('Minimun Deposit')}}</label>
                                                                <div class="input-group">
                                                                    <input type="number" name="minamo" maxlength="10" class="form-control"value="{{$val->minamo}}" required>
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text">{{$currency->name}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">{{__('Maximum Deposit')}}</label>
                                                                <div class="input-group">
                                                                    <input type="number" name="maxamo" maxlength="10" class="form-control"value="{{$val->maxamo}}" required>
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text">{{$currency->name}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">{{__('Deposit charge')}}</label>
                                                                <div class="input-group">
                                                                    <input type="number" step="any" name="charge" maxlength="10" class="form-control"value="{{$val->charge}}">
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text">%</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($val->id==101)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('PAYPAL BUSINESS EMAIL')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    @elseif($val->id==102)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Perfect Money USD account')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Alternate passphrase')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @elseif($val->id==103)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Secret key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Publishable key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @elseif($val->id==104)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Merchant email')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Secret key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        @elseif($val->id==107)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Public key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Secret key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        @elseif($val->id==108)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Public key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Secret key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @elseif($val->id==501)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Api key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Xpub code')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @elseif($val->id==505)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Public key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Private key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                      
                                                        @elseif($val->id==506)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Public key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Private key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        @elseif($val->id==507)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('API key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>                                                       
                                                        @elseif($val->id==508)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Public Key')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Secret Key')}}</label>
                                                                    <input type="text" value="{{$val->val2}}" class="form-control" id="val2" name="val2">
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Merchant Key')}}</label>
                                                                    <input type="text" value="{{$val->val3}}" class="form-control" id="val3" name="val3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">{{__('Payment Details')}}</label>
                                                                    <input type="text" value="{{$val->val1}}" class="form-control" id="val1" name="val1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="form-group">
                                                            <label class="col-form-label">{{__('Status')}}</label>
                                                            <select class="form-control select" name="status">
                                                                <option value="1" 
                                                                    @if($val->status==1)
                                                                        selected
                                                                    @endif
                                                                    >{{__('Active')}}
                                                                </option>
                                                                <option value="0"  
                                                                    @if($val->status==0)
                                                                        selected
                                                                    @endif
                                                                    >{{__('Deactive')}}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{__('Close')}}</button>
                                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save changes')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop