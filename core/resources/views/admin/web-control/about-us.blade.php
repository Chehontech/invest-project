@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                <a data-toggle="modal" data-target="#create" href="" class="btn btn-sm btn-neutral add-elem"><i class="fa fa-plus"></i> {{__('Add image')}}</a>
                </div>
                </div>
            </div>
        </div>
        <div id="create" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content form-block form-modal">
                    <div class="modal-header">   
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="{{url('admin/createabout')}}" enctype="multipart/form-data" method="post">
                    @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang2" name="image" lang="en" required>
                                    <label class="custom-file-label" for="customFileLang2">{{__('Choose Media')}}</label>
                                </div>
                            </div>                 
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="mb-0"> {{ __('About us')}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('about-us.update')}}" method="post">
                @csrf
                    <div class="form-group row">
                        <div class="col-lg-12">
                        <textarea type="text" name="about" class="tinymce form-control">{{$value->about}}</textarea>
                        </div>
                    </div>                
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-sm">{{ __('Save')}}</button>
                    </div>
                </form>
            </div>
        </div> 
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">{{__('Images')}}</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-buttons">
                    <thead>
                        <tr>
                            <th>{{__('S/N')}}</th>
                            <th>{{__('Image')}}</th>
                            <th>{{__('Created')}}</th>
                            <th>{{__('Updated')}}</th>
                            <th class="text-center">{{__('Action')}}</th>    
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($image as $k=>$val)
                        <tr>
                            <td>{{++$k}}.</td>
                            <td><img src="{{url('/')}}/asset/images/{{$val->image}}" class="blog-imaged"></td> 
                            <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                            <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                            <td class="text-center">
                                <div class="">
                                    <div class="dropdown">
                                        <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a data-toggle="modal" data-target="#delete{{$val->id}}" href="" class="dropdown-item">{{ __('Delete')}}</a>
                                        </div>
                                    </div>
                                </div> 
                            </td>                   
                        </tr>
                        <div class="modal fade" id="delete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                <div class="modal-content form-block form-modal">
                                    <div class="modal-body p-0">
                                        <div class="card bg-white border-0 mb-0">
                                            <div class="card-header">
                                                <h3 class="mb-0">{{__('Are you sure you want to delete this?')}}</h3>
                                            </div>
                                            <div class="card-body px-lg-5 py-lg-5 text-right">
                                                <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{ __('Close')}}</button>
                                                <a  href="{{route('about.delete', ['id' => $val->id])}}" class="btn btn-danger btn-sm">{{ __('Proceed')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach               
                    </tbody>                    
                </table>
            </div>
        </div>
@stop