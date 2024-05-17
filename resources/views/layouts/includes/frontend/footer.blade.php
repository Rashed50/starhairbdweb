<section id="footer">
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="footer-main">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="{{asset($comProfile->com_logo) }}" alt="rashed">
                                </a>
                                <p> </p>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="contact">
                                <h2>Contact us</h2>
                                <p><i class="fa fa-map-marker"></i> <a href="#">{{ $comProfile->comp_address}}</a> </p>
                                <p><i class="fa fa-phone"></i> <a href="tel:{{ $comProfile->comp_mobile1}}">{{ $comProfile->comp_mobile1}}</a>,<a href="tel:{{ $comProfile->comp_mobile2}}"> {{ $comProfile->comp_mobile2}}</a> </p>
                                <p><i class="fa fa-envelope"></i> <a href="mailto:{{ $comProfile->comp_email1}}">{{ $comProfile->comp_email1}}</a>,<a href="mailto:{{ $comProfile->comp_email2}}"> {{ $comProfile->comp_email2}}</a> </p>
                                <p><i class="fa fa-globe"></i>  <a href="www.hairwigbd.com">Hair Wig BD</a> </p>
                            </div>

                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="account">
                                <!-- <h2>my account</h2>
                               <a href="my-account.html">my account</a>
                               <a href="shopping-cart.html">wishlist</a>
                               <a href="shopping-cart.html">shopping cart</a>
                               <a href="#">compare</a>
                               <a href="checkout.html">checkout</a> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="newsletter">
                                <h2>Contact with us For Latest Products Information</h2>
                                <form>
                                    <div class="input-group">
                                        <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required />
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </span>
                                    </div>
                                </form>
                                <div class="footer-social">
                                    <h3>Follow us on</h3>
                                    <a href="{{ $comProfile->comp_facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ $comProfile->comp_twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                    <a href="{{ $comProfile->comp_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
