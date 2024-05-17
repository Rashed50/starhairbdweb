@extends('layouts.website')
@section('contents')


<section id="featured">
    <div class="container">
        <div class="row">
            <div class="featured-main">
                <div class="heading text-center">
                      <h2>Our Latest Products</h2>
                </div>
                <div class="featured-filter">
                    <div class="text-center">
                        <button class="btn btn-default active filter-button" data-filter="all">All</button>
                        <!-- <button class="btn btn-default filter-button" data-filter="men">men</button>
                        <button class="btn btn-default filter-button" data-filter="women">women</button>
                        <button class="btn btn-default filter-button" data-filter="child">children</button> -->
                        @foreach($allType as $type)
                        <button class="btn btn-default filter-button" data-filter="{{ $type->product_type_id}}">{{ $type->product_type_name}}</button>
                        @endforeach
                    </div>

                    @foreach($allProduct as $product)
                    <div class="gallery_product col-md-3 col-sm-4 filter {{ $type->product_type_id}}">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset($product->imagePath) }}" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>{{$product->product_name}}</p><span>Price:--</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="featured">
    <div class="container">
        <div class="row">
            <div class="featured-main">
                <div class="heading text-center">
                    <h2> Our featured Products</h2>
                </div>
                <div class="featured-filter">
                    <div class="text-center">
                        <button class="btn btn-default active filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="men">men</button>
                        <button class="btn btn-default filter-button" data-filter="women">women</button>
                        <button class="btn btn-default filter-button" data-filter="child">children</button>
                        <button class="btn btn-default filter-button" data-filter="access">accesorries</button>
                    </div>

                    <div class="gallery_product col-md-3 col-sm-4 filter men">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured1.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Woolen T-Shirt</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter women">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured3.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter men access">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured4.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>T-Shirt for Women</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter women child">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured2.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Silk Skirt</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter men">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured1.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Woolen T-Shirt</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter women access">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured4.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>T-Shirt for women</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter men">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured2.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Silk Skirt</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>
                    <div class="gallery_product col-md-3 col-sm-4 filter women child">
                        <div class="featured-product">
                            <a href="product-details.html"><img src="{{asset('contents/frontend') }}/images/featured3.jpg" alt="featured-product-img" class="img-responsive"></a>
                            <div class="overlay2 text-center">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-random"></i></a>
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                        </div>
                        <div class="feat-details">
                            <p>Woolen T-Shirt ash</p><span>$ 99.00</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection
