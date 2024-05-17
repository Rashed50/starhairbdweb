@extends('layouts.website')
@section('contents')
<!-- About Banner Start -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h2>Product Details</h2>
                <p><a href="{{ url('/') }}">Home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Details</span></p>
            </div>
        </div>
    </div>
</section>
<!-- About Banner End -->

<!-- Product Details Part start -->
<section id="details-of-product">
    <div class="container">
        <div class="row">
            <div class="col-md-5 tahsan2">
                <div class="xzoom-container">


                    <img class="xzoom" id="xzoom-default" src="{{ asset($product->imagePath)}}" xoriginal="{{ asset($product->imagePath)}}" alt="Product Image" />
                    <div class="xzoom-thumbs">
                        <a href="{{asset('contents/frontend') }}/images/gallery/original/image1.jpg"><img class="xzoom-gallery" width="80" src="{{asset('contents/frontend') }}/images/gallery/thumbs/image1.jpg" xpreview="{{asset('contents/frontend') }}/images/gallery/preview/image1.jpg" alt=""></a>
                        <a href="{{asset('contents/frontend') }}/images/gallery/original/image2.jpg"><img class="xzoom-gallery" width="80" src="{{asset('contents/frontend') }}/images/gallery/preview/image2.jpg" alt=""></a>
                        <a href="{{asset('contents/frontend') }}/images/gallery/original/image3.jpg"><img class="xzoom-gallery" width="80" src="{{asset('contents/frontend') }}/images/gallery/preview/image3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="details-product-item col-md-7">
                <div class="product-details">
                 <div>
                     @php
                             $randomReview = rand(5, 99);
                             $randomRating = rand(3,5);
                     @endphp

                     <h3>{{$product->product_name}}</h3>
                     <h4>
                         @for($rt = 1; $rt <= $randomRating; $rt++)
                         <i class="fa fa-star"></i>
                         @endfor

                         <span>| ({{$randomReview}} Reviews)</span>
                     </h4>
                     <h5>Price:--</h5>
                     <p>{{$product->description}}</p>
                 </div>
                </div>
                <div class="color-select category">
                    <div class="checkbox chek2 checkbox-success check22">
                        <ul>
                            <li><span>Color</span></li>
                            <li>
                                <label for="checkbox11">Different Color Are Available</label>
                            </li>
                        </ul>
                    </div>
                    <div class="checkbox chek2 checkbox-success check33">
                        <ul>
                            <li><span>Size</span></li>
                            <li>
                                 <label for="checkbox11">Different Size Are Available</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="quantity">

                    <div class="handle-counter" id="handleCounter">
                        <div class="quan-head">
                            <h3>Quantity :</h3>
                        </div>
                        <div class="input">
                            <input type="text" value="1">
                        </div>
                        <div class="click">
                            <button class="counter-plus btn btn-primary">+</button>
                            <button class="counter-minus btn btn-primary">-</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="add-wishlist">
                    <!-- <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="#"><i class="fa fa-random"></i></a> -->
                    <!-- <a href="#"><i class="fa fa-shopping-basket"></i></a> -->
                </div>
                <div class="code-cate">
                    <p>Code<a href="#">: {{$product->code}}</a></p>
                    <p>Category<a href="#" class="tahsan3">: {{$product->product->product_type_name}}</a></p>
                    <p>Tags<a href="#" class="tahsan5">: {{$product->product_name}}</a></p>
                </div>
                <div class="share">
                    <h6>Share:</h6>
                    <a href="{{ $comProfile->comp_facebook}}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ $comProfile->comp_twitter}}"><i class="fa fa-twitter"></i></a>
                    <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a> -->
                    <a href="{{ $comProfile->comp_linkedin}}"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product details end -->

<!-- Product Discription Part start -->
<section id="discription">
    <div class="container">
        <div class="">
            <div class="">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                    <li><a>|</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                       <p>{{$product->description}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                         {{$product->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product discription end -->




<script>
    $(function($) {
        var options = {
            minimum: 1,
            maximize: 100,
            onChange: valChanged,
            onMinimum: function(e) {
                console.log('reached minimum: ' + e)
            },
            onMaximize: function(e) {
                console.log('reached maximize' + e)
            }
        }
        $('#handleCounter').handleCounter(options)
        $('#handleCounter2').handleCounter(options)
        $('#handleCounter3').handleCounter({
            maximize: 100
        })
    })

    function valChanged(d) {
        //            console.log(d)
    }
</script>
@endsection
