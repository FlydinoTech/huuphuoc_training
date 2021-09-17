@extends('template.admin.master')
@section('main_content')
    <div id="page-inner" class="col-10">
        <div class="row">
            <div class="col-md-10">
                <h2>@lang('admin.category.edit')</h2>
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
                            @if (session('msgUpdateFail'))
                                <div class="alert alert-dark">
                                    <p>{{ session('msgUpdateFail') }}</p>
                                </div>
                            @endif
                            @include('template.errorValidate')
                            {!! Form::model($category, ['method' => 'PUT', 'route' => ['category.update', $category->id], 'enctype' => 'multipart/form-data']) !!}
                                @include('admin.category.form')
                                {!! Form::submit(trans('admin.category.edit'), ['class' => 'btn-submit']) !!}
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