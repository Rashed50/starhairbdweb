<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> STAR HAIR BD </a></div>
<div class="sl-sideleft">

  <div class="sl-sideleft-menu">
    <a href="{{url('/')}}" target="_blank" class="sl-menu-link active">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div>
      <!-- menu-item -->
    </a>
    <!-- sl-menu-link -->

        <a href="#" class="sl-menu-link @yield('Product-Details')">
         <div class="sl-menu-item">
           <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
           <span class="menu-item-label">Product-Info </span>
           <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
       </a>
       <!-- sl-menu-link -->
       <ul class="sl-menu-sub nav flex-column">
         <li class="nav-item"><a href="{{ route('product-type.index') }}" class="nav-link @yield('Product-Type')">Product Type</a></li>
         <li class="nav-item"><a href="{{ route('product.index') }}" class="nav-link @yield('Product-Type')">Product Name</a></li>
       </ul>
 
      <!-- multiple menu -->
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>

        <span class="menu-item-label">Admin Setting </span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div>
    </a>
    <!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
    <li class="nav-item"><a href="{{ route('company.frofile') }}" class="nav-link @yield('Company-Profile')">Company Profile</a></li>
    <li class="nav-item"><a href="{{ route('customer.message') }}" class="nav-link @yield('Customer-Message')">Customer Message</a></li>
    <li class="nav-item"><a href="{{ route('customer.order.message') }}" class="nav-link @yield('Customer-order')">Order Message</a></li>
    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link @yield('logout')" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a></li>
  </ul>


  </div>
  <!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
