@extends('frontend.template.master')
@section('title', trans('system.app_name'))
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
    <div class="storekit-product-category-widget row content-vertical-massive">
        <div class="container">
            <div class="section-title medium text-center clearfix">
                <h3 class="heading">{{trans('category.product_cate')}}</h3>
                <div class="excerpt">
                    <p>Chuyên sản xuất nội thất, văn phòng, nhà ở, chung cư, tủ quần áo, bàn trang điểm, bếp,...</p>
                    <p><b>Đặc biệt:</b> Gia công theo bản vẽ, thiết kế sản phẩm nội thất theo đơn đặc hàng.</p>
                </div>
            </div>
        </div>

        <div class="container list-grid">
            <div class="grid">
                @foreach($cates as $cate)
                    <article class="layers-masonry-column thumbnail  column span-4 with-overlay " data-cols="3">
                        <div class="thumbnail-media">
                            <a href="{{route('detail-category',$cate->alias)}}">
                                <img width="1024" height="720" src="{{asset('images/categories/'.$cate->image)}}"
                                     class="attachment-large size-large" alt="{{$cate->name}}"
                                     sizes="(max-width: 1024px) 100vw, 1024px">
                            </a>
                        </div>
                        <div class="thumbnail-body">
                            <div class="overlay">
                                <header class="article-title">
                                    <h4 class="heading">
                                        <a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a>
                                    </h4>
                                </header>
                                <a href="{{route('detail-category',$cate->alias)}}" class="button">Xem chi tiết</a>
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
                <div id="layers-widget-column-1-261"
                     class="layers-masonry-column layers-widget-column-261 span-2  first  column  has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/tom-dixon.png"
                                 class="attachment-medium size-medium" alt="tom-dixon"></div>
                    </div>
                </div>
                <div id="layers-widget-column-1-734"
                     class="layers-masonry-column layers-widget-column-734 span-2 column has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/garsnas.png" class="attachment-medium size-medium"
                                 alt="garsnas"></div>
                    </div>
                </div>
                <div id="layers-widget-column-1-797"
                     class="layers-masonry-column layers-widget-column-797 span-2 column has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/workstead.png"
                                 class="attachment-medium size-medium" alt="workstead"></div>
                    </div>
                </div>
                <div id="layers-widget-column-1-276"
                     class="layers-masonry-column layers-widget-column-276 span-2 column has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/herman-miller.png"
                                 class="attachment-medium size-medium" alt="herman-miller"></div>
                    </div>
                </div>
                <div id="layers-widget-column-1-347"
                     class="layers-masonry-column layers-widget-column-347 span-2 column has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/rosendahl.png"
                                 class="attachment-medium size-medium" alt="rosendahl"></div>
                    </div>
                </div>
                <div id="layers-widget-column-1-431"
                     class="layers-masonry-column layers-widget-column-431 span-2 last column has-image">
                    <div class="media invert image-top medium">
                        <div class="media-image ">
                            <img width="140" height="120" src="images/normann.png" class="attachment-medium size-medium"
                                 alt="normann"></div>
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
                @foreach($product_high as $item)
                    <article class="layers-masonry-column thumbnail column span-4 " data-cols="3">
                        <div class="thumbnail-media ">
                            <a href="{{route('detail-product',[$cate->getCateAlias($item->category_id)->alias,$item->alias])}}">
                                <img width="480" height="480" src="{{asset('images/products/'.$item->image_1)}}"
                                     class="attachment-layers-square-medium size-layers-square-medium"
                                     alt="{{$item->name}}" title="{{$item->name}}"
                                     sizes="(max-width: 480px) 100vw, 480px"> </a>
                        </div>
                        <div class="thumbnail-body">
                            <div class="overlay">
                                <header class="article-title">
                                    <h4 class="heading">
                                        <a href="{{route('detail-product',[$cate->getCateAlias($item->category_id)->alias,$item->alias])}}">{{$item->name}}</a></h4>
                                    <span class="price" style="color:red">
                                        <span class="amount">
                                            @if($item->price > 0)
                                                @if($item->old_price > 0)
                                                    <span class="old_price">{{number_format($item->old_price)}} VNĐ </span>
                                                    {{number_format($item->price)}} VNĐ
                                                @else
                                                    {{number_format($item->price)}} VNĐ
                                                @endif
                                            @else
                                                Giá tại xưởng
                                            @endif
                                        </span>
                                    </span>
                                </header>
                                <a href="{{route('detail-product',[$cate->getCateAlias($item->category_id)->alias,$item->alias])}}" class="button product_type_simple">Xem
                                    sản phẩm</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
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