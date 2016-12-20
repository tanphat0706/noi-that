@extends('frontend.template.master')
@section('title', $current_cate->name)
@section('description', $current_cate->description)
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
                    <h5 class="section-nav-title">{{trans('system.search_result')}}</h5>
                    {!! Form::open(['route'=>['search'], 'method'=> 'GET','class'=>'woocommerce-product-search']) !!}
                        <input name="search" type="search" placeholder="Search Products…" value="" title="Search for:">
                        <input type="hidden" name="post_type" value="product">
                    {!! Form::close() !!}
                </aside>
                <aside class="well widget woocommerce widget_product_categories">
                    <h5 class="section-nav-title">{{trans('product.categories')}}</h5>
                    <ul class="product-categories">
                        @foreach($cates as $cate)
                            <li class="cat-item cat-item-9">
                                <a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="pc-display content well push-bottom-large widget woocommerce widget_products">
                    <h5 class="section-nav-title">{{trans('product.highlight')}}</h5>
                    <ul class="product_list_widget">
                        @foreach($productsHigh as $highlight)
                            <li>
                                <a href="{{route('detail-product',[$cate->getCateAlias($highlight->category_id)->alias,$highlight->alias])}}">
                                    <img width="220" height="220"
                                         src="{{asset('images/products/'.$highlight->image_1)}}"
                                         class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                         alt="{{$highlight->name}}"
                                         sizes="(max-width: 220px) 100vw, 220px"> <span
                                            class="product-title">{{$highlight->name}}</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">
                                    @if($highlight->price > 0)
                                        {{number_format($highlight->price)}} VNĐ
                                    @else
                                        Giá tại xưởng
                                    @endif
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="column span-9 no-gutter">
                <ul class="products grid">
                    @foreach($products as $product)
                        <li class="product column span-6">
                        <a href="{{route('detail-product',[$cate->getCateAlias($product->category_id)->alias,$product->alias])}}">
                            <div class="img-wrap">
                                <img width="640" height="440" src="{{asset('images/products/'.$product->image_1)}}" title="Belt-series-Ladder-2-1220x859">
                            </div> <!--/.wrap-->
                            <h3>{{$product->name}}</h3>
                            <span class="price">
                                @if($product->price > 0)
                                    @if($product->old_price > 0)
                                        <span class="old_price">{{number_format($product->old_price)}} VNĐ </span>
                                        {{number_format($product->price)}} VNĐ
                                    @else
                                        {{number_format($product->price)}} VNĐ
                                    @endif
                                @else
                                    Giá tại xưởng
                                @endif
                            </span>
                        </a>
                        <a href="{{route('detail-product',[$cate->getCateAlias($product->category_id)->alias,$product->alias])}}" class="button">Xem sản phẩm</a>
                    </li>
                    @endforeach
                </ul>
                <div class="pagination">
                    {{$products->links()}}
                </div>
            </div>

        </div>
    </div>
@endsection