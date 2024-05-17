@extends('layouts.website')
@section('contents')
<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h2>Contact</h2>
                <p><a href="#">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>contact</span></p>
            </div>
        </div>
    </div>
</section>
<!-- About Banner End -->
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
<!-- Contact part Start -->
<section id="account">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact">
                    <form method="post" action="{{route('website.product-order.store')}}" enctype="multipart/form-data">
                        @csrf
                        <h3>Order Your Product with Sample Basis</h3>
                        <div class="col-md-6 pl0 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="ClientName" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 email">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6 pl0 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="contactNumber" placeholder="Enter your Phone or Imo or whatsApp or Skype ID" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 location">
                            <div class="form-group">
                                <input type="file" class="form-control" name="samplePicture" require>
                            </div>
                        </div>
                        <div class="col-md-12 pl0">
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="message" placeholder="Message" maxlength="140" rows="3"></textarea>
                                <div class="sub">
                                    <button type="submit" class="btn"><i class="fa fa-paper-plane"></i> </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-us">
                    <h3>Contact with us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.</p>
                    <p><i class="fa fa-map-marker"></i> <a href="#">{{ $comProfile->comp_address}}</a> </p>
                    <p><i class="fa fa-phone"></i> <a href="tel:{{ $comProfile->comp_mobile1}}">{{ $comProfile->comp_mobile1}}</a>,<a href="tel:{{ $comProfile->comp_mobile2}}"> {{ $comProfile->comp_mobile2}}</a> </p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:{{ $comProfile->comp_email1}}">{{ $comProfile->comp_email1}}</a>,<a href="mailto:{{ $comProfile->comp_email2}}"> {{ $comProfile->comp_email2}}</a> </p>
                    <p><i class="fa fa-globe"></i> <a href="www.e-feri.com">www.e-feri.com</a>,<a href="www.infoferi.com">www.infoferi.com</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact part End -->

@endsection