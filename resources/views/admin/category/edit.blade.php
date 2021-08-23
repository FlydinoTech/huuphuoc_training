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
                $name = $arrCategory->name;
                $description = $arrCategory->description;
                $picture = $arrCategory->picture;
                $urlPic = "/storage/files/".$picture;   
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                            <div class="">
                                    <form style="padding-bottom: 50px;" role="form" method="post" action="" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên quốc gia</label>
                                            <input type="text" value="{{$name}}" name="name" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea name="description" id="description" class="form-control">{{$description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="hinhanh" class="form-control" multiple="multiple"/>
                                            <img src="{{$urlPic}}" style="width: 150px;height: 150;"/>
                                        </div>
                                        <button type="submit" name="submit"  class="btn btn-success btn-md">Thêm</button>
                                    </form>
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