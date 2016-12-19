@extends('frontend.template.master')
@section('title', $product->name)
@section('description', $product->short_description)
@section('content')
    <div class="title-container layers-parallax" style="background-position: 0% -65px;">
        <div class="title">
            <nav class="bread-crumbs">
                <ul>
                    <li><a href="{{route('frontend')}}">{{trans('system.home')}}</a></li>
                    <li>/</li>
                    <li><a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a></li>
                    <li>/</li>
                    <li><span class="current">{{$product->name}}</span></li>
                </ul>
            </nav>
            <h3 class="heading">{{$product->name}}</h3>
        </div>
    </div>
    <div class="content-main product container">
        <div class="grid">
            <div class="column span-12">
                <div class="product-top clearfix">
                    <div class="grid">
                        <!-- Show the Images -->
                        <div class="column product-images span-6 ">
                            <a class="fancybox" href="{{asset('images/products/'.$product->image_1)}}" data-fancybox-group="gallery" >
                                <img src="{{asset('images/products/'.$product->image_1)}}" alt=""/>
                            </a>
                            <div class="thumbnails">
                                <a class="fancybox" href="{{asset('images/products/'.$product->image_2)}}" data-fancybox-group="gallery">
                                    <img src="{{asset('images/products/'.$product->image_2)}}" alt=""/>
                                </a>
                                <a class="fancybox" href="{{asset('images/products/'.$product->image_3)}}" data-fancybox-group="gallery">
                                    <img src="{{asset('images/products/'.$product->image_3)}}" alt=""/>
                                </a>
                                <a class="fancybox" href="{{asset('images/products/'.$product->image_4)}}" data-fancybox-group="gallery" >
                                    <img src="{{asset('images/products/'.$product->image_4)}}" alt=""/>
                                </a>
                                <a class="fancybox" href="{{asset('images/products/'.$product->image_5)}}" data-fancybox-group="gallery" >
                                    <img src="{{asset('images/products/'.$product->image_5)}}" alt=""/>
                                </a>
                                <a class="fancybox" href="{{asset('images/products/'.$product->image_6)}}" data-fancybox-group="gallery" >
                                    <img src="{{asset('images/products/'.$product->image_6)}}" alt=""/>
                                </a>
                            </div>
                        </div>
                        <!-- Show the Product Summary -->
                        <div class="column purchase-options-container span-6">
                            <h1 itemprop="name" class="product_title entry-title">{{$product->name}}</h1>
                            <div itemprop="offers">
                                <p class="price"><span class="amount">{{number_format($product->price)}} VNĐ</span></p>
                            </div>
                            <div itemprop="description">
                                <p>{{$product->short_description}}</p>
                            </div>

                            <div class="product_meta">
                                <span class="sku_wrapper">SKU:
                                    <span class="sku" itemprop="sku">{{$product->sku}}</span>
                                </span><br>
                                <span class="posted_in">{{trans('category.category')}}:
                                    <a href="{{route('detail-category',$cate->getCateAlias($product->category_id)->alias)}}">
                                        {{$cate->name}}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="woocommerce-tabs">
                    <ul class="tabs wc-tabs">
                        <li class="description_tab">
                            <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Description')" id="defaultOpen">{{trans('product.description')}}</a>
                        </li>
                        <li class="reviews_tab">
                            <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Reviews')">{{trans('product.review')}}</a>
                        </li>
                    </ul>
                    <div class="panel entry-content tabcontent" id="Description" >
                        <h2>{{trans('product.pro_description')}}</h2>
                        {!! $product->description !!}
                    </div>
                    <div class="panel entry-content tabcontent" id="Reviews">

                        <h2>{{trans('product.review')}}</h2>

                        <table class="shop_attributes">
                            <tbody>
                            <tr class="">
                                <th>Size</th>
                                <td><p>Small, Medium, Large</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="related products">
                    <h2>{{trans('product.related')}}</h2>
                    <div class="widget" style="margin: 0 -20px;">
                        <div class="products container list-grid">
                            <div class="grid">
                                @foreach($related as $item_related)
                                    <article class="layers-masonry-column thumbnail column span-4 " data-cols="3">
                                        <div class="thumbnail-media ">
                                            <a href="{{route('detail-product',[$cate->getCateAlias($item_related->category_id)->alias,$item_related->alias])}}">
                                                <img width="480" height="480" src="{{asset('images/products/'.$item_related->image_1)}}" alt="{{$item_related->name}}" title="{{$item_related->name}}" sizes="(max-width: 480px) 100vw, 480px"> </a>
                                        </div>
                                        <div class="thumbnail-body">
                                            <div class="overlay">
                                                <header class="article-title">
                                                    <h4 class="heading">
                                                        <a href="{{route('detail-product',[$cate->getCateAlias($item_related->category_id)->alias,$item_related->alias])}}">
                                                            {{$item_related->name}}
                                                        </a>
                                                    </h4>
                                                    <span class="price">
                                                        <span class="amount">{{number_format($item_related->price)}} VNĐ</span>
                                                    </span>
                                                </header>
                                                <a href="{{route('detail-product',[$cate->getCateAlias($item_related->category_id)->alias,$item_related->alias])}}" class="button product_type_simple">Xem sản phẩm</a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- /row -->
    </div>
    <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        $(document).ready(function () {
            $('.fancybox').fancybox();
        });
    </script>

@endsection