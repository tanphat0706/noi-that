<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta property="fb:app_id" content="1154811744556226" />
    <title>@yield('title', '')</title>
    <meta name="description" content="@yield('description', 'Nội Thất Giá Rẻ')">
    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Custom CSS -->
    <link href="{{asset('css/framework.css')}}" rel="stylesheet">
    <link href="{{asset('css/component.css')}}" rel="stylesheet">
    <link href="{{asset('css/commerce.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/layer.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/fancybox/helpers/jquery.fancybox-buttons.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Owl Carousel -->
    <link href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
    <style type="text/css" id="layers-inline-styles-header">
        body {
            font-family: "Roboto Condensed", Helvetica, sans-serif;
        }
        
        .header-site.invert .nav-horizontal>ul>li>a,
        .header-site .nav-horizontal>ul>li>a,
        .header-search a {
            border-radius: 4px;
        }
        
        input[type="button"],
        input[type="submit"],
        button,
        .button,
        .form-submit input[type="submit"] {
            border-width: 0px;
            border-radius: 4px;
        }
        
        .invert input[type="button"],
        .invert input[type="submit"],
        .invert button,
        .invert .button,
        .invert .form-submit input[type="submit"] {
            border-width: 0px;
            border-radius: 0px;
        }
        
        .footer-site {
            background-color: #000000;
        }
        
        .sidebar .well {
            background-color: #FFFFFF;
        }
    </style>
</head>

<body class="page-template-builder" id="detail-category">
<div id="fb-root"></div>
<script></script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1154811744556226',
            xfbml      : true,
            version    : 'v2.8'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1154811744556226";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

    {{--MOBILE NAV--}}
    @include('frontend/template/mobile-nav')
    <div class="wrapper-site">
        {{--HEADER--}}
        @include('frontend/template/header')
        <section class="wrapper-content">
            @yield('content')
        </section>
        {{--FOOTER--}}
        @include('frontend/template/footer')
    </div>

    <script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigationText: false,
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

                // "singleItem:true" is a shortcut for:
                // items : 1, 
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
        });
    </script>
    {!! Html::script('plugins/fancybox/jquery.mousewheel-3.0.6.pack.js') !!}
    {!! Html::script('plugins/fancybox/jquery.fancybox.js') !!}
    {!! Html::script('plugins/fancybox/helpers/jquery.fancybox-buttons.js') !!}
    {!! Html::script('plugins/fancybox/helpers/jquery.fancybox-thumbs.js') !!}
    {!! Html::script('plugins/fancybox/helpers/jquery.fancybox-media.js') !!}
</body>
</html>