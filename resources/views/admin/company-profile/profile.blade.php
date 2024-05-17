@extends('layouts.admin-master')
@section('title') Company Profile @endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">Star Hair BD</a>
    <span class="breadcrumb-item active">Profile</span>
</nav>

<div class="sl-pagebody">
    <!-- form -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-lg-8">
            <form class="form-horizontal company-form" id="registration" method="post" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="card-title card_top_title">Update Profile Information</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="card-body card_form">

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                @if(Session::has('success'))
                                <div class="alert alert-success alertsuccess" role="alert">
                                    <strong>Success!</strong> {{Session::get('success')}}
                                </div>
                                @endif
                                @if(Session::has('error'))
                                <div class="alert alert-danger alerterror" role="alert">
                                    <strong>Opps!</strong> {{Session::get('error')}}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group row custom_form_group{{ $errors->has('comp_name_en') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">English Name:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_name_en" value="{{ $profile->comp_name_en }}" required>
                                @if ($errors->has('comp_name_en'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_name_en') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_name_ban') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Bengoli Name:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_name_ban" value="{{ $profile->comp_name_ban }}" required>
                                @if ($errors->has('comp_name_ban'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_name_ban') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_email1') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Email 1:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="comp_email1" value="{{ $profile->comp_email1 }}" required>
                                @if ($errors->has('comp_email1'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_email1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row custom_form_group{{ $errors->has('comp_email2') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Email 2:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="comp_email2" value="{{ $profile->comp_email2 }}" required>
                                @if ($errors->has('comp_email2'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_email2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_phone1') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Phone 1:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_phone1" value="{{ $profile->comp_phone1 }}" required>
                                @if ($errors->has('comp_phone1'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_phone1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group">
                            <label class="col-sm-3 control-label">Phone 2:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_phone2" value="{{ $profile->comp_phone2 }}">

                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_mobile1') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Mobile 1:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_mobile1" value="{{ $profile->comp_mobile1 }}" required>
                                @if ($errors->has('comp_mobile1'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_mobile1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_mobile2') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Mobile 2:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_mobile2" value="{{ $profile->comp_mobile2 }}" required>
                                @if ($errors->has('comp_mobile2'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_mobile2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_skype') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Skype:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_skype" value="{{ $profile->comp_skype }}" required>
                                @if ($errors->has('comp_skype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_skype') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_whatsapp') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Whatsapp:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_whatsapp" value="{{ $profile->comp_whatsapp }}" required>
                                @if ($errors->has('comp_whatsapp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_whatsapp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_imo') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Imu:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_imo" value="{{ $profile->comp_imo }}" required>
                                @if ($errors->has('comp_imo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_imo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_facebook') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Facebook:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_facebook" value="{{ $profile->comp_facebook }}" required>
                                @if ($errors->has('comp_facebook'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_facebook') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_linkedin') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Linkedin:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_linkedin" value="{{ $profile->comp_linkedin }}" required>
                                @if ($errors->has('comp_linkedin'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_linkedin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_twitter') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Twitter:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_twitter" value="{{ $profile->comp_twitter }}" required>
                                @if ($errors->has('comp_twitter'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_twitter') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row custom_form_group{{ $errors->has('comp_support_number') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Contact Number:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_support_number" value="{{ $profile->comp_support_number }}" required>
                                @if ($errors->has('comp_support_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_support_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('long_value') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Long Value:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="long_value" value="{{ $profile->long_value }}" required>
                                @if ($errors->has('long_value'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('long_value') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('lat_value') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Lat Value:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="lat_value" value="{{ $profile->lat_value }}" required>
                                @if ($errors->has('lat_value'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lat_value') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('com_QRcode') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">QRcode:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="com_QRcode" value="{{ $profile->com_QRcode }}" required>
                                @if ($errors->has('com_QRcode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('com_QRcode') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row custom_form_group{{ $errors->has('comp_vat_no') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Vat Number:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_vat_no" value="{{ $profile->comp_vat_no }}" required>
                                @if ($errors->has('comp_vat_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_vat_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row custom_form_group{{ $errors->has('comp_tax_no') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Tax Number:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_tax_no" value="{{ $profile->comp_tax_no }}" required>
                                @if ($errors->has('comp_tax_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_tax_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_trade_licence') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Trade Licence:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_trade_licence" value="{{ $profile->comp_trade_licence }}" required>
                                @if ($errors->has('comp_trade_licence'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_trade_licence') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row custom_form_group{{ $errors->has('comp_hotline_number') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Hotline Number:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="comp_hotline_number" value="{{ $profile->comp_hotline_number }}" required>
                                @if ($errors->has('comp_hotline_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_hotline_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_address') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Address:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <textarea name="comp_address" class="form-control" required>{{ $profile->comp_address }}</textarea>
                                @if ($errors->has('comp_address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_description') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Description:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <textarea name="comp_description" class="form-control" required>{{ $profile->comp_description }}</textarea>
                                @if ($errors->has('comp_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_mission') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Mission:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <textarea name="comp_mission" class="form-control" required>{{ $profile->comp_mission }}</textarea>
                                @if ($errors->has('comp_mission'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_mission') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row custom_form_group{{ $errors->has('comp_vission') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Vision:<span class="req_star">*</span></label>
                            <div class="col-sm-7">
                                <textarea name="comp_vission" class="form-control" required>{{ $profile->comp_vission }}</textarea>
                                @if ($errors->has('comp_vission'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('comp_vission') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row custom_form_group">
                            <label class="col-sm-3 control-label">Logo:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="com_logo">
                            </div>
                            <div class="col-sm-4">
                                <img height="50" src="{{ asset($profile->com_logo) }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row custom_form_group">
                            <label class="col-sm-3 control-label">Vat File:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="comp_vat_file">
                            </div>
                            <div class="col-sm-4">
                                 <img height="50" src="{{ asset($profile->comp_vat_file) }}" alt=""> 
                            </div>
                        </div>
                        <div class="form-group row custom_form_group">
                            <label class="col-sm-3 control-label">Tax File:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="comp_tax_file">
                            </div>
                            <div class="col-sm-4">
                                  <img height="50" src="{{ asset($profile->comp_tax_file) }}" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer card_footer_button text-center">
                        <button type="submit" id="onSubmit" onclick="formValidation();" class="btn btn-primary waves-effect">{{ 'UPDATE'}}</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- list -->

    <!-- end list -->
</div>
@endsection