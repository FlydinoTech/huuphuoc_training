@extends('template.admin.master')
@section('main_content')
    <div id="page-inner" class="col-10">
        <div class="row">
            <div class="col-md-10">
                <h2>@lang('admin.product.edit')</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            @include('template.admin.msgUpdateFail')
                            @include('template.errorValidate')
                            {!! Form::model($product, ['method' => 'PUT', 'route' => ['product.update', $product->id], 'enctype' => 'multipart/form-data']) !!}
                                @include('admin.product.form')
                                {!! Form::submit( trans('admin.edit'), ['class' => 'btn-submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection