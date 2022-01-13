@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-12">
        <h6 class="h2 d-inline-block mb-0 font-weight-bolder">{{__('Transactions')}}</h6>
      </div>
    </div>
    <div class="row" id="earnings">
      @if(count($profit)>0)
        <div class="col-md-12">
          <div class="card">
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-buttons">
                <thead>
                    <tr>
                    <th>{{__('S / N')}}</th>
                    <th>{{__('Reference ID')}}</th>
                    <th>{{__('Units')}}</th>
                    <th>{{__('Amount')}}</th>
                    <th>{{__('Profit')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Started')}}</th>
                    <th>{{__('End date')}}</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($profit as $k=>$val)
                    <tr>
                        <td>{{++$k}}.</td>
                        <td>{{$val->trx}}</td>
                        <td>{{$val->units}}</td>
                        <td>{{$currency->symbol.number_format($val->amount)}}</td>
                        <td>{{$currency->symbol.number_format($val->profit)}}</td>
                        <td>@if($val->status==1) Running @else Ended @endif</td>
                        <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                        <td>{{date("Y/m/d h:i:A", strtotime($val->expiring_date))}}</td>
                        <td><a href="{{route('view.sandplan', ['id' => $val->plan['slug']])}}"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
          </div>
        </div>
      @else
        <div class="col-md-12">
          <p class="text-center text-muted card-text mt-8">You have not sponsored any plan</p>
        </div>
      @endif
    </div>
@stop