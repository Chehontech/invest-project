@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="card-title">{{__('Edit team')}}</h3>
                    </div>
                    <div class="card-body form-block">
                        <p class="text-danger"></p>
                        <form action="{{route('team.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Name')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="{{$val->name}}">
                                    <input type="hidden" name="id" value="{{$val->id}}">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Position')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="position" class="form-control" value="{{$val->position}}">
                                </div>
                            </div>                         
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Image')}}:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang" style="border-color: {{$set->s_c}};">{{__('Choose Media')}}</label>
                                </div>
                            </div>             
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="{{url('/')}}/asset/review/{{$val->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop