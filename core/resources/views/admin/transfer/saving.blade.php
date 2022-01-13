
@extends('master')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0">{{__('Savings')}}</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-buttons">
          <thead>
            <tr>
              <th>{{__('S / N')}}</th>
              <th>{{__('Name')}}</th>
              <th>{{__('Amount')}}</th>
              <th>{{__('Reference ID')}}</th>
              <th>{{__('Purpose')}}</th>
              <th>{{__('Profit')}}</th>
              <th>{{__('End Date')}}</th>
              <th>{{__('Percent')}}</th>
              <th>{{__('Duration')}}</th>
              <th>{{__('Status')}}</th>
              <th>{{__('Created')}}</th>
              <th>{{__('Updated')}}</th>
            </tr>
          </thead>
          <tbody>  
            @foreach($savings as $k=>$val)
              <tr>
                <td>{{++$k}}.</td>
                <td>@if($val->user['id']==null) [Deleted] @else <a href="{{url('admin/manage-user')}}/{{$val->user['id']}}">{{$val->user['first_name'].' '.$val->user['last_name']}}</a> @endif</td>
                <td>{{$currency->symbol.number_format($val->amount, 2, '.', '')}}</td>
                <td>{{$val->ref_id}}</td>
                <td>{{$val->purpose}}</td>
                <td>{{$currency->symbol.number_format($val->profit, 2, '.', '')}}</td>
                <td>{{date("Y/m/d h:i:A", strtotime($val->end_date))}}</td>
                <td>{{$val->percent}}%</td>
                <td>{{$val->duration}}</td>            
                <td>
                    @if($val->status==0)
                        <span class="badge badge-pill badge-info"><i class="fad fa-spinner"></i> {{__('Still Running')}}</span>
                    @elseif($val->status==1)
                        <span class="badge badge-pill badge-success"><i class="fad fa-check"></i> {{__('Paid Off')}}</span>                        
                    @elseif($val->status==2)
                        <span class="badge badge-pill badge-danger"><i class="fad fa-close"></i> {{__('Cancelled')}}</span>
                    @endif
                </td>
                <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@stop