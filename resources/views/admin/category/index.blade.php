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
                        <a style="float:left" href="{{route('category.create')}}" class="btn btn-success btn-md">@lang('admin.add')</a>
                    </div>
                    <div class="col-sm-5" style="text-align: right;">
                        {!! Form::open(['method' => 'GET', 'url' => route('category.search')]) !!}
                            {{ Form::text('search', null, ['class' => 'form-control input-sm', 'placeholder' => trans('admin.enterSearch'), 'style' => 'float:left; width: 350px']) }}
                            {!! Form::submit( trans('admin.search'), ['class' => 'btn btn-warning btn-sm', 'style' => 'float:right']) !!}
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
                            <th style="width: 120px">@lang('admin.category.country')</th>
                            <th>@lang('admin.description')</th>
                            <th>@lang('admin.picture')</th>
                            <th width="165px">@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{ Html::image($category->picture_url, 'alt', array( 'width' => 150, 'height' => 100 )) }}</td>
                                <td class="center">
                                    <a href="{{ route('category.edit', $category->id) }}" title="" class="btn btn-success" style="width: 75px; float:left"><i class="fa fa-edit "></i> @lang('admin.edit')</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => route('category.destroy', $category->id)]) !!}
                                        {!! Form::submit(trans('admin.delete'), ['class' => 'btn btn-danger', 'style' => 'width: 70px; float:left']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <div class="alert alert-danger">@lang('admin.notFound')</div>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page Navigation">
                {{ $categories->links() }}
            </nav>
        </div>
    </div>
</div>
<!--body wrapper end-->
@stop