@extends('template.admin.master')
@section('main_content')
        <!--body wrapper start-->
        <div class="wrapper col-10">
            @if (session('msg'))
                <div class="alert alert-success">
                    <p>{{ session('msg') }}</p>
                </div>
            @endif
            @if (session('msg1'))
                <div class="alert alert-t-dark">
                    <p>{{ session('msg1') }}</p>
                </div>
            @endif
                <div class="col-12">
                    <header class="panel-heading head-border row">
                        <div class="col-sm-7" style="text-align: left;">
                            <a style="float:left" href="{{route('category.create')}}" class="btn btn-success btn-md">Thêm</a>
                        </div>
                        <div class="col-sm-5" style="text-align: right;">
                            <form action="" method="get">
                                <input type="text" id="search" name="search" class="form-control input-sm" placeholder="Nhập dữ liệu" style="float:left; width: 300px;" />
                                <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                            </form><br />
                        </div>
                    </header>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 120px">Quốc gia</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th width="165px">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categories)
                                @php
                                    $id = $categories->id;
                                    $name = $categories->name;
                                    $description = $categories->description;
                                    $picture = $categories->picture;
                                    $urlPic = "/storage/files/".$picture;
                                @endphp
                            <tr>
                                <td>{{$id}}</td>
                                <td>{{$name}}</td>
                                <td>{{$description}}</td>
                                <td><img src="{{$urlPic}}" style="width: 150px;height: 150;"/></td>
                                <td class="center">
                                    <a href="{{ route('category.edit', $id) }}" title="" class="btn btn-success"><i class="fa fa-edit "></i> Sửa</a>
                                    <a href="" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page Navigation">
                    {{-- {{ $categories->links() }} --}}
                </nav>
            </div>
        </div>
      </div>
          <!--body wrapper end-->
@stop