<!doctype html>
<html lang="en">

<!-- Mirrored from themes.ad-theme.com/html/tada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 12:36:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Tada & Blog - Personal Blog HTML Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="/css/front.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<!--******************************************************************************************************************************************
****************************************************************** PRELOADER ********************************************************************
*******************************************************************************************************************************************-->


{{--<div id="preloader-container">--}}
{{--    <div id="preloader-wrap">--}}
{{--        <div id="preloader"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<!--******************************************************************************************************************************************
****************************************************************** HEADER ********************************************************************
*******************************************************************************************************************************************-->

<header class="tada-container">

    <!-- LOGO -->

{{--    <div class="logo-container">--}}
{{--        <div class="tada-social">--}}
{{--            <a href="#"><i class="icon-facebook5"></i></a>--}}
{{--            <a href="#"><i class="icon-twitter4"></i></a>--}}
{{--            <a href="#"><i class="icon-google-plus"></i></a>--}}
{{--            <a href="#"><i class="icon-vimeo4"></i></a>--}}
{{--            <a href="#"><i class="icon-linkedin2"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}

<!-- MENU DESKTOP -->

    <nav class="menu-desktop menu-sticky" style="margin-top: 0; padding: 0; height: auto">
        <div class="row">
            <div class="form-group col-xs-6" style="margin-bottom: 0; text-align: center">
                <a href="/"><img src="/img/logo.png" alt="logo"></a>
            </div>

            <div class="form-group col-xs-6" style="margin-bottom: 0;">
                <ul class="tada-menu" style="margin: 25px">
                    <li><a href="/">Мои работы</a></li>
                    <li><a href="/contact">Об авторе</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- MENU MOBILE -->

    <div class="menu-responsive-container">
        <div class="open-menu-responsive">|||</div>
        <div class="close-menu-responsive">|</div>
        <div class="menu-responsive">
            <ul class="tada-menu">
                <li><a href="/" class="active">Мои работы</a></li>
                <li><a href="/contact">Об авторе</a></li>
            </ul>
        </div>
    </div> <!-- # menu responsive container -->


    <!-- SEARCH -->

    {{--    <div class="tada-search">--}}
    {{--        <form>--}}
    {{--            <div class="form-group-search">--}}
    {{--                <input type="search" class="search-field" placeholder="Search and hit enter...">--}}
    {{--                <button type="submit" class="search-btn"><i class="icon-search4"></i></button>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </div>--}}

    @yield('slider')


</header><!--END HEADER-->

<!--******************************************************************************************************************************************
****************************************************************** SECTION *******************************************************************
*******************************************************************************************************************************************-->


<!-- *** CONTENT *** -->
@yield('content')


<!--******************************************************************************************************************************************
****************************************************************** FOOTER ********************************************************************
*******************************************************************************************************************************************-->
@include('pages._footer')

<!--******************************************************************************************************************************************
****************************************************************** SCRIPT ********************************************************************
*******************************************************************************************************************************************-->

<script src="/js/front.js"></script>
</body>

<!-- Mirrored from themes.ad-theme.com/html/tada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 12:36:50 GMT -->
</html>
