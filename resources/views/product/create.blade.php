@extends('backend.master')
@section('title', trans('product.add'))
@section('page_title') {{ trans('product.add') }}
@stop

@section('content')
    <!-- left column -->
    <div class="box box-primary">
        <!-- form start -->
        {!! Form::open(['route'=>['product-store'], 'method'=> 'POST','files' => true]) !!}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ trans('product.meta_description') }}</label>
                        <span class="required">*</span>
                        {!!Form::text('meta_description', null , array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('product.name') }}</label>
                        <span class="required">*</span>
                        {!!Form::text('name', null , array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('product.category') }}</label>
                        <span class="required">*</span>
                        {!! Form::select('category_id', $cates, null, ['class' => 'form-control', 'placeholder' => 'Chọn danh mục']) !!}
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ trans('product.price') }}</label>
                        <span class="required">*</span>
                        {!!Form::text('price', null,array('id'=>'price','class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('product.short_description') }}</label>
                        <span class="required">*</span>
                        {!!Form::text('short_description', null,array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                    <div class="form-group">
                        <label></label><br>
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input style="width: 15px;height: 15px" value="1" type="checkbox" name="highlight"><span style="font-weight: bold;margin: 5px"> {{ trans('product.highlight') }} </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_1') }}</label><span class="required">*</span>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output1">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_1"
                               onchange="loadFile1(event)">
                        <script>
                            var loadFile1 = function (event) {
                                var output1 = document.getElementById('output1');
                                output1.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_2') }}</label>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output2">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_2"
                               onchange="loadFile2(event)">
                        <script>
                            var loadFile2 = function (event) {
                                var output2 = document.getElementById('output2');
                                output2.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_3') }}</label>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output3">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_3"
                               onchange="loadFile3(event)">
                        <script>
                            var loadFile3 = function (event) {
                                var output3 = document.getElementById('output3');
                                output3.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_4') }}</label>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output4">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_4"
                               onchange="loadFile4(event)">
                        <script>
                            var loadFile4 = function (event) {
                                var output4 = document.getElementById('output4');
                                output4.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_5') }}</label>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output5">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_5"
                               onchange="loadFile5(event)">
                        <script>
                            var loadFile5 = function (event) {
                                var output5 = document.getElementById('output5');
                                output5.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <div class="form-group col-sm-6 col-md-4 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('product.image_6') }}</label>
                        <div class="form-product-img">
                            <img class="img-responsive form-product" style="" src="{{asset('images/text.png')}}" id="output6">
                        </div>
                        <input class="form-control" type="file" accept="image/*" name="image_6"
                               onchange="loadFile6(event)">
                        <script>
                            var loadFile6 = function (event) {
                                var output6 = document.getElementById('output6');
                                output6.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">{{ trans('product.description') }}</label>
                        <span class="required">*</span>
                        {!!Form::textarea('description', null,array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i
                            class="fa fa-plus-circle"></i> {{trans('system.finish')}}
                </button>
            </div>

        </div>
        <!-- /.box -->
        {!! Form::close() !!}
    </div>
    <script>
        $( document ).ready(function() {
            $('#price').number( true, 0);
        })

    </script>
    <script>
        var editor = CKEDITOR.replace( 'description' );
        CKFinder.setupCKEditor( editor );
    </script>
    <!-- /.row -->
@endsection