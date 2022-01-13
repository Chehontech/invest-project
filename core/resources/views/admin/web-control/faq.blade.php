@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                <a data-toggle="modal" data-target="#create" href="" class="btn btn-sm btn-neutral add-elem"><i class="fa fa-plus"></i> {{__('Faq')}}</a>
                <a data-toggle="modal" data-target="#cat" href="" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> {{__('Category')}}</a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0 h4 text-dark font-weight-bolder">{{ __('Category')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush">
                            <thead>
                                <tr>
                                    <th>{{ __('S/N')}}</th>
                                    <th class="scope"></th> 
                                    <th>{{ __('Name')}}</th>
                                    <th>{{ __('Created')}}</th>
                                    <th>{{ __('Updated')}}</th>   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($fcat as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td class="text-center">
                                        <div class="">
                                            <div class="dropdown">
                                                <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fad fa-chevron-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a data-toggle="modal" data-target="#catdelete{{$val->id}}" href="" class="dropdown-item">{{ __('Delete')}}</a>
                                                    <a data-toggle="modal" data-target="#catupdate{{$val->id}}" href="" class="dropdown-item">{{ __('Edit')}}</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>   
                                    <td>{{$val->name}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>                  
                                </tr>
                                <div class="modal fade" id="catdelete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-body p-0">
                                                <div class="card bg-white border-0 mb-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0">{{__('Are you sure you want to delete this?')}}</h3>
                                                    </div>
                                                    <div class="card-body px-lg-5 py-lg-5 text-right">
                                                        <button type="button" class="btn btn-neutral btn-sm" data-dismiss="modal">{{ __('Close')}}</button>
                                                        <a  href="{{route('delete.faqcategory', ['id' => $val->id])}}" class="btn btn-danger btn-sm">{{ __('Proceed')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="catupdate{{$val->id}}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header"> 
                                                <h4>Edit Category</h4>  
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{route('faqcat.update')}}" method="post">
                                            @csrf
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$val->name}}">
                                                            <input type="hidden" name="id" value="{{$val->id}}">
                                                        </div>
                                                    </div>                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-block">{{__('Save')}}</button>
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
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0 h4 text-dark font-weight-bolder">{{ __('Faq')}}</h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th>{{__('S/N')}}</th>
                                    <th class="scope"></th> 
                                    <th>{{__('Category')}}</th>
                                    <th>{{__('Questions')}}</th>
                                    <th>{{__('Created')}}</th>
                                    <th>{{__('Updated')}}</th>
   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($faq as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td class="text-center">
                                        <div class="">
                                            <div class="dropdown">
                                                <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fad fa-chevron-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a data-toggle="modal" data-target="#delete{{$val->id}}" href="" class="dropdown-item">{{ __('Delete')}}</a>
                                                    <a data-toggle="modal" data-target="#update{{$val->id}}" href="" class="dropdown-item">{{ __('Edit')}}</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td> 
                                    <td>{{$val->cat['name']}}</td>
                                    <td>{{$val->question}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>                    
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
                                                        <a  href="{{route('faq.delete', ['id' => $val->id])}}" class="btn btn-danger btn-sm">{{ __('Proceed')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="update{{$val->id}}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content form-block form-modal">
                                            <div class="modal-header">  
                                                <h4>Edit FAQ</h4> 
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{route('faq.update')}}" method="post">
                                            @csrf
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <input type="text" name="question" class="form-control" value="{{$val->question}}" placeholder="Question">
                                                            <input type="hidden" name="id" value="{{$val->id}}">
                                                        </div>
                                                    </div>  
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <textarea type="text" name="answer" rows="4" class="form-control" placeholder="Answer">{{$val->answer}}</textarea>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <select class="form-control select" name="cat" data-dropdown-css-class="bg-info-800" data-fouc>
                                                                @foreach($fcat as $dval) 
                                                                <option value="{{$dval->id}}"
                                                                    @if($val->cat['id']==$dval->id)
                                                                        selected
                                                                    @endif
                                                                    >{{$dval->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>                 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-block">{{__('Save')}}</button>
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
    <div id="create" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content form-block form-modal">
                <div class="modal-header"> 
                    <h4>Create FAQ</h4>  
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('faq.create')}}" method="post">
                @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" name="question" class="form-control" placeholder="{{__('Question')}}" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <textarea type="text" name="answer" rows="4" class="form-control" placeholder="{{__('Answer')}}" ></textarea>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <select class="form-control select" name="cat" data-dropdown-css-class="bg-info-800" data-fouc>
                                    <option value="">Select Category</option>
                                    @foreach($fcat as $val) 
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block">{{__('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="cat" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content form-block form-modal">
                <div class="modal-header">   
                    <h4>Create Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('faqcat.create')}}" method="post">
                @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Category" required>
                            </div>
                        </div>              
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block">{{__('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop