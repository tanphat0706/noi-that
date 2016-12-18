@extends('frontend.template.master')
@section('title', trans('system.search_result'))
@section('content')
    <div class="title-container layers-parallax" style="background-position: 0% -65px;">
        <div class="title">
            <nav class="bread-crumbs">
                <ul>
                    <li><a href="{{route('frontend')}}">Home</a></li>
                    <li>/</li>
                    <li><span class="current">Lỗi</span></li>
                </ul>
            </nav>
            <h3 class="heading">Lỗi</h3>
        </div>
    </div>
    <div class="content-main product container">
        <div class="grid">
            <div class="column span-12">
                <div class="related products">
                    <h2>Trang không tồn tại</h2>
                    <p>Đường dẫn bạn tìm kiếm không tồn tại. <a href="{{route('frontend')}}">Trở về trang chủ</a></p>
                </div>
            </div>

        </div><!-- /row -->
    </div>

@endsection