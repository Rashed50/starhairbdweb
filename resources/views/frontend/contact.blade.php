@extends('layouts.website')
@section('contents')
<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h2>Contact</h2>
                <p><a href="#">Home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Contact</span></p>
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
                    <form method="post" action="{{route('website.contact-message.store')}}">
                        @csrf
                        <h3>Send us a Message</h3>
                        <div class="col-md-6 pl0 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="full_name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 email">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6 pl0 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 location">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="subject" required>
                            </div>
                        </div>
                        <div class="col-md-12 pl0">
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
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
                    <p> </p>
                    <p><i class="fa fa-map-marker"></i> <a href="#">{{ $comProfile->comp_address}}</a> </p>
                    <p><i class="fa fa-phone"></i> <a href="tel:{{ $comProfile->comp_mobile1}}">{{ $comProfile->comp_mobile1}}</a>,<a href="tel:{{ $comProfile->comp_mobile2}}"> {{ $comProfile->comp_mobile2}}</a> </p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:{{ $comProfile->comp_email1}}">{{ $comProfile->comp_email1}}</a>,<a href="mailto:{{ $comProfile->comp_email2}}"> {{ $comProfile->comp_email2}}</a> </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact part End -->

@endsection
