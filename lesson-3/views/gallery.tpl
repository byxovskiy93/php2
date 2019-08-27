<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fluid Gallery HTML5 CSS3 Template</title>
    <!--
    Fluid Gallery Template
    http://www.templatemo.com/tm-500-fluid-gallery
    -->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="/public/Font-Awesome-4.7/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="/public/css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="/public/css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="/public/css/templatemo-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- These two JS are loaded at the top for gray scale including the loader. -->

    <script src="/public/js/jquery-1.11.3.min.js"></script>
    <!-- jQuery (https://jquery.com/download/) -->

    <script>

        var tm_gray_site = false;

        if(tm_gray_site) {
            $('html').addClass('gray');
        }
        else {
            $('html').removeClass('gray');
        }
    </script>
</head>

<body>

<!-- Content -->
<div class="cd-hero">

    {{navigator}}

    <ul class="cd-hero-slider">

        <!-- Page 3 Gallery Three -->
            {{content}}
        <!-- Page 4 About -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

                    <div class="tm-about-page">

                        <div class="row tm-white-box-margin-b">
                            <div class="col-xs-12">
                                <div class="tm-flex">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                        <h2 class="tm-text-title">Multiple Columns</h2>
                                        <p class="tm-text">Set true or false in HTML page line number 40 to turn on off page color. Mauris elit elit, imperdiet nec lorem sed, finibus maximus mauris. Nam laoreet eros nec convallis placerat.</p>
                                    </div>
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                        <h2 class="tm-text-title">Class aptent taciti</h2>
                                        <p class="tm-text">Aenean congue nulla et ligula consectetur consequat. Nullam fringilla blandit risus vitae auctor. Donec sed sapien varius, tincidunt nulla ut, ultrices nisl.</p>
                                    </div>
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                        <h2 class="tm-text-title">Aenean auctor</h2>
                                        <p class="tm-text">Integer enim tortor, tempor quis augue luctus, condimentum porttitor urna. Maecenas condimentum suscipit tortor vitae convallis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row tm-white-box-margin-b">
                            <div class="col-xs-12">
                                <div class="tm-flex">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                        <h2 class="tm-text-title">Nulla vitae magna</h2>
                                        <p class="tm-text">Donec at felis at risus mattis efficitur. Pellentesque dui urna, blandit a congue ut, blandit sed eros. Sed sagittis consequat pellentesque. Vivamus eros turpis, lobortis sed fermentum euismod, vehicula id eros.</p>
                                    </div>
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                        <h2 class="tm-text-title">Pellentesque dui urna</h2>
                                        <p class="tm-text">Maecenas porta placerat lacus a lacinia. In imperdiet cursus erat, luctus molestie lorem congue at. Donec fringilla tortor non ipsum semper, sit amet aliquet magna rutrum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row tm-white-box-margin-b">
                            <div class="col-xs-12">
                                <div class="tm-flex">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                        <h2 class="tm-text-title">One Single Column</h2>
                                        <p class="tm-text">You can simply set <strong>var tm_gray_site = true;</strong> or <strong>var tm_gray_site = false;</strong> in the HTML top script tag to enable / disable gray scale or color of the page. Vivamus sit amet scelerisque diam. Donec congue feugiat consectetur. Donec facilisis, elit non suscipit pretium, lacus quam feugiat nulla, id tempus libero tellus ut nisi. Mauris non mi molestie, tristique nibh eu, auctor nibh. Fusce accumsan pretium ex in ullamcorper.</p>
                                        <p class="tm-text">Ut blandit nisi purus, eget imperdiet sapien sodales et. Duis euismod, elit in laoreet cursus, ante diam facilisis lacus, sit amet aliquam odio quam ut libero. Proin bibendum ex nec lorem semper euismod. Nulla sed urna at ligula maximus blandit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div> <!-- .cd-full-width -->

        </li>

        <!-- Page 5 Contact Us -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                    <div class="tm-contact-page">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tm-flex tm-contact-container">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                        <h2 class="tm-contact-info">Feel free to say Hi!</h2>
                                        <p class="tm-text">Nulla sed urna at ligula maximus blandit. Mauris nisi ligula, ultricies ac diam id, hendrerit tincidunt ipsum. Maecenas non massa justo.</p>

                                        <!-- contact form -->
                                        <form action="index.html" method="post" class="tm-contact-form">

                                            <div class="form-group">
                                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                            </div>

                                            <div class="form-group">
                                                <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                            </div>

                                            <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>

                                        </form>
                                    </div>

                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                        <h2 class="tm-contact-info">4466 Old New St 28290, SF, California</h2>
                                        <!-- google map goes here -->
                                        <div id="google-map"></div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- .cd-full-width -->
        </li>
    </ul> <!-- .cd-hero-slider -->

    {{footer}}

</div>

<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->

<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>


<!-- load JS files -->

<script src="/public/js/tether.min.js"></script> <!-- Tether (http://tether.io/)  -->
<script src="/public/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="/public/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
<script src="/public/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

<script>

    function adjustHeightOfPage(pageNo) {

        var pageContentHeight = 0;

        var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

        if( pageType != undefined && pageType == "gallery") {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
        }
        else {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
        }

        // Get the page height
        var totalPageHeight = $('.cd-slider-nav').height()
            + pageContentHeight
            + $('.tm-footer').outerHeight();

        // Adjust layout based on page height and window height
        if(totalPageHeight > $(window).height())
        {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
        }
        else
        {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
        }
    }

    /*
        Everything is loaded including images.
    */
    $(window).load(function(){

        adjustHeightOfPage(1); // Adjust page height


        /* Collapse menu after click
        -----------------------------------------*/
        $('#tmNavbar a').click(function(){
            $('#tmNavbar').collapse('hide');

            adjustHeightOfPage($(this).data("no")); // Adjust page height
        });

        /* Browser resized
        -----------------------------------------*/
        $( window ).resize(function() {
            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

            // wait 3 seconds
            setTimeout(function() {
                adjustHeightOfPage( currentPageNo );
            }, 1000);

        });

        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
        $('body').addClass('loaded');

        // Write current year in copyright text.
        $(".tm-copyright-year").text(new Date().getFullYear());

    });

    /* Google map
    ------------------------------------------------*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(37.779724, -122.452152),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    // DOM is ready
    $(function() {
        loadGoogleMap(); // Google Map
    });

</script>

</body>
</html>