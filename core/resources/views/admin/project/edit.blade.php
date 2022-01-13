@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                    <a  href="{{route('admin.sand.status.create', ['id' => $plan->id])}}" class="btn btn-sm btn-neutral add-elem"><i class="fa fa-plus"></i> {{__('Status Update')}}</a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0">{{__('Plan Updates')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                        <thead>
                            <tr>
                            <th>{{__('S / N')}}</th>
                            <th>{{__('Information')}}</th>
                            <th>{{__('Report')}}</th>
                            <th>{{__('Activity')}}</th>
                            <th>{{__('Stage')}}</th>
                            <th>{{__('Weeks')}}</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                            @foreach($updates as $k=>$val)
                            <tr>
                                <td>{{++$k}}.</td>
                                <td>{{str_limit($val->information, 10)}}</td>
                                <td>{{str_limit($val->report, 10)}}</td>
                                <td>{{str_limit($val->activity, 10)}}</td>
                                <td>{{$val->stage}}</td>
                                <td>{{$val->weeks}}</td>
                                <td class="text-center">
                                    <div class="text-right">
                                        <div class="dropdown">
                                            <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a href="{{route('admin.sand.plan.status.edit', ['id' => $val->id])}}" class="dropdown-item">{{__('Edit Update')}}</a>
                                                <a href="{{route('admin.sand.plan.status.image', ['id' => $val->id])}}" class="dropdown-item">{{__('Status Images')}}</a>
                                            </div>
                                        </div>
                                    </div> 
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Edit')}}</h3>
                    </div>
                    <div class="card-body form-block">
                        <p class="text-danger"></p>
                        <form action="{{route('admin.sand.plan.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Name')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="{{$plan->name}}" reqiured>
                                    <input type="hidden" name="id" value="{{$plan->id}}">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Category')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        @foreach($category as $k=>$val) 
                                        <option value="{{$val->id}}" @if($plan->cat_id==$val->id) {{__('selected')}} @endif>{{$val->name}}</option>    
                                        @endforeach                                                                          
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Location')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="location" value="{{$plan->location}}" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Status')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1" @if($plan->status==1){{__('selected')}} @endif>{{__('Active')}}</option>
                                        <option value="0" @if($plan->status==0){{__('selected')}} @endif>{{__('Disable')}}</option>
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Insurance')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="insurance">
                                        <option value="1" @if($plan->insurance==1){{__('selected')}} @endif>{{__('Yes')}}</option>
                                        <option value="0" @if($plan->insurance==0){{__('selected')}} @endif>{{__('No')}}</option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang">{{__('Choose Media')}} *</label>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="exampleDatepicker">{{__('Start date')}}</label>
                                <div class="col-lg-10">
                                    <input type="date-local" name="start_date" class="form-control datepicker" value="{{str_replace('-', '/', $plan->start_date)}}" required>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Referral percent')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" value="{{$plan->ref_percent}}" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                               
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12">{{__('Description')}}</label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="8" name="description" class="form-control tinymce">{{$plan->description}}</textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('Send')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>            
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="{{url('/')}}/asset/images/{{$plan->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop