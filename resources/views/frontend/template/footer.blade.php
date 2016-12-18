<section class="wrapper-content">
    <div id="woocommerce_product_search-3" class="widget container push-bottom-medium woocommerce widget_product_search">
        {!! Form::open(['route'=>['search'], 'method'=> 'GET','files' => true,'class'=>'woocommerce-product-search']) !!}
        <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
        <input name="search" type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products…" value="" title="Search for:">
        <input type="submit" value="Search">
        <input type="hidden" name="post_type" value="product">
        {!! Form::close() !!}
    </div>
</section>
<section id="footer" class="footer-site invert">
    <div class="container content clearfix">
        <div class="grid">
            <div class="column span-4 ">
                <aside id="text-3" class="widget widget_text">
                    <h5 class="section-nav-title">{{trans('system.app_name')}}</h5>
                    <div class="textwidget">
                        <p>Chuyên sản xuất nội thất, văn phòng, nhà ở, tủ quần áo, bàn trang điểm, bếp, chung cư, thiết
                            kế tại nhà.</p>
                        <hr style="color: rgba(255, 255, 255, 0.2);">
                        <p>150/9A Lê Thị Riêng, Thới An, Quận 12, Hồ Chí Minh</p>
                    </div>
                </aside>
            </div>
            <div class="column span-4 ">
                <aside id="woocommerce_products-7" class="widget woocommerce widget_products">
                    <h5 class="section-nav-title">{{trans('product.highlight')}}</h5>
                    <ul class="product_list_widget">
                        @foreach($cates_high as $cate_high)
                            <li>
                                <a href="{{route('detail-category',$cate_high->alias)}}" title="{{$cate_high->name}}">
                                    <img width="220" height="220"
                                         src="{{asset('images/categories/'.$cate_high->image)}}"
                                         alt="{{$cate_high->name}}" sizes="(max-width: 220px) 100vw, 220px">
                                    <span class="product-title">{{$cate_high->name}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="column span-4 last">
                <aside id="woocommerce_products-8" class="widget woocommerce widget_products">
                    <h5 class="section-nav-title">{{trans('product.promotion_product')}}</h5>
                    <ul class="product_list_widget">
                        @foreach($products_high as $item_high)
                            <li>
                                <a href="{{route('detail-product',[$cate_menus->getCateAlias($item_high->category_id)->alias,$item_high->alias])}}" title="{{$item_high->name}}">
                                    <img width="220" height="220"
                                         src="{{asset('images/products/'.$item_high->image_1)}}"
                                         alt="{{$item_high->name}}" sizes="(max-width: 220px) 100vw, 220px"> <span
                                            class="product-title">{{$item_high->name}}</span>
                                </a>
                                <span class="amount">{{number_format($item_high->price)}} VNĐ</span>
                            </li>
                        @endforeach

                    </ul>
                </aside>
            </div>
        </div>

        <div class="grid copyright">
            <div class="column span-6">
                <p class="site-text"> Made at the tip of Africa. ©</p>
            </div>
            <div class="column span-6 clearfix t-right">
            </div>
        </div>
    </div>

</section>