@extends('userlayout')

@section('content')
<div class="container-fluid mt--6 user-tiket">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="">
          <div class="card-body">
            <div class="">
              <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> {{__('Open Ticket')}}</a>
              <a data-toggle="modal" data-target="#modal-formx-add" href="" class="btn btn-sm btn-neutral"><i class="fad fa-plus"></i> {{__('Create an investment project')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-body p-0">
                <div class="card border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0">{{__('Open Ticket')}}</h3>
                  </div>
                  <div class="card-body">
                    <form action="{{route('submit-ticket')}}" method="post">
                      @csrf
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Subject')}}</label>
                        <div class="col-lg-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="subject" class="form-control" required="">
                          </div>
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Priority')}}</label>
                        <div class="col-lg-10">
                        <select class="form-control select" name="category" required>
                          <option  value="Low">{{__('Low')}}</option>
                          <option  value="Medium">{{__('Medium')}}</option> 
                          <option  value="High">{{__('High')}}</option>
                        </select>
                      </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Details')}}</label>
                        <div class="col-lg-10">
                          <textarea name="details" class="form-control" rows="4" required></textarea>
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
        <div class="modal fade" id="modal-formx-add" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content form-block form-modal">
              <div class="modal-body p-0">
                <div class="card border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0">{{__('Create an investment project')}}</h3>
                  </div>
                  <div class="card-body">
                    <form action="{{route('submit-ticket-plan')}}" method="post">
                      @csrf
                      <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Name')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Duration')}}</label>
                                <div class="col-lg-10">
                                    <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" id="duration" class="form-control" placeholder="1" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Period')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="period" data-fouc required>    
                                        <option value="Day">{{__('Day - 1')}}</option>                                         
                                        <option value="Week">{{__('Week - 7')}}</option>                                         
                                        <option value="Month">{{__('Month - 30')}}</option>                                         
                                        <option value="Year">{{__('Year - 365')}}</option>                                       
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Category')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        @foreach($category as $k=>$val) 
                                        <option value="{{$val->id}}">{{$val->name}}</option>    
                                        @endforeach                                                                          
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Interest')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="interest" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Price')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="price" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">{{$currency->name}}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Units')}}</label>
                                <div class="col-lg-10">
                                        <input type="number" step="any" name="units" class="form-control" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="exampleDatepicker">{{__('Start date')}}</label>
                                <div class="col-lg-10">
                                    <input type="date-local" name="start_date" class="form-control datepicker" value="06/20/2020" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Location')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="location" class="form-control" required>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Status')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status" required>
                                        <option value="1">{{__('Active')}}
                                        </option>
                                        <option value="0">{{__('Disable')}}
                                        </option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Insurance')}}</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="insurance" required>
                                        <option value="1">{{__('Yes')}}
                                        </option>
                                        <option value="0">{{__('No')}}
                                        </option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Referral percent:')}}</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en" required>
                                    <label class="custom-file-label" for="customFileLang">{{__('Choose Media')}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12">{{__('Description')}}</label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="4" name="description" class="form-control tinymce"></textarea>
                                </div>
                            </div>
                            <!-- campaign -->
                            <hr class="my-3">
                              
                            <div class="card-header">
                                <h3 class="card-title">{{__('Campaign Info')}}</h3>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileCampaign" name="imageCampaign" lang="en" required>
                                    <label class="custom-file-label" for="customFileCampaign">{{__('Choose Avatar Campaign')}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Name Campaign')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_campaign" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Url Campaign')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="url_campaign" class="form-control" >
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12">{{__('Description Campaign')}}</label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="4" name="description_campaign" class="form-control tinymce"></textarea>
                                </div>
                            </div>
                            <!-- campaign -->
                            <!-- file -->
                            <hr class="my-3">
                            <!-- file -->
                            <div class="card-header">
                                <h3 class="card-title">{{__('Add File')}}</h3>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_pdf" name="customFile_pdf" lang="en" >
                                    <label class="custom-file-label" for="customFile_pdf">{{__('Choose PDF')}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_analyse" name="customFile_analyse" lang="en" >
                                    <label class="custom-file-label" for="customFile_analyse">{{__('Choose PDF Analyse')}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_statut" name="customFile_statut" lang="en" >
                                    <label class="custom-file-label" for="customFile_statut">{{__('Choose PDF Statut')}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile_presentation" name="customFile_presentation" lang="en" >
                                    <label class="custom-file-label" for="customFile_presentation">{{__('Choose PDF Presentation')}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">{{__('Video Url')}}</label>
                                <div class="col-lg-10">
                                    <input type="text" name="video_sand" class="form-control" placeholder="Add YouTube url" >
                                </div>
                            </div> 
                            
                            <!-- file -->

                            <hr class="my-3">
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Subject')}}</label>
                        <div class="col-lg-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="subject" class="form-control" required="">
                          </div>
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Details')}}</label>
                        <div class="col-lg-10">
                          <textarea name="details" class="form-control" rows="4" required></textarea>
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
      </div>
    </div>  
    <div class="row">
      @if(count($ticket)>0)
        @foreach($ticket as $k=>$val)
          <div class="col-md-6">
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-7">
                      <!-- Title -->
                      <h5 class="h4 mb-0">#{{$val->ticket_id}}</h5>
                    </div>
                    <div class="col-5 text-right">
                      <a href="{{url('/')}}/user/reply-ticket/{{$val->ticket_id}}" class="btn btn-sm btn-neutral">{{__('Reply')}}</a>
                      <a href="{{url('/')}}/user/ticket/delete/{{$val->id}}" class="btn btn-sm btn-danger">{{__('Delete')}}</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p class="text-sm text-dark mb-0">{{__('Subject')}}: {{$val->subject}}</p>
                      <p class="text-sm text-dark mb-0">{{__('Priority')}}: {{$val->priority}}</p>
                      <p class="text-sm text-dark mb-0">{{__('Status')}}: @if($val->status==0){{__('Open')}} @elseif($val->status==1){{__('Closed')}} @elseif($val->status==2){{__('Resolved')}} @endif</p>
                      <p class="text-sm text-dark mb-0">{{__('Created')}}: {{date("Y/m/d h:i:A", strtotime($val->created_at))}}</p>
                      <p class="text-sm text-dark mb-0">{{__('Updated')}}: {{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        @endforeach
      @else
      <div class="col-md-12 mb-5">
          <div class="text-center mt-8">
            <div class="mb-3">
              <img src="{{url('/')}}/asset/images/empty.svg">
            </div>
            <h3 class="text-dark">No Ticket</h3>
            <p class="text-dark text-sm card-text">We couldn't find any support ticket to this account</p>
          </div>
        </div>
      @endif
    </div>
    <div class="row">
      <div class="col-md-12">
      {{ $ticket->links('pagination::bootstrap-4') }}
      </div>
    </div>
@stop