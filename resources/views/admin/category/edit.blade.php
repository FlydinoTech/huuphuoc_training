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
            @php
                $picture = $categoryId->picture;
                $urlPic = "/storage/files/".$picture;   
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            <div class="">
                                {!! Form::model($categoryId, ['method' => 'POST', 'route' => ['category.update', $categoryId->id]]) !!}
                                    <div class="form-group">
                                        {{ Form::label('name', 'Tên quốc gia', ['class' => 'form-group']) }}
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  'Nhập tên']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Mô tả', ['class' => 'form-group']) }}
                                        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('hinhanh', 'Hình ảnh', ['class' => 'form-group']) }}
                                        {{Form::file('file')}}<br/>
                                        {{ Html::image($urlPic, 'alt', array( 'width' => 150, 'height' => 100 )) }}
                                    </div>
                                    {!! Form::submit( 'Sửa', ['class' => 'btn-submit']) !!}
                                {!! Form::close() !!}
                                    <script>
                                            CKEDITOR.replace( 'description',
                                                {
                                                    filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
                                                    filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
                                                    filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
                                                    filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                                    filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                                });
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>
</div>
@stop