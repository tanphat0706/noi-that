@extends('frontend.template.master')
@section('title', trans('system.cate'))
@section('content')
    <div class="title-container layers-parallax" style="background-position: 0% -65px;">
        <div class="title">
            <nav class="bread-crumbs">
                <ul>

                    <li data-key="home"><a href="{{route('frontend')}}">{{trans('system.home')}}</a></li>
                    <li>/</li>

                    <li data-key="shop_page"><span class="current">{{$current_cate->name}}</span></li>
                </ul>
            </nav>
            <h3 class="heading">{{$current_cate->name}}</h3>
        </div>
    </div>
    <div class="container clearfix content-main">
        <div class="grid">
            <div class="column pull-left sidebar span-3">
                <aside class="well widget woocommerce">
                    <h5 class="section-nav-title">Search</h5>
                    <form method="get" action="#">
                        <input type="text" placeholder="search">
                    </form>
                </aside>
                <aside class="well widget woocommerce widget_product_categories">
                    <h5 class="section-nav-title">Product Categories</h5>
                    <ul class="product-categories">
                        @foreach($cates as $cate)
                            <li class="cat-item cat-item-9">
                                <a href="{{route('detail-category',$cate->id)}}">{{$cate->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                <aside id="woocommerce_products-3"
                       class="content well push-bottom-large widget woocommerce widget_products"><h5
                            class="section-nav-title">Products</h5>
                    <ul class="product_list_widget">
                        @foreach($productsHigh as $highlight)
                            <li>
                                <a href="#crafthouse/product/leather-stool/">
                                    <img width="220" height="220"
                                         src="{{asset('images/products/'.$highlight->image_1)}}"
                                         class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                         alt="{{$highlight->name}}"
                                         sizes="(max-width: 220px) 100vw, 220px"> <span
                                            class="product-title">{{$highlight->name}}</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">{{$highlight->price}}</span></li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="column span-9 no-gutter">
                <ul class="products grid">
                    @foreach($products as $product)
                        <li class="product column span-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img width="640" height="440" src="{{asset('images/products/'.$product->image_1)}}" title="Belt-series-Ladder-2-1220x859">
                            </div> <!--/.wrap-->
                            <h3>{{$product->name}}</h3>
                            <span class="price">{{$product->price}} VNĐ</span>
                        </a>
                        <a href="#" class="button">Xem sản phẩm</a>
                    </li>
                    @endforeach
                </ul>
                {{--<div class="pagination">--}}
                    {{--<ul class="page-numbers">--}}
                        {{--<li><span class="page-numbers current">1</span></li>--}}
                        {{--<li><a class="page-numbers" href="#crafthouse/shop/page/2/">2</a></li>--}}
                        {{--<li><a class="next page-numbers" href="#crafthouse/shop/page/2/">→</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
@endsection