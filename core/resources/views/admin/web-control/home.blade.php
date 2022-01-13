@extends('master')

@section('content')
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">   
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Edit content')}}</h3>
                    </div>
                    <div class="card-body form-block">
                        <form action="{{route('homepage.update')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="header_title" class="form-control" value="{{$ui->header_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="header_body" rows="4" class="form-control">{{$ui->header_body}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="s2_title" class="form-control" value="{{$ui->s2_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="s2_body" rows="4" class="form-control">{{$ui->s2_body}}</textarea>
                                </div>
                            </div>                                                 
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="s6_title" class="form-control" value="{{$ui->s6_title}}">
                                </div>
                            </div>                                                                                                  
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="team" class="form-control" value="{{$ui->team}}">
                                </div>
                            </div>                         
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="plan_title" class="form-control" value="{{$ui->plan_title}}">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="plan_body" rows="4" class="form-control">{{$ui->plan_body}}</textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="item1_title" class="form-control" value="{{$ui->item1_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="item1_body" rows="4" class="form-control">{{$ui->item1_body}}</textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="item2_title" class="form-control" value="{{$ui->item2_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="item2_body" rows="4" class="form-control">{{$ui->item2_body}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <p>How it works</p>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="h1_t" class="form-control" value="{{$ui->h1_t}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="h1_b" rows="4" class="form-control">{{$ui->h1_b}}</textarea>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="h2_t" class="form-control" value="{{$ui->h2_t}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="h2_b" rows="4" class="form-control">{{$ui->h2_b}}</textarea>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="h3_t" class="form-control" value="{{$ui->h3_t}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="h3_b" rows="4" class="form-control">{{$ui->h3_b}}</textarea>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="h4_t" class="form-control" value="{{$ui->h4_t}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="h4_b" rows="4" class="form-control">{{$ui->h4_b}}</textarea>
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
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="blog-imaged" src="{{url('/')}}/asset/images/{{$ui->image1}}" alt="">
                        </div>
                        <form action="{{route('section1')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="section1" lang="en" required>
                                    <label class="custom-file-label" for="customFileLang">{{__('Choose Media')}}</label>
                                </div>
                            </div>                
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>           
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="blog-imaged" src="{{url('/')}}/asset/images/{{$ui->image2}}" alt="">
                        </div>
                        <form action="{{route('section2')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang1" name="section2" lang="en" required>
                                    <label class="custom-file-label sdsd" for="customFileLang1">{{__('Choose Media')}}</label>
                                </div>
                            </div>               
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>                
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="blog-imaged" src="{{url('/')}}/asset/images/{{$ui->image3}}" alt="">
                        </div>
                        <form action="{{route('section3')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang2" name="section3" lang="en" required>
                                    <label class="custom-file-label sdss" for="customFileLang2">{{__('Choose Media')}}</label>
                                </div>
                            </div>               
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>                 
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="blog-imaged" src="{{url('/')}}/asset/images/{{$ui->image4}}" alt="">
                        </div>
                        <form action="{{route('section4')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang2" name="section4" lang="en" required>
                                    <label class="custom-file-label sdss" for="customFileLang2">{{__('Choose Media')}}</label>
                                </div>
                            </div>               
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>                 
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="blog-imaged" src="{{url('/')}}/asset/images/{{$ui->image5}}" alt="">
                        </div>
                        <form action="{{route('section5')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang2" name="section5" lang="en" required>
                                    <label class="custom-file-label sdss" for="customFileLang2">{{__('Choose Media')}}</label>
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