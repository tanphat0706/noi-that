@extends('backend.master')
@section('title', trans('category.add'))
@section('page_title') {{ trans('category.add') }}
@stop

@section('content')
    <!-- left column -->
    {{--@if($errors)--}}
        {{--{{dd($errors)}}--}}
        {{--@endif--}}
    <!-- general form elements -->
    <div class="box box-primary">
        <!-- form start -->
        {!! Form::open(['route'=>['category-store'], 'method'=> 'POST','files' => true]) !!}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ trans('category.name') }}</label>
                        <span class="required">*</span>
                        {!!Form::text('name', null , array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>

                    <div class="form-group col-md-6 col-xs-12" style="float: left;">
                        <label for="name">{{ trans('category.image') }}</label><span class="required">*</span>
                        <div>
                            <img class="img-responsive" style="" src="{{asset('images/text.png')}}" id="output">
                        </div>
                        {{--{!! Form::file('image_url',null,['class'=>'form-control']) !!}--}}
                        <input class="form-control" type="file" accept="image/*" name="image"
                               onchange="loadFile(event)">
                        <script>
                            var loadFile = function (event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ trans('category.short_description') }} (description in homepage)</label>
                        <span class="required">*</span>
                        {!!Form::text('short_description', null,array('class' => 'form-control formwidth', 'autocomplete' => 'off')) !!}
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('category.description') }}</label>
                        <span class="required">*</span>
                        <textarea id="messageArea" name="description" rows="7" class="form-control ckeditor"
                                  placeholder="Write your message.."></textarea>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i
                            class="fa fa-plus-circle"></i> {{trans('system.finish')}}
                </button>
            </div>

        </div>
        <!-- /.box -->
        {!! Form::close() !!}
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('messageArea',
                {
                    customConfig: 'config.js',
                    toolbar: 'simple'
                })
    </script>
    <!-- /.row -->
@endsection