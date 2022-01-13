@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Create')}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="{{route('admin.plan.store')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Name:')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Daily percent')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="percent" id="percent" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Duration')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" id="duration" class="form-control" placeholder="1" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">Days</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Compound Interest')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="compound" readonly id="compound" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Interest')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="interest" readonly id="interest" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Minimum amount:')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="min_amount" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">{{$currency->name}}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Maximum amount:')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="max_amount" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">{{$currency->name}}</span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Referral percent:')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Trading Bonus:')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="bonus" maxlength="10" placeholder="6" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Status:')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1">{{__('Active')}}
                                        </option>
                                        <option value="0">{{__('Disable')}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Claim profit anytime')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="claim">
                                        <option value="1">{{__('Yes')}}
                                        </option>
                                        <option value="0">{{__('No')}}
                                        </option>
                                    </select>
                                </div>
                            </div>                              
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Recurring Capital')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="recurring">
                                        <option value="1">{{__('Yes')}}
                                        </option>
                                        <option value="0">{{__('No')}}
                                        </option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang" style="border-color: {{$set->s_c}};">{{__('Choose Media')}} *optional</label>
                                </div>
                            </div>         
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@stop