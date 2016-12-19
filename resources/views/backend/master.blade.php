<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', '') | {{ trans('system.app_name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap 3.3.6 -->
    {!! Html::style('css/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('css/font-awesome.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('dist/css/skins/_all-skins.min.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
    {!! Html::style('css/datatables.bootstrap.css') !!}
    {!! Html::style('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') !!}
    {!! Html::style('plugins/datatables/extensions/ColVis/css/dataTables.colVis.min.css') !!}
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    {!! Html::style('css/style_backend.css') !!}
    <!-- iCheck -->
    {!! Html::style('plugins/iCheck/square/blue.css') !!}
    <!-- jQuery 2.2.3 -->
    {!! Html::script('js/jquery-2.2.3.min.js') !!}
    {{--{!! Html::script('plugins/tinymce/js/tinymce/tinymce.min.js') !!}--}}
    {!! Html::script('plugins/ckeditor/ckeditor.js') !!}
    {!! Html::script('plugins/ckfinder/ckfinder.js') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition fixed skin-black sidebar-mini" style="position: relative;">
<div class="wrapper">
    <!-- Header -->
@include('backend/header')
<!-- Sidebar -->
@include('backend/sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="text-transform: uppercase; color: #8b0000">
                @yield('page_title', '') <small>@yield('page_description', '')</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @if (\Session::has('message'))
                <div class="alert alert-info fadeOut">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ \Session::get('message') }}
                </div>
            @endif
            @if (\Session::has('error'))
                <div class="alert alert-danger fadeOut">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ \Session::get('error') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger fadeOut">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('backend/footer')
</div>

<div id="notification" class="alert alert-warning" style="position: absolute; bottom: 0; right: 20px; min-width: 10%; display: none">
    <button type="button" class="close-alert close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4><i class="icon fa fa-warning"></i> {{ trans('system.message') }}!</h4>
        <span id="message-content">

        </span>
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.6 -->
{!! Html::script('css/bootstrap/js/bootstrap.min.js') !!}
<!-- bootbox for show message -->
{!! Html::script('css/bootstrap/js/bootbox.min.js') !!}
<!-- Select2 -->
<!-- DATA TABES SCRIPT -->
{!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}
{!! Html::script('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') !!}
{!! Html::script('plugins/datatables/extensions/ColVis/js/dataTables.colVis.min.js') !!}
<!-- SlimScroll -->
{!! Html::script('js/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('js/fastclick/fastclick.js') !!}
<!-- AdminLTE App -->
{!! Html::script('js/app.min.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('js/demo.js') !!}
<!--{!! Html::script('plugins/select2/select2.full.min.js') !!}-->
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
{!! Html::script('plugins/fancybox/jquery.mousewheel-3.0.6.pack.js') !!}
{!! Html::script('plugins/iCheck/icheck.min.js') !!}
{!! Html::script('js/jquery.number.js') !!}
<!-- page script -->
{!! Html::script('js/main.js') !!}
{!! Html::script('js/easyResponsiveTabs.js') !!}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });

</script>
<script src="https://js.pusher.com/3.0/pusher.min.js"></script>
<script type="text/javascript">
    var _token = '{!! csrf_token() !!}';
    $(function () {
        $('input[type="checkbox"].icheck').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    @yield('js')
    @yield('datatable-js')
</script>
<!-- Modal -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
