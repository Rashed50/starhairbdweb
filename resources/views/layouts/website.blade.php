<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/meanmenu.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/frontend') }}/css/media.css">

    @php 
        $comConObj = new App\Http\Controllers\admin\CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
    @endphp

    <title>StarHairBD</title>
</head>

<body>

    @include('layouts.includes.frontend.header')


    @yield('contents')

    <!-- Footer Part Start -->
    @include('layouts.includes.frontend.footer')
    <!-- Footer Part End -->

    <!-- Footer Bottom Start -->
    <section id="footer-btm" style="padding:0; font-size: 10px; ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="copywright">
                        <p>Copyright &copy; 2022. All right reserved by <a href="#">StarHairBD</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="copywright text-right">
                        <p>Developed by <a href="https://3iengineers.com/">3i Engineers</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Bottom End -->


    <script src="{{asset('contents/frontend') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('contents/frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/frontend') }}/js/slick.js"></script>
    <script src="{{asset('contents/frontend') }}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('contents/frontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('contents/frontend') }}/js/main.js"></script>
</body>

</html>