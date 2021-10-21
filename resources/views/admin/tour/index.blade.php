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
                        <a style="float:left" href="{{route('tour.create')}}" class="btn btn-success btn-md">@lang('admin.add')</a>
                    </div>
                    <div class="col-sm-5" style="text-align: right;">
                        {!! Form::open(['method' => 'GET', 'url' => route('tour.search')]) !!}
                            {{ Form::text('search', null, ['class' => 'form-control input-sm', 'placeholder' =>  trans('admin.enterSearch'), 'style' => 'float:left; width: 350px']) }}
                            {!! Form::submit( trans('admin.search'), ['class' => 'btn btn-warning btn-sm', 'style' => 'float:right']) !!}
                        {!! Form::close() !!}<br />
                    </div>
                </header>
                @include('template.admin.msgSuccess')
                <table class="table">
                    <thead>
                        <tr style="text-align: center">
                            <th>#</th>
                            <th>@lang('admin.tour.tour')</th>
                            <th>@lang('admin.tour.country')</th>
                            <th>@lang('admin.description')</th>
                            <th>@lang('admin.picture')</th>
                            <th>@lang('admin.tour.dayNight')</th>
                            <th>@lang('admin.tour.price') (VNĐ)</th>
                            <th>@lang('admin.tour.discount') (%)</th>
                            <th width="165px">@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tours as $tour)
                            <tr>
                                <td>{{$tour->id}}</td>
                                <td>{{$tour->name}}</td>
                                <td>{{$tour->category->name}}</td>
                                <td style="width: 300px">{{$tour->description}}</td>
                                <td>{{ Html::image($tour->picture_url, 'alt', array( 'width' => 150, 'height' => 100 )) }}</td>
                                <td style="text-align: center">{{$tour->day}}/{{$tour->night}}</td>
                                <td style="text-align: center">{{ number_format($tour->price) }} đ</td>
                                <td style="text-align: center">{{$tour->discount}}</td>
                                <td class="center">
                                    <a href="{{ route('tour.edit', $tour->id) }}" title="" class="btn btn-success" style="width: 75px; float:left"><i class="fa fa-edit "></i> @lang('admin.edit')</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => route('tour.destroy', $tour->id)]) !!}
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
                {{ $tours->links() }}
            </nav>
        </div>
    </div>
</div>
<!--body wrapper end-->
@stop