<div class="header-secondary content-small invert">
    <div class="container clearfix">
        <nav class="pull-left">
            <ul class="nav nav-horizontal">
                <li><a href="javascript:void(0)">{{trans('contact.mobile-phone')}}</a></li>
                <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </nav>
        <nav class="pull-right">
            <ul class="nav nav-horizontal">
                <li><a href="javascript:void(0)">Shipping and Returns</a></li>
                <li><a href="javascript:void(0)">My Account</a></li>
                <li><a href="javascript:void(0)">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<section class="header-site header-inline layers-parallax layers-logo-" style="background-position: 50% -26px;">
    <div class="container header-block">
        <div class="inline-left-nav">
            <nav class="nav nav-horizontal">
                <ul class="menu">
                    <li><a href="{{route('frontend')}}">{{trans('system.home')}}</a></li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">{{trans('product.products')}}</a>
                        <ul class="sub-menu">
                            @foreach($site_menus as $menu)
                                <li>
                                    <a href="{{route('detail-category',$menu->alias)}}">{{$menu->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">{{trans('system.about')}}</a></li>
                </ul>
            </nav>
        </div>
        <div class="inline-site-logo">
            <div class="logo">
                <a href="{{route('frontend')}}" class="custom-logo-link" rel="home" itemprop="url">
                    <img width="151" height="138" src="{{asset('images/site-logo-2.png')}}" class="custom-logo"
                         alt="site-logo" itemprop="logo" sizes="(max-width: 151px) 100vw, 151px">
                </a>
                <div class="site-description">
                    <h1 class="sitename sitetitle">
                        <a href="{{route('frontend')}}">{{trans('system.app_name')}}</a>
                    </h1>
                    <p class="tagline">{{trans('system.slogan')}}</p>
                </div>
            </div>
        </div>
        <div class="inline-right-nav">
            <nav class="nav nav-horizontal">
                <ul id="menu-right-menu" class="menu">
                    <li><a href="#">{{trans('system.bang_gia')}}</a></li>
                    <li><a href="#">{{trans('system.khuyen_mai')}}</a></li>
                    <li><a href="{{route('contact')}}">{{trans('system.contact')}}</a></li>
                </ul>
            </nav>
            <a class="responsive-nav" data-toggle="#off-canvas-right" id="open-menu" data-toggle-class="open">
                <span class="l-menu"></span>
            </a>
        </div>
    </div>
</section>