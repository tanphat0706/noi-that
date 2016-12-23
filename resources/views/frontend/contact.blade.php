@extends('frontend.template.master')
@section('title', trans('system.contact'))
@section('content')
    <div id="layers-widget-map-1"
         class="widget layers-contact-widget clearfix content-vertical-massive layers-contact-widget   ">
        <div class="container clearfix">
            <div class="section-title clearfix medium text-center ">
                <h3 class="heading">{{trans('system.contact')}}</h3>
                <div class="excerpt" style="max-width: 100%; ">
                    <p><b>Mọi chi tiết xin liên hệ tại địa chỉ 150/9A Lê Thị Riêng, Thới An, Quận 12, Hồ Chí Minh, hoặc gọi đến số 093 802 77 59 để được tư vấn thêm.</b></p>
                    {{--<p>Thời gian làm việc: 093 802 77 59</p>--}}
                </div>
            </div>
        </div>

        <div class="row container contact section-title">
            <div class="column no-push-bottom span-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5469.703156277666!2d106.65305507277233!3d10.867920316037551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529dd34acc6f9%3A0x8c85cfcc8724bfbe!2zTuG7mWkgVGjhuqV0IEdpw6EgUuG6uyBUaMOgbmggVMOgaQ!5e0!3m2!1svi!2s!4v1482495185961" width="1180" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <style type="text/css"> /* INLINE WIDGET CSS */
            #layers-widget-map-1 {
                background-repeat: no-repeat;
                background-position: center;
            }

            #layers-widget-map-1 {
                padding-bottom: 0px;
            }
        </style>
    </div>
@endsection