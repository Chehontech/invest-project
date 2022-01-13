@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">{{__('Users')}}</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-buttons">
                    <thead>
                        <tr>
                            <th>{{__('S/N')}}</th>
                            <th></th>
                            <th>{{__('Name')}}</th>                                                                      
                            <th>{{__('Username')}}</th>                                                                      
                            <th>{{__('Email')}}</th>                                                                      
                            <th>{{__('Status')}}</th>
                            <th>{{__('Balance')}}</th>
                            <th>{{__('Profit')}}</th>
                            <th>{{__('Referral Bonus')}}</th>
                            <th>{{__('Created')}}</th>
                            <th>{{__('Updated')}}</th>   
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $k=>$val)
                        <tr>
                            <td>{{++$k}}.</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fad fa-chevron-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="{{route('user.manage', ['id' => $val->id])}}" class="dropdown-item"><i class="fad fa-user"></i> {{__('Manage customer')}}</a>
                                        <a href="{{route('admin.email', ['email' => $val->email,'name' => $val->username])}}" class="dropdown-item"><i class="fad fa-envelope"></i> {{__('Send email')}}</a>
                                        @if($val->status==0)
                                            <a class='dropdown-item' href="{{route('user.block', ['id' => $val->id])}}"><i class="fad fa-ban"></i> {{__('Block')}}</a>
                                        @else
                                            <a class='dropdown-item' href="{{route('user.unblock', ['id' => $val->id])}}"><i class="fad fa-check"></i> {{__('Unblock')}}</a>
                                        @endif
                                        <a data-toggle="modal" data-target="#delete{{$val->id}}" href="" class="dropdown-item"><i class="fad fa-trash"></i> {{__('Delete')}}</a>
                                    </div>
                                </div>
                            </td> 
                            <td>{{$val->first_name.' '.$val->last_name}}</td>
                            <td>{{$val->username}}</td>
                            <td>{{$val->email}}</td>
                            <td>
                                @if($val->status==0)
                                    <span class="badge badge-info badge-pill">{{__('Active')}}</span>
                                @elseif($val->status==1)
                                    <span class="badge badge-danger badge-pill">{{__('Blocked')}}</span> 
                                @endif
                            </td>   
                            <td>{{$currency->symbol.number_format($val->balance)}}</td> 
                            <td>{{$currency->symbol.number_format($val->profit)}}</td> 
                            <td>{{$currency->symbol.number_format($val->ref_bonus)}}</td> 
                            <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>  
                            <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>                  
                        </tr>
                        <div class="modal fade" id="delete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content form-block form-modal">
                                    <div class="modal-body p-0">
                                        <div class="card bg-white border-0 mb-0">
                                            <div class="card-header">
                                                <h3 class="mb-0 font-weight-bolder">{{__('Delete User')}}</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                <span class="mb-0 text-xs">{{__('Are you sure you want to delete this?')}}</span>
                                            </div>
                                            <div class="card-body">
                                                <a  href="{{route('user.delete', ['id' => $val->id])}}" class="btn btn-danger btn-block">{{__('Proceed')}}</a>
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