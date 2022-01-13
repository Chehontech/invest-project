@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Add status update')}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="{{route('admin.sand.status.store')}}" method="post" >
                        @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Information')}}</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="information" rows="5" class="form-control" required></textarea>
                                    <input type="hidden" name="plan" value="{{$plan}}">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Report')}}</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="report" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Activity')}}</label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="activity" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Stage')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="stage" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Weeks')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="weeks" class="form-control" required>
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