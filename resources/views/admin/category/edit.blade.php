@extends('template.admin.master')
@section('main_content')
    <div id="page-inner" class="col-10">
            <div class="row">
                <div class="col-md-10">
                    <h2>Sửa danh mục</h2>
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
                                <div class="">
                                    {!! Form::model($category, ['method' => 'POST', 'route' => ['category.update', $category->id]]) !!}
                                        @include('admin.category.form')
                                        {!! Form::submit( 'Sửa', ['class' => 'btn-submit']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- End Form Elements -->
            </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection