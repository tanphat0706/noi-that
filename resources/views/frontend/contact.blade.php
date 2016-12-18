@extends('frontend.template.master')
@section('title', trans('system.contact'))
@section('content')
    <div id="layers-widget-map-1"
         class="widget layers-contact-widget clearfix content-vertical-massive layers-contact-widget   ">


        <div class="container clearfix">
            <div class="section-title clearfix medium text-center ">
                <h3 class="heading">{{trans('system.contact')}}</h3>
                <div class="excerpt"><p>We are based in one of the most beautiful places on earth. Come visit!</p></div>
            </div>
        </div>

        <div class="row container ">

            <div class="column no-push-bottom span-12">

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