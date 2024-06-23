  <!-- Header Part Start -->
  <header id="header">
      <div class="container">
          <div class="row">
              <div class="header-content">
                  <div class="col-md-8">
                      <div class="header-left">
                          <div class="sel-box">
                              <a href="tel:{{$comProfile->comp_mobile1}}">Contact: {{ $comProfile->comp_mobile1}}</a>||
                                <a href="tel:{{$comProfile->comp_mobile1}}">Whatsapp: {{ $comProfile->comp_whatsapp}}</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                               <a href="https://www.messenger.com/t/100080326003770/"> 
                               <span id="StarChat" style="color:white;background:red; padding:7px; font-weight:bold;border-radius:3px;">Stat Chat</span> </a>  ,
                        </div>
                      </div>
                  </div>
                  <!-- <div class="col-md-4 col-md-offset-4">
                       <div class="header-right text-right">
                           <ul>
                               <li>
                                   <a href="shopping-cart.html"><i class="fa fa-heart"></i> Wishlist</a>
                               </li>
                               <li>
                                   <a href="my-account.html"><i class="fa fa-user"></i> My Account</a>
                               </li>
                               <li>
                                   <a href="my-account.html">Login / Register</a>
                               </li>
                           </ul>
                       </div>
                   </div> -->
              </div>
          </div>
      </div>
  </header>
  <!-- Header Part End -->

  <!-- mobile menu end -->
  <nav class="mobile-menu hidden">
      <a href="#">
          <img src="{{asset($comProfile->com_logo) }}" alt="rashed">
      </a>
      <ul>
          <li class="">
              <a href="{{ url('/') }}">
                  Home
              </a>
              <ul>
                  <!-- <a class="" href="#">Home 1</a>
              <a class="" href="index2.html">Home 2</a> -->
              </ul>
          </li>
          <li class="">
              <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  About Us
              </a>
              <!-- <ul>
                <a class="" href="product-grid-view.html">Product Grid View</a>
                <a class="" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                <a class="" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                <a class="" href="product-details.html">Product Details</a>
                </ul> -->
          </li>
          <!-- <li class="">
                <a class="" href="{{route('website.mission')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mission & Vision
                </a>
                <ul> -->
          <!-- <a class="" href="about.html">About</a>
              <a class="" href="shopping-cart.html">Cart</a>
              <a class="" href="checkout.html">Checkout</a>
              <a class="" href="my-account.html">Login</a>
              <a class="" href="my-account.html">Register</a>
              <a class="" href="shopping-cart.html">Whislist</a>
              <a class="" href="404.html">404</a> -->
          <!-- </ul>
            </li> -->
          <!-- <li class="">
              <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manufacturing</a>
              <ul>
                  <a class="" href="blog-grid-view.html">Blog Grid View</a>
                  <a class="" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
                  <a class="" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
                  <a class="" href="blog-details.html">Blog Details</a>
              </ul>
          </li> -->
          <li><a href="{{ route('website.mission') }}">Mission & Vision</a></li>
          <li><a href="{{ route('website.privacy') }}">Business Profile</a></li>
          <li><a href="{{ route('product.info') }}">Product Gallery</a></li>
          <li><a href="{{ route('website.contact-message') }}">Contact</a></li>
          <li><a href="{{ route('website.contact-message') }}">Message</a></li>
          <li><a href="{{ route('website.curlring') }}">Curl-Ring</a></li>
          <li><a href="{{ route('website.manufacturing') }}">Manufacturing</a></li>
      </ul>
  </nav>
  <!-- mobile menu end -->

  <!-- Navbar Part Start -->
  <nav class="navbar navbar-default hidden-xs">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{asset($comProfile->com_logo) }}" alt="rashed">
              </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <!--            <li class="active"><a href="{{ url('/') }}">Home</a></li>-->
                  <!--            <li><a href="product-grid-view.html">Men</a></li>-->
                  <!--            <li><a href="product-grid-view-with-sidebar.html">Women</a></li>-->
                  <!--            <li><a href="product-list-view-with-sidebar.html">Accesorries</a></li>-->
                  <!--            <li><a href="blog-grid-view.html">Blog</a></li>-->
                  <li><a class="dropdown-item" href="{{ route('website.index') }}">Home</a></li>
                  <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a> -->
                  <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/') }}">Home 1</a>
                  <a class="dropdown-item" href="index2.html">Home 2</a>
                </div> -->
                  <!-- </li> -->
                  <li><a class="dropdown-item" href="#">About Us</a></li>

                  <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('website.mission')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a> -->
                  <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="product-grid-view.html">Product Grid View</a>
                    <a class="dropdown-item" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                    <a class="dropdown-item" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                    <a class="dropdown-item" href="product-details.html">Product Details</a>
                    </div> -->
                  <!-- </li> -->

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Business Profile
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('website.privacy') }}">Business Profile</a>
                          <a class="dropdown-item" href="{{route('website.mission')}}">Mission & Vision</a>

                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manufacturing
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('website.manufacturing') }}">Manufacturing</a>
                          <a class="dropdown-item" href="{{ route('website.curlring') }}">Curl-Ring</a>

                      </div>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('product.info') }}">Product Gallery</a></li>
                  <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </a> -->
                  <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="blog-grid-view.html">Blog Grid View</a>
                    <a class="dropdown-item" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
                    <a class="dropdown-item" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                    </div> -->
                  <!-- </li> -->
                  <li><a href="{{ route('website.contact-message') }}">Contact</a></li>
                  <li><a href="{{ route('website.contact-message') }}">Message</a></li>

              </ul>
              <!-- <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
            <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a></span>

                  <div class="items text-left">
                      <div class="items-total">
                          <p>You have <span>02 items</span> in your shopping bag</p>
                      </div>
                      <div class="item-choose-main">
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{asset('contents/frontend') }}/images/items1.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="{{asset('contents/frontend') }}/images/items2.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="total-price">
                          <h3>Total <span>$ 500.00</span></h3>
                      </div>
                      <div class="items-check text-center">
                          <a href="#">view cart</a>
                          <a class="check-out" href="#">Checkout</a>
                      </div>
                  </div>
            </li>
           </ul> -->
          </div>
      </div>
  </nav>
  <!-- Navbar Part End -->

  <!-- mobile logo start -->
  <nav class="navbar-default visible-xs">
      <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{asset($comProfile->com_logo) }}" alt="logo" class="img-responsive">
              </a>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <form class="search-form">
                          <div class="form-group has-feedback">
                              <input type="text" class="form-control" name="search" placeholder="search">
                              <span class="glyphicon glyphicon-search form-control-feedback"></span>
                          </div>
                      </form>
                  </li>
                  <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
                      </span>

                      <div class="items text-left">
                          <div class="items-total">
                              <p>You have <span>02 items</span> in your shopping bag</p>
                          </div>
                          <div class="item-choose-main">
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/frontend') }}/images/items1.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty : 02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/frontend') }}/images/items2.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty : 02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="total-price">
                              <h3>Total <span>$ 500.00</span></h3>
                          </div>
                          <div class="items-check text-center">
                              <a href="#">view cart</a>
                              <a class="check-out" href="#">Checkout</a>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- mobile logo end -->
