@extends('backend.master')
@section('title', trans('product.list'))
@section('page_title') {{ trans('product.list') }}
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header"></div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="productlist" class="table table-condensed display responsive nowrap" cellspacing="0" width="100%" >
                        <thead style="color: blue;">
                        <tr>
                            <th>{{ trans('product.name') }}</th>
                            <th>Nổi bật</th>
                            <th>{{ trans('product.category') }}</th>
                            <th>{{ trans('product.price') }}</th>
                            <th>{{ trans('product.created_at') }}</th>
                            <th>{{ trans('product.updated_at') }}</th>
                            <th>#</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="box-footer">
        <button type="button" onclick="window.location='{{ route("product-create") }}'" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ trans('product.add')}}</button>
    </div>


    @include('partial.confirm', ['body' => trans('product.confirm_delete')])
@endsection

@section('js')
        $(function() {
        $('#productlist').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("json-products-list") }}',
        columns: [
        {data: 'name', name: 'products.name'},
        {data: 'highlight', name: 'products.highlight'},
        {data: 'cateName', name: 'categories.name'},
        {data: 'price', name: 'products.price'},
        {data: 'pro_create', name: 'products.created_at', searchable:false},
        {data: 'pro_update', name: 'products.updated_at', searchable:false},
        {data: 'action', name: 'action', orderable: false, searchable:false} ],
        initComplete: function () {
        this.api().columns().every(function () {
        var column = this;
        var input = document.createElement("input");
        $(input).appendTo($(column.footer()).empty()) .on('change', function ()
        { column.search($(this).val(), false, false, true).draw(); }); }); } });
        });


    function confirmDelete(formId)
    {
    bootbox.confirm( '{{ trans('product.confirm_delete') }}', function(result) {
    if(result == true){
    $('#'+formId).submit();
    }
    });
    }

@endsection
