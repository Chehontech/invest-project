@extends('layout')
@section('css')

@stop
@section('content')
<div class="main-sh">
    <div class="main-content">
        <!-- Page content -->
        <div class="container check-plan-front mt--8 pb-5 mb-0">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="img-header">
                            <img class="card-img-top" src="{{url('/')}}/asset/images/{{$plan->image}}" alt="Image placeholder">
                        </div>
                        <div class="card-body des-project">
                            <span class="text-sm text-muted mb-0 progres-bar"> <cl> {{$plan->original-$plan->units}} </cl>  / {{$plan->original}}</span>
                            <div class="progress progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{(($plan->original-$plan->units)*100)/$plan->original}}%;"></div>
                            </div>
                            <h5 class="h2 card-title mb-0">{{$plan->name}}</h5>
                            <small class="text-muted text-uppercase">{{$plan->location}} - <cl>{{$plan->duration}}</cl> {{$plan->period}}(s)</small>
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col-6">
                                    <span class="form-text text-sm text-dark">{{__('Price')}}</span>
                                    <span class="form-text text-xs text-muted">{{$currency->symbol}}<cl>{{$plan->price}}</cl></span>
                                </div>
                                <div class="col-6"> 
                                    <span class="form-text text-sm text-dark right-text">{{__('Profit Margin')}}</span>
                                    <h4 class="mb-1 h1 form-text text-primary right-text">{{$plan->interest}}%</h4> 
                                </div>
                                <div class="col-6">
                                    <span class="form-text text-sm text-dark">{{__('Opening Date')}}</span>
                                    <span class="form-text text-xs text-muted">{{date("Y-m-d", strtotime($plan->start_date))}}</span>
                                </div>
                                <div class="col-6"> 
                                    <span class="form-text text-sm text-dark right-text">{{__('Closing Date')}}</span>
                                    <span class="form-text text-sm text-muted right-text">{{date("Y-m-d", strtotime($plan->expiring_date))}}</span> 
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mb-3">
                                <div class="col-12">
                                    <h5 class="h3 mb-3 card-title">{{__('Purchase Units')}}</h5>
                                    @if (Auth::guard('user')->check())
                                        @if($plan->units>0)
                                        <form role="form" action="{{route('user.sandcheck_plan')}}" method="post">
                                            @csrf

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-alternative">
                                                        <!--
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">#</span>
                                                        </div>
                                                        -->
                                                        <input type="number" class="form-control" placeholder="{{__('Units')}}" id="units" name="units" onkeyup="buycharge()"max="{{$plan->units}}" required>
                                                        <input type="hidden" name="plan" value="{{$plan->id}}">
                                                        <input type="hidden" name="price" id="price" value="{{$plan->price}}">
                                                        <input type="hidden" name="profitInput" id="profitInput" value="{{$plan->interest}}">
                                                        </div>
                                                    </div>    
                                                </div> 
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="form-control text-dark text-center">
                                                            <cl><span id="profitU">{{__('Your profit')}}</span></cl>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                            </div>
                                            
                                                                                           
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">{{__('Purchase')}} <span id="cardresult"></span></button>
                                            </div>
                                        </form>
                                            <!--
                                                <a href="#" data-toggle="modal" data-target="#buy{{$plan->id}}"   class="btn btn-sm btn-primary">Purchase Units</a>
                                            -->
                                        @endif
                                    @else
                                        <a href="{{url('/')}}/login"    class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                                    @endif
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center  campaning-block">
                        
                        <div class="col-md-8">
                            <div class="card header">
                                <div class="card-header">
                                    <h5 class="h3 mb-0">{{$plan->name_campaign}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="img-header">
                                    <a href="{{$plan->url_campaign}}" target="_blank">
                                        <!--<img class="card-img-top" src="{{url('/')}}/asset/images/{{$plan->image_campaign}}" alt="Image campaning">
                                        --><img class="card-img-top" src="https://invest.adder.com.ua/asset/images/BAM/1626944041_LOGO_white 400x400px.jpg" alt="Image campaning">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if ($plan->description_campaign)
                            <div class="col-md-12">
                                <hr class="hr-style">
                                <div class="desc-campaign">
                                        {!!$plan->description_campaign!!}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="card description">
                        <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h5 class="h3 mb-0">{{__('Description')}}</h5>
                            </div>
                            
                            <div class="col-4 text-right">
                            @if($plan->units>0)
                                @if($plan->start_date <= Carbon\Carbon::now()->isoFormat('M/D/Y') && $plan->expiring_date > Carbon\Carbon::now()->isoFormat('M/D/Y'))
                                    <a href="{{route('user.plans')}}"  class="btn btn-sm btn-success">{{__('Purchase Units')}}</a>
                                @endif
                            @endif
                            </div>
                        </div>
                        </div>
                        <hr class="hr-style">
                        <div class="card-body">
                        <p class="card-text text-sm ">{!!$plan->description!!}</p>
                            <div class="row card-category">
                                <div class="col-4">
                                @php
                                $category=App\Models\Sandplancategory::whereid($plan->cat_id)->first();
                                @endphp
                                    <span class="form-text text-sm text-muted">{{__('Category')}}: <cl>{{$category->name}}</cl></span>
                                </div>
                                <div class="col-4"> 
                                    <span class="form-text text-sm text-muted">{{__('Insurance')}}:<cl> @if($plan->insurance==1) {{__('Yes')}} @else {{__('No')}} @endif </cl></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">
                    @if (Auth::guard('user')->check())
                        <div class="card card-table">
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
                                            <td><a href="{{route('view.sandplan.update', ['id' => $val->id])}}"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card not-login justify-content-lg-center">
                            <div class="card-header header-elements-inline">
                                <h3 class="mb-0">{{__('Plan Updates')}}</h3>
                            </div>
                            <a href="{{url('/')}}/login" data-toggle="modal"   class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                        </div>
                        </div>
                    @endif
                </div>
                <div class="block-pdf info-star-box justify-content-lg-center row">
                    <div class="col-md-3 mb-7 mb-lg-0">
                        @if (Auth::guard('user')->check())
                        <a href="{{url('/')}}/asset/images/BAM/1627377261_DE_210714_Investment-Analyse_BAM_TW.pdf" target="_blank">
                        @else
                        <a href="{{url('/')}}/login" target="_blank">
                        @endif
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-file">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold">{{__('PDF prpject')}}</span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        @if (Auth::guard('user')->check())
                        <a href="{{url('/')}}/asset/images/BAM/1627466134_210728_BAM_exposé_IC_DE_v2.pdf" target="_blank">
                        @else
                        <a href="{{url('/')}}/login" target="_blank">
                        @endif
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-pie-chart">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold">{{__('PDF Analytics')}}</span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        @if (Auth::guard('user')->check())
                        <a href="{{url('/')}}/asset/images/BAM/1627316505_Beteiligungsdokumente_DE.pdf" target="_blank">
                        @else
                        <a href="{{url('/')}}/login" target="_blank">
                        @endif
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-sticky-note">
                                    
                                </i>
                                
                                </figure>
                                <span class="text-dark font-weight-bold">{{__('PDF Statut')}}</span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-7 mb-lg-0">
                        @if (Auth::guard('user')->check())
                        <a href="{{url('/')}}/asset/images/BAM/1627404717_20210727_BAM Pitch Deck_Companisto_DE_V8.pdf" target="_blank">
                        @else
                        <a href="{{url('/')}}/login" target="_blank">
                        @endif
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                            <!-- Stats -->
                            <div class="text-center px-md-3 px-lg-7">
                                <figure class="mb-3">
                                <i class="fas fa-newspaper-o">

                                </i>
                                </figure>
                                <span class="text-dark font-weight-bold">{{__('PDF presentation')}}</span>
                            </div>
                            <!-- End Stats -->
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="block-video justify-content-lg-center row">
                    <div class="col-md-12 mb-7 mb-lg-0 video-item">
                    @if (Auth::guard('user')->check())
                    <iframe src="https://www.youtube.com/embed/nvBgnEh0p4k" width="900" height="505" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <div class="card not-login justify-content-lg-center">
                            <div class="card-header header-elements-inline">
                                <h3 class="mb-0">{{__('Plan video')}}</h3>
                            </div>
                            <a href="{{url('/')}}/login" data-toggle="modal"   class="btn btn-sm btn-primary btn-not-login"> <i class="fas fa-lock" aria-hidden="true"></i>  For authorized users only</a>
                        </div>
                    @endif
                    </div>  
                </div>
                <div class="block-shares justify-content-lg-center row">
                    <div class="col-md-12 mb-7 mb-lg-0">
                    <script src="https://code.highcharts.com/stock/highstock.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
                    <script src="https://code.highcharts.com/stock/highcharts-more.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

                    <div id="containerG" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    <script>
                        Highcharts.getJSON('https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/range.json', function (data) {

                        Highcharts.stockChart('containerG', {

                        chart: {
                            type: 'columnrange'
                        },

                        rangeSelector: {
                            selected: 2
                        },

                        title: {
                            text: 'Shares variation by day'
                        },

                        tooltip: {
                            valueSuffix: '$'
                        },

                        series: [{
                            name: 'Shares',
                            data: data
                        }]

                        });
                        });
                    </script>
                    </div>
                </div>
            <div class="row justify-content-center back-btn mt-5">
                <a href="{{ url()->previous()}}"><i class="fad fa-long-arrow-alt-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buy{{$plan->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content form-block form-modal">
        <div class="modal-body p-0">
            <div class="card border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
                <div class="text-dark text-center mt-2 mb-3"><small>{{__('Purchase plan')}}</small></div>
                <div class="btn-wrapper text-center">
                <h4 class="text-uppercase ls-1 text-dark py-3 mb-0">{{$plan->name}}</h4>
                <div class="text-dark text-center mt-2 mb-3"><small>{{__('Your profit')}}</small> <cl><span id="profitU"></span></cl></div>
                </div>
            </div>
            <div class="card-body">
                <form role="form" action="{{route('user.sandcheck_plan')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">#</span>
                    </div>
                    <input type="number" class="form-control" placeholder="{{__('Units')}}" id="units" name="units" onkeyup="buycharge()"max="{{$plan->units}}" required>
                    <input type="hidden" name="plan" value="{{$plan->id}}">
                    <input type="hidden" name="price" id="price" value="{{$plan->price}}">
                    <input type="hidden" name="profitInput" id="profitInput" value="{{$plan->interest}}">
                    </div>
                </div>                                                   
                <div class="text-center">
                    <button type="submit" class="btn btn-neutral btn-block">{{__('Purchase')}} <span id="cardresult"></span></button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@stop