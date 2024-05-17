@extends('layouts.website')
@section('contents')

<section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Business</h2>
                   <p><a href="#">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Business</span></p>
               </div>
           </div>
       </div>
   </section>
<section id="blog">
    <div class="container">
        <div class="heading4 text-center" style="padding-bottom: 10px;">
            <h2>Business Profile</h2>
        </div>
        <hr>
        <div class="row" style="justify-content: space-between;">
            <div class="col-md-4">

                <img src="{{ asset($comProfile->com_logo)}}" alt="">
                <div class="com__add">
                    <h5>Mobile {{$comProfile->comp_mobile1}}</h5>
                    <h5>Email {{$comProfile->comp_email1}}</h5>
                    <p>{{$comProfile->comp_address}}</p>
                </div>
            </div>
            <div class="col-md-5 text-center com__name">
                <h1 class="text-danger mb-0" style="line-height: 0.5;">{{$comProfile->comp_name_en}}</h1>
                <h2 class="text-primary mt-0">{{$comProfile->comp_name_ban}}</h2>
            </div>
            <div class="col-md-3 com__owner" style="align-items:flex-end">
                <img height="100" src="{{ asset('contents/frontend/images/fet1.jpg')}}" alt="">
                <h3>Mr. Jhon Dow</h3>
                <h5>Mobile {{$comProfile->comp_mobile2}}</h5>
                <h5>Email {{$comProfile->comp_email2}}</h5>
                <p>{{$comProfile->comp_address}}</p>
            </div>
            <!-- <div class="blog-main">
                <div class="col-md-12 col-sm-12">
                    <div class="Privacy" style="border: 1px solid #fafafa;">
                        <div class="card" style="width: 80%; margin: 0 auto;">
                            <div class="card-body" style="margin: 0 auto; padding: 20px; align-items: center; text-align:center">
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">name</h4>
                                    <p style="padding-top: 10px;">nemo vel quae dolores ad totam cupiditate atque ipsa provident, omnis autem eius distinctio deleniti quod odio.</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">name</h4>
                                    <p style="padding-top: 10px;">nemo vel quae dolores ad totam cupiditate atque ipsa provident, omnis autem eius distinctio deleniti quod odio.</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">name</h4>
                                    <p style="padding-top: 10px;">nemo vel quae dolores ad totam cupiditate atque ipsa provident, omnis autem eius distinctio deleniti quod odio.</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
            </div> -->
        </div>
        <hr>
        <br>
        <!-- trade -->
        <div class="row">
            <div class="col-md-4">
                <img height="300" src="{{ asset($comProfile->comp_vat_file)}}" alt="">
            </div>

            <div class="col-md-8">
                <div class="col-md-12 col-sm-12">
                    <div class="Privacy" style="border: 1px solid #fafafa;">
                        <div class="card" style="width: 80%; margin: 0 auto;">
                            <div class="card-body" style="margin: 0 auto; padding: 20px; align-items: center; text-align:center">
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Trade Name</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_trade_licence}}</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Tax Number</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_tax_no}}</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Address</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_address}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- tin -->
        <div class="row">
            <div class="col-md-4">
                <img height="300" src="{{ asset($comProfile->comp_tax_file)}}" alt="">
            </div>

            <div class="col-md-8">
                <div class="col-md-12 col-sm-12">
                    <div class="Privacy" style="border: 1px solid #fafafa;">
                        <div class="card" style="width: 80%; margin: 0 auto;">
                            <div class="card-body" style="margin: 0 auto; padding: 20px; align-items: center; text-align:center">
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Tin Licens</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_address}}</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Vat Number</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_vat_no}}</p>
                                </div>
                                <div class="single-item" style="display: flex;">
                                    <h4 style="padding-right: 15px;">Address</h4>
                                    <p style="padding-top: 10px;">{{$comProfile->comp_address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection