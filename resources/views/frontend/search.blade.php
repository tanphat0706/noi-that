@extends('frontend.template.master')
@section('title', trans('system.search_result'))
@section('content')
    <div class="title-container layers-parallax" style="background-position: 0% -65px;">
        <div class="title">
            <nav class="bread-crumbs">
                <ul>
                    <li><a href="{{route('frontend')}}">{{trans('system.home')}}</a></li>
                    <li>/</li>
                    <li><span class="current">Tìm kiếm</span></li>
                </ul>
            </nav>
            <h3 class="heading">Tìm kiếm</h3>
        </div>
    </div>
    <div class="content-main product container">
        <div class="grid">
            <div class="column span-12">
                <div class="related products">
                    @if (count($search_result) === 0)
                        <h2>Không tìm thấy kết quả</h2>
                    @elseif (count($search_result) >= 1)
                        <h2>Kết quả</h2>
                        <div class="widget" style="margin: 0 -20px;">
                            <div class="products container list-grid">
                                <div class="grid">
                                    @foreach($search_result as $item_search)
                                        <article class="layers-masonry-column thumbnail column span-4 " data-cols="3">
                                            <div class="thumbnail-media ">
                                                <a href="{{route('detail-product',[$cate_menus->getCateAlias($item_search->category_id)->alias,$item_search->alias])}}">
                                                    <img width="480" height="480"
                                                         src="{{asset('images/products/'.$item_search->image_1)}}"
                                                         alt="{{$item_search->name}}" title="{{$item_search->name}}"
                                                         sizes="(max-width: 480px) 100vw, 480px"> </a>
                                            </div>
                                            <div class="thumbnail-body">
                                                <div class="overlay">
                                                    <header class="article-title">
                                                        <h4 class="heading">
                                                            <a href="{{route('detail-product',[$cate_menus->getCateAlias($item_search->category_id)->alias,$item_search->alias])}}">
                                                                {{$item_search->name}}
                                                            </a>
                                                        </h4>
                                                        <span class="price">
                                                        <span class="amount">
                                                            @if($item_search->price > 0)
                                                                {{number_format($item_search->price)}} VNĐ
                                                            @else
                                                                Giá tại xưởng
                                                            @endif

                                                        </span>
                                                    </span>
                                                    </header>
                                                    <a href="{{route('detail-product',[$cate_menus->getCateAlias($item_search->category_id)->alias,$item_search->alias])}}"
                                                       class="button product_type_simple">Xem sản phẩm</a>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div><!-- /row -->
    </div>

@endsection