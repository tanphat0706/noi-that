<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li {{ (Route::is('home') ? 'class=active' : '') }} >
                <a href="{{route('admin')}}"><i class="fa fa-home"></i><span>{{ trans('system.home') }}</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
