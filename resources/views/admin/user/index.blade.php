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
                        <a style="float:left" href="{{route('user.create')}}" class="btn btn-success btn-md">Thêm</a>
                    </div>
                    <div class="col-sm-5" style="text-align: right;">
                        {!! Form::open(['method' => 'GET', 'url' => route('user.search')]) !!}
                            {{ Form::text('search', null, ['class' => 'form-control input-sm', 'placeholder' =>  'Nhập dữ liệu', 'style' => 'float:left; width: 350px']) }}
                            {!! Form::submit( 'Tìm kiếm', ['class' => 'btn btn-warning btn-sm', 'style' => 'float:right']) !!}
                        {!! Form::close() !!}<br />
                    </div>
                </header>
                @if (session('msgAddSuccess'))
                    <div class="alert alert-success">
                        <p>{{ session('msgAddSuccess') }}</p>
                    </div>
                @endif
                @if (session('msgUpdateSuccess'))
                    <div class="alert alert-success">
                        <p>{{ session('msgUpdateSuccess') }}</p>
                    </div>
                @endif
                @if (session('msgDeleteSuccess'))
                    <div class="alert alert-success">
                        <p>{{ session('msgDeleteSuccess') }}</p>
                    </div>
                @endif
                @if (session('msgDeleteFail'))
                    <div class="alert alert-dark">
                        <p>{{ session('msgDeleteFail') }}</p>
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Loại người dùng</th>
                            <th width="165px">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->category_user_name}}</td>
                                <td class="center">
                                    <a href="{{ route('user.edit', $users->id) }}" title="" class="btn btn-success" style="width: 75px; float:left"><i class="fa fa-edit "></i> Sửa</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => route('user.destroy', $users->id)]) !!}
                                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger', 'style' => 'width: 70px; float:left']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page Navigation">
            </nav>
        </div>
    </div>
</div>
<!--body wrapper end-->
@stop