<div class="wrapper invert off-canvas-right" id="off-canvas-right">
    <a class="close-canvas" id="close-menu" data-toggle="#off-canvas-right" data-toggle-class="open">
        <i class="l-close"></i> Close </a>
    <div class="content nav-mobile clearfix">
        <nav class="nav nav-vertical">
            <ul class="menu">
                <li><a href="{{route('frontend')}}">{{trans('system.home')}}</a></li>
                <li class="menu-item-has-children"><a href="javascript:void(0)">{{trans('product.products')}}</a>
                    @foreach($site_menus as $menu)
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="{{route('detail-category',$menu->alias)}}">{{$menu->name}}</a>
                                <ul class="sub-menu sub-menu2">
                                    @foreach($cate_menus->productOfCateForMenu($menu->id) as $item)
                                        <li>
                                            <a href="{{route('detail-product',[$cate_menus->getCateAlias($item->category_id)->alias,$item->alias])}}">{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @endforeach
                </li>
                <li><a href="#crafthouse/about/">{{trans('system.about')}}</a></li>
                <li><a href="#crafthouse/about/">{{trans('system.bang_gia')}}</a></li>
                <li><a href="#crafthouse/about/">{{trans('system.khuyen_mai')}}</a></li>
                <li><a href="#crafthouse/about/">{{trans('system.contact')}}</a></li>
            </ul>
        </nav>
    </div>
    <aside id="text-4" class="content widget widget_text">
        <h5 class="section-nav-title">{{trans('system.app_name')}}</h5>
        <div class="textwidget">
            <p>Chuyên sản xuất nội thất, văn phòng, nhà ở, tủ quần áo, bàn trang điểm, bếp, chung cư, thiết
                kế tại nhà.</p>
            <hr style="color: rgba(255, 255, 255, 0.2);">
            <p>150/9A Lê Thị Riêng, Thới An, Quận 12, Hồ Chí Minh</p>
        </div>
    </aside>
</div>