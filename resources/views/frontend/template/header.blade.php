<div class="header-secondary content-small invert">
            <div class="container clearfix">
                <nav class="pull-left">
                    <ul id="menu-contact-menu" class="nav nav-horizontal">
                        <li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a href="#crafthouse/contact/">{{trans('contact.mobile-phone')}}</a></li>
                        <li id="menu-item-375" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-375"><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li id="menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-379"><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-384"><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </nav>
                <nav class="pull-right">
                    <ul id="menu-returns-menu" class="nav nav-horizontal">
                        <li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="#crafthouse/shipping-and-returns/">Shipping and Returns</a></li>
                        <li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292"><a href="#crafthouse/my-account/">My Account</a></li>
                        <li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291"><a href="#crafthouse/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="header-site header-inline layers-parallax layers-logo-" style="background-position: 50% -26px;">
            <div class="container header-block">
                <div class="inline-left-nav">
                    <nav class="nav nav-horizontal">
                        <ul id="menu-main-menu-1" class="menu">
                            <li><a href="/crafthouse">Home</a></li>
                            <li class="menu-item-has-children"><a href="#crafthouse/shop/">Products</a>
                                <ul class="sub-menu">
                                    {{--<li class="menu-item-has-children"><a href="#crafthouse/shop/">Products</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-357"><a href="#crafthouse/product/leather-stool/">Simple</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-355"><a href="#crafthouse/product/corner-side-table/">Variable</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-356"><a href="#crafthouse/product/brick-bench/">On Sale</a></li>--}}
                                            {{--<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-358"><a href="#crafthouse/product/ring-cutting-board/">Out of Stock</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    @foreach($site_menus as $menu)
                                        <li><a href="#crafthouse/cart/">{{$menu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="#crafthouse/about/">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="inline-site-logo">
                    <div class="logo">
                        <a href="#crafthouse/" class="custom-logo-link" rel="home" itemprop="url"><img width="151" height="138" src="images/site-logo.png" class="custom-logo" alt="site-logo" itemprop="logo" sizes="(max-width: 151px) 100vw, 151px"></a>
                        <div class="site-description">
                            <h3 class="sitename sitetitle"><a href="#crafthouse">{{trans('system.app_name')}}</a></h3>
                            <p class="tagline">{{trans('system.slogan')}}</p>
                        </div>
                    </div>
                </div>
                <div class="inline-right-nav">
                    <nav class="nav nav-horizontal">
                        <ul id="menu-right-menu" class="menu">
                            <li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a href="#crafthouse/team/">Team</a></li>
                            <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="#crafthouse/journal/">Journal</a></li>
                            <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="#crafthouse/contact/">Contact</a></li>
                        </ul>
                    </nav>
                    <a class="responsive-nav" data-toggle="#off-canvas-right" id="open-menu" data-toggle-class="open">
                        <span class="l-menu"></span>
                    </a>
                </div>
            </div>
        </section>