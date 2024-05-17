@extends('layouts.website')
@section('contents')


<script type="text/javascript">
    $(function() {

        $.easing.elasout = function(x, t, b, c, d) {
            var s = 1.70158;
            var p = 0;
            var a = c;
            if (t == 0) return b;
            if ((t /= d) == 1) return b + c;
            if (!p) p = d * .3;
            if (a < Math.abs(c)) {
                a = c;
                var s = p / 4;
            } else var s = p / (2 * Math.PI) * Math.asin(c / a);
            return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
        };

        $('div.top a').click(function() { //$.scrollTo works EXACTLY the same way, but scrolls the whole screen
            $.scrollTo(this.hash, 1500, {
                easing: 'swing'
            });
            $(this.hash).find('span.message').text(this.title);
            return false;
        });

    });
</script>


<script type="text/javascript">
    var bgslides = new Array();
    var aURL = new Array();
    var aArtists = new Array();
    var iPrev = -1;
    var iRnd = -1;

    bgslides[0] = "application/layouts/scripts/haircoatbd/images/body-bg.jpg";
    bgslides[1] = "application/layouts/scripts/haircoatbd/images/bg-2.jpg";
    bgslides[2] = "application/layouts/scripts/haircoatbd/images/bg-3.jpg";

    $(document).ready(function() {

        /* Define the function that triggers to fade in the background as soon as the image has loaded */
        $("img#bg").load(function() {
            /* Fade in during 3 seconds */
            $("img#bg").fadeTo(3000, 1);

            /* Animate the picture description during 1 second */
            setTimeout(function() {
                $("#image_description").animate({
                    right: '+=150'
                }, 1000)
            }, 1000);

            /* Set the timeout to fade out the image and the description after 10 seconds*/
            setTimeout(function() {
                $("#image_description").animate({
                    right: '-=150'
                }, 1000);
                $("img#bg").fadeOut(100);

                /* Load the next image after 4 seconds */
                setTimeout(LoadImages, 200);
            }, 10000);
        })

        /* Start the slideshow one second after the page is ready */
        setTimeout(LoadImages, 1000);

    });

    function LoadImage(iNr) {

        /* Assign the new image to the background */
        $("img#bg").attr("src", bgslides[iNr]);

        /* Assign the artist name to the description */
        $("#image_artist").html(aArtists[iNr]);

        /* Assign the image url to the description */
        $("a#image_url").attr("href", aURL[iNr]);
        $("a#image_url").html("for sale @canvasinabox.com");

    };

    function LoadImages() {

        /* Select a random image number and make sure this is not equal to the previous image */
        while (iPrev == iRnd) {
            iRnd = Math.floor(Math.random() * bgslides.length);
        }

        /* Show the selected image */
        LoadImage(iRnd);

        iPrev = iRnd;

    };
</script>

</head>

<body>

    <!-- Header Start -->

    <script type="text/javascript">
        $(document).ready(function() {

            logOut('a.topbar_logout_btn', '<img src="application/layouts/scripts/haircoatbd/images/loader/ajax-loader-email.gif" />', '&nbsp;', 'Sign in');

        });
    </script>


    <!-- Header End -->

    <div id="main-container" class="container" style="margin-top:10px;">
        <!-- Left Sidebar Start -->
        @include('layouts.includes.frontend.custom-wing')

        <!-- Left Sidebar End -->

        <!-- Content Area Start-->
        <div class="col-md-9">

            <article id="content">

                <div style="">

                    <div class="mod mod-article">

                        <div class="article-icon">
                            <h1>Curl Ring</h1>
                        </div>
                        <div class="clear"></div>

                        <div id="article_content_area">
                            <div class="col-md-12 col-xs-18 col-sm-12 "><img class="img-responsive" src="{{ asset('uploads/Wave__Curl_Ring.jpg') }}" alt="" />
                                <br /><br />
                                <img class="img-responsive" src="{{ asset('uploads/Wave-Curl-Ring.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div>
                        </div>

                        <div class="clear">&nbsp;</div>

                        <!-- Getting All Comments from Comment Module and Add Comment Form -->
                        <!-- End of Getting All Comments from Comment Module Add Comment Form -->
                    </div>
                </div>

            </article>

        </div>
        <!-- Content Area End-->
    </div>
</body>

@endsection