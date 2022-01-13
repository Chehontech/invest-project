@extends('master')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row" id="earnings">
      @if(count($profit)>0)
        <div class="col-md-12">
          <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="mb-0">{{__('Investments')}}</h3>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                <thead>
                    <tr>
                    <th>{{__('S / N')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Reference ID')}}</th>
                    <th>{{__('Plan')}}</th>
                    <th>{{__('Units')}}</th>
                    <th>{{__('Amount')}}</th>
                    <th>{{__('Profit')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Started')}}</th>
                    <th>{{__('End date')}}</th>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($profit as $k=>$val)
                    <tr>
                        <td>{{++$k}}.</td>
                        <td><a href="{{url('admin/manage-user')}}/{{$val->user['id']}}">{{$val->user['first_name'].' '.$val->user['last_name']}}</a></td>
                        <td>#{{$val->trx}}</td>
                        <td>{{$val->plan['name']}}</td>
                        <td>{{$val->units}}</td>
                        <td>{{$currency->symbol.number_format($val->amount)}}</td>
                        <td>{{$currency->symbol.number_format($val->profit)}}</td>
                        <td>@if($val->status==1) Running @else Ended @endif</td>
                        <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                        <td>{{date("Y/m/d h:i:A", strtotime($val->expiring_date))}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
          </div>
        </div>
      @else
        <div class="col-md-12">
          <p class="text-center text-muted card-text mt-8">You have no investors yet</p>
        </div>
      @endif
    </div>
@stop