<!DOCTYPE html>
<!-- PAGE LANGUAGE -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- PAGE TITLE, DESCRIPTION AND AUTHOR -->
    <title>About &raquo; Md Nazmul Hasan dalim</title>
    <meta name="description" content="My awesome page">
    <meta name="author" content="Md Nazmul Hasan dalim">

    <!-- ENABLE RESPOSIBILITY ON MOBILE DEVICES -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GOOGLE FONTS -->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- STYLES -->
    <!-- Blue and green version -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/styles-blue.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/styles-green.css') }}" />

    <link href="{{ asset('/assets/css/normalize.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('/assets/css/leaflet.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/magnific-popup.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/slick.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/slick-theme.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/socicon.css') }}" media="all" rel="stylesheet" type="text/css">
    <link id="page-stylesheet" href="{{ asset('/assets/css/styles-default.css') }}" media="all" rel="stylesheet"
        type="text/css">

    <!-- OR COMPRESSED STYLES -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/styles-default.min.css"/> -->

    <!-- FAVICON -->
    <link rel="stylesheet" href="{{ asset('/assets/css/customization814b.css?v=1542115081') }}" />
    <link rel="shortcut icon" href="https://www.themes.aroch.pl/aro/demo/images/favicon.ico" />
    <link href="{{ asset('/assets/css/portfolio.css') }}" media="all" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="customize-wrapper d-none d-md-block">
        <div class="icon-wrapper">
            <i class="fa fa-cog"></i>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-center"><strong>Customize</strong></h4>
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="background-color">Color version:</label>
                            <div class="colors">
                                <span class="color" data-file="../css/styles-default.min.css"
                                    style="background-color: #cc2127" title="Default"></span>
                                <span class="color" data-file="../css/styles-blue.min.css"
                                    style="background-color: #1487BC" title="Blue"></span>
                                <span class="color" data-file="../css/styles-green.min.css"
                                    style="background-color: #1FAD23" title="Green"></span>
                            </div>
                        </div>
                        <div class="switch-group" style="margin-bottom: 13px;">
                            <p><strong>My skill types:</strong></p>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="skill-type" class="class-switch" data-element=".skill"
                                        data-add-class="" data-remove-class="big small" autocomplete="off" checked>
                                    Default
                                </label>
                                <label class="btn btn-primary ">
                                    <input type="radio" name="skill-type" class="class-switch"
                                        data-element=".skill" data-add-class="small" data-remove-class="big"
                                        autocomplete="off"> Small
                                </label>
                                <label class="btn btn-primary ">
                                    <input type="radio" name="skill-type" class="class-switch"
                                        data-element=".skill" data-add-class="big" data-remove-class="small"
                                        autocomplete="off"> Large
                                </label>
                            </div>
                        </div>
                        <div class="switch-group" style="margin-bottom: 13px;">
                            <p><strong>Testimonial types:</strong></p>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="testimonial-type" class="element-switch"
                                        data-show=".testimonial-1" data-hide=".testimonial-2" autocomplete="off"
                                        checked> Default
                                </label>
                                <label class="btn btn-primary ">
                                    <input type="radio" name="testimonial-type" class="element-switch"
                                        data-show=".testimonial-2" data-hide=".testimonial-1" autocomplete="off">
                                    Author on bottom
                                </label>
                            </div>
                        </div>
                        <div class="switch-group" style="margin-bottom: 13px;">
                            <p><strong>My services box type:</strong></p>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="service-type" class="class-switch"
                                        data-element=".service-box p" data-add-class=""
                                        data-remove-class="with-padding" autocomplete="off" checked> Default
                                </label>
                                <label class="btn btn-primary ">
                                    <input type="radio" name="service-type" class="class-switch"
                                        data-element=".service-box p" data-add-class="with-padding"
                                        data-remove-class="" autocomplete="off"> With padding
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <!-- ASIDE BEGIN -->
                <div class="col-lg-3 col-md-4 col-12 aside-wrapper">
                    <aside>
                        <div class="aside-container">
                            <!-- PHOTO START -->
                            <div class="photo full-width">
                                <h2 class="name d-block d-md-none">Md Nazmul Hasan Dalim</h2>
                                <img src="https://www.citypng.com/public/uploads/preview/profile-user-round-red-icon-symbol-download-png-11639594337tco5j3n0ix.png" alt="Md Nazmul Hasan Dalim" />
                                <div class="description d-block d-md-none">I'm a programmer | web designer | traveler
                                </div>
                            </div>
                            <!-- PHOTO END -->
                            <nav>
                                <!-- NAVIGATION START -->
                                <div class="navbar navbar-expand-md d-block d-md-none">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#main-navigation" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="main-navigation" class="collapse navbar-collapse d-md-block">
                                    <ul class="navbar-nav">
                                        <li>
                                            <a class="active" href="{{ url('/') }}">About me</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/resume') }}">Resume</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/portfolio') }}">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- NAVIGATION END -->
                                <!-- NAVIGATION SOCIAL ICONS START -->
                                <div class="socials clearfix">
                                    <a href="https://nh-dalim.com/"><i class="socicon-wikipedia"></i></a>
                                    <a href="https://www.linkedin.com/in/nazmul-hasan-dalim/"><i
                                            class="socicon-linkedin"></i></a>
                                    <a href="https://github.com/dali0023"><i class="socicon-github"></i></a>
                                    <a href="https://www.youtube.com/channel/UCCD3nKer9_TJ1mwjAt7ukeQ"><i
                                            class="socicon-youtube"></i></a>

                                </div>
                                <!-- NAVIGATION SOCIAL ICONS END -->
                            </nav>
                        </div>
                        <!-- ASIDE FOOTER START -->
                        <footer>
                            <div class="copyrights d-none d-md-block">
                                All rights reserved
                                <a href="#">example.com</a>&nbsp;&copy;&nbsp;2023
                            </div>
                        </footer>
                        <!-- ASIDE FOOTER END -->
                    </aside>
                </div>
                <!-- ASIDE END -->
                <div class="col-lg-9 col-md-8 col-12 content-wrapper">
                    <!-- CONTENT HEADER START -->
                    <header class="d-none d-md-block">
                        <div class="header-wrapper">
                            <h1 class="name">Md Nazmul Hasan</h1>
                            <div class="description">I’m a programmer & web designer</div>
                        </div>
                    </header>
                    <!-- CONTENT HEADER END -->
                    <main class="content">
                        <!-- CONTENT START -->
                        @yield('content')
                        <!-- CONTENT END -->
                    </main>
                </div>
            </div>
        </div>
    </div> <!-- FOOTER START -->

    <!-- SCRIPTS -->
    <script src="{{ asset('/assets/js/scripts.min814b.js?v=1542115081') }}"></script>
    <script src="{{ asset('/assets/js/customization814b.js?v=1542115081') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script>
        $(function() {
            var filterList = {
                init: function() {
                    // MixItUp plugin
                    // http://mixitup.io
                    $(".portfolio-grid").mixItUp({
                        selectors: {
                            target: ".portfolio",
                            filter: ".filter",
                        },
                        load: {
                            filter: "all", // show app tab on first load
                        },
                    });
                },
            };
            // Run the show!
            filterList.init();
        });
    </script>
</body>

</html>
