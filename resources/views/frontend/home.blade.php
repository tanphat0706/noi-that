@extends('frontend.template.master')
@section('title', trans('system.home'))
@section('content')
<div id="demo">
                <div class="row">
                    <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item"><img src="images/loi.jpg" alt=""></div>
                            <div class="item"><img src="images/slide2.jpg" alt=""></div>
                            <div class="item"><img src="images/slide3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="storekit-product-category-widget row content-vertical-massive" id="layers-widget-product-categories-1">
                <div class="container">
                    <div class="section-title medium text-center clearfix">
                        <h3 class="heading">{{trans('category.product_cate')}}</h3>
                        <div class="excerpt">
                            <p>Chuyên sản xuất nội thất, văn phòng, nhà ở, chung cư, tủ quần áo, bàn trang điểm, bếp,...</p><p><b>Đặc biệt:</b> Gia công theo bản vẽ, thiết kế sản phẩm nội thất theo đơn đặc hàng.</p>
                        </div>
                    </div>
                </div>

                <div class="container list-grid">
                    <div class="grid">
                        @foreach($cates as $cate)
                            <article class="layers-masonry-column thumbnail  column span-4 with-overlay " data-cols="3">
                            <div class="thumbnail-media">
                                <a href="#">
                                    <img width="1024" height="720" src="{{asset('images/categories/'.$cate->image)}}" class="attachment-large size-large" alt="{{$cate->name}}" sizes="(max-width: 1024px) 100vw, 1024px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading">
                                            <a href="#">{{$cate->name}}</a>
                                        </h4>
                                    </header>
                                    <a href="#" class="button">Xem chi tiết</a>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
            </div>
            <div id="layers-widget-column-1" class="widget layers-content-widget content-vertical-massive   ">
                <div class="container list-grid">
                    <div class="grid">
                        <div id="layers-widget-column-1-261" class="layers-masonry-column layers-widget-column-261 span-2  first  column  has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/tom-dixon.png" class="attachment-medium size-medium" alt="tom-dixon"> </div>
                            </div>
                        </div>
                        <div id="layers-widget-column-1-734" class="layers-masonry-column layers-widget-column-734 span-2 column has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/garsnas.png" class="attachment-medium size-medium" alt="garsnas"> </div>
                            </div>
                        </div>
                        <div id="layers-widget-column-1-797" class="layers-masonry-column layers-widget-column-797 span-2 column has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/workstead.png" class="attachment-medium size-medium" alt="workstead"> </div>
                            </div>
                        </div>
                        <div id="layers-widget-column-1-276" class="layers-masonry-column layers-widget-column-276 span-2 column has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/herman-miller.png" class="attachment-medium size-medium" alt="herman-miller"> </div>
                            </div>
                        </div>
                        <div id="layers-widget-column-1-347" class="layers-masonry-column layers-widget-column-347 span-2 column has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/rosendahl.png" class="attachment-medium size-medium" alt="rosendahl"> </div>
                            </div>
                        </div>
                        <div id="layers-widget-column-1-431" class="layers-masonry-column layers-widget-column-431 span-2 last column has-image">
                            <div class="media invert image-top medium">
                                <div class="media-image ">
                                    <img width="140" height="120" src="images/normann.png" class="attachment-medium size-medium" alt="normann"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="storekit-product-list-widget widget row content-vertical-massive  " id="layers-widget-product-1">
                <div class="container clearfix">
                    <div class="section-title clearfix medium text-center ">
                        <h3 class="heading">{{trans('product.promotion_product')}}</h3>
                        <div class="excerpt">
                            <p>Những sản phẩm ưu đãi sẽ được giảm giá nhiều hơn khi sử dụng kèm dịch vụ của chúng tôi.</p>
                        </div>
                    </div>
                </div>
                <div class="products container list-grid">
                    <div class="grid">

                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/leather-stool/">
                                    <img width="480" height="480" src="images/LeatherColl2-9515-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="LeatherColl2-9515" title="LeatherColl2-9515" sizes="(max-width: 480px) 100vw, 480px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/leather-stool/">Leather Stool</a></h4>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </span>
                                    </header>
                                    <a rel="nofollow" href="/crafthouse/?add-to-cart=126" data-quantity="1" data-product_id="126" data-product_sku="410531" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a> </div>
                            </div>
                        </article>

                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/leather-bench/">
                                    <img width="480" height="480" src="images/LeatherColl2-9588-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="LeatherColl2-9588" title="LeatherColl2-9588" sizes="(max-width: 480px) 100vw, 480px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/leather-bench/">Leather Bench</a></h4>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </span>
                                    </header>
                                    <a rel="nofollow" href="/crafthouse/?add-to-cart=125" data-quantity="1" data-product_id="125" data-product_sku="410530" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a> </div>
                            </div>
                        </article>
                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/corner-table/">
                                    <img width="480" height="480" src="images/CornerColl2-9309-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="CornerColl2-9309" title="CornerColl2-9309" sizes="(max-width: 480px) 100vw, 480px"> </a>
                                <span class="onsale">Sale!</span>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/corner-table/">Corner Table</a></h4>
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,800.00</span></ins></span>
                                    </header>
                                    <a rel="nofollow" href="#crafthouse/product/corner-table/" data-quantity="1" data-product_id="95" data-product_sku="410520" class="button product_type_variable add_to_cart_button">Select options</a>                                    </div>
                            </div>
                        </article>
                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/ring-cutting-board/">
                                    <img width="480" height="480" src="images/Ring-cutting-board-5-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="Ring-cutting-board-5" title="Ring-cutting-board-5" sizes="(max-width: 480px) 100vw, 480px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/ring-cutting-board/">Ring Cutting Board</a></h4>

                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </span>
                                    </header>
                                    <a rel="nofollow" href="#crafthouse/product/ring-cutting-board/" data-quantity="1" data-product_id="99" data-product_sku="410524" class="button product_type_variable">Read more</a> </div>
                            </div>
                        </article>

                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/belt-series-ladder/">
                                    <img width="480" height="480" src="images/Belt-series-Ladder-2-1220x859-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="Belt-series-Ladder-2-1220x859"
                                        title="Belt-series-Ladder-2-1220x859"  sizes="(max-width: 480px) 100vw, 480px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/belt-series-ladder/">Belt Series Ladder</a></h4>

                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </span>
                                    </header>
                                    <a rel="nofollow" href="#crafthouse/product/belt-series-ladder/" data-quantity="1" data-product_id="98" data-product_sku="410523" class="button product_type_variable add_to_cart_button">Select options</a>                                    </div>
                            </div>
                        </article>
                        <article class="layers-masonry-column thumbnail  column span-4  " data-cols="3">
                            <div class="thumbnail-media ">
                                <a href="#crafthouse/product/leather-chair/">
                                    <img width="480" height="480" src="images/LeatherColl2-9740-480x480.jpg" class="attachment-layers-square-medium size-layers-square-medium wp-post-image" alt="LeatherColl2-9740" title="LeatherColl2-9740" sizes="(max-width: 480px) 100vw, 480px"> </a>
                            </div>
                            <div class="thumbnail-body">
                                <div class="overlay">
                                    <header class="article-title">
                                        <h4 class="heading"><a href="#crafthouse/product/leather-chair/">Leather Chair</a></h4>

                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                        </span>
                                    </header>
                                    <a rel="nofollow" href="#crafthouse/product/leather-chair/" data-quantity="1" data-product_id="97" data-product_sku="410522" class="button product_type_variable add_to_cart_button">Select options</a>                                    </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div id="woocommerce_product_search-3" class="widget container push-bottom-medium woocommerce widget_product_search">
                <form role="search" method="get" class="woocommerce-product-search" action="#crafthouse/">
                    <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                    <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products…" value="" name="s" title="Search for:">
                    <input type="submit" value="Search">
                    <input type="hidden" name="post_type" value="product">
                </form>
            </div>
            <style type="text/css">
                /* INLINE WIDGET CSS */
                #layers-widget-product-1 {
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    #layers-widget-product-1 .thumbnail:not(.with-overlay) .thumbnail-body {
                        background-color: #ffffff;
                    }

                    #layers-widget-product-1 .thumbnail-body a.button:hover {
                        background-color: #4d4d4d;
                    }
                #layers-widget-product-categories-1 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-product-categories-1 .thumbnail:not(.with-overlay) .thumbnail-body {
                    background-color: transparent;
                }

                #layers-widget-product-categories-1 .thumbnail-body a.button:hover {
                    background-color: #4d4d4d;
                }

                #layers-widget-column-1 {
                    background-color: #15110f;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1 {
                    padding-top: 40px;
                    padding-bottom: 20px;
                }

                #layers-widget-column-1-261 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1-734 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1-797 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1-276 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1-347 {
                    background-repeat: no-repeat;
                    background-position: center;
                }

                #layers-widget-column-1-431 {
                    background-repeat: no-repeat;
                    background-position: center;
                }
            </style>
@endsection