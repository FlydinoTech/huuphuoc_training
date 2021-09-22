@extends('template.admin.master')
@section('main_content')
    <div id="page-inner" class="col-10">
        <div class="row">
            <div class="col-md-10">
                <h2>Thêm danh mục</h2>
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
                            @include('template.admin.msgAddFail')
                            @include('template.errorValidate')
                            {!! Form::open(['method' => 'POST', 'url' => route('product.store'), 'enctype' => 'multipart/form-data']) !!}
                                @include('admin.product.form')
                                {!! Form::submit('Thêm', ['class' => 'btn-submit']) !!}
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