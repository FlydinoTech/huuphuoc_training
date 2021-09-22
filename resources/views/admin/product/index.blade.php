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
                        <a style="float:left" href="{{route('product.create')}}" class="btn btn-success btn-md">@lang('admin.add')</a>
                    </div>
                    <div class="col-sm-5" style="text-align: right;">
                        {!! Form::open(['method' => 'GET', 'url' => route('product.search')]) !!}
                            {{ Form::text('search', null, ['class' => 'form-control input-sm', 'placeholder' =>  trans('admin.enterSearch'), 'style' => 'float:left; width: 250px']) }}
                            {!! Form::submit( trans('admin.search'), ['class' => 'btn btn-warning btn-sm', 'style' => 'float:right']) !!}
                        {!! Form::close() !!}<br />
                    </div>
                </header>
                @include('template.admin.msgSuccess')
                <table class="table">
                    <thead>
                        <tr style="text-align: center">
                            <th>#</th>
                            <th>@lang('admin.product.product')</th>
                            <th>@lang('admin.product.categoryProduct')</th>
                            <th>@lang('admin.description')</th>
                            <th>@lang('admin.picture')</th>
                            <th>@lang('admin.product.price') (VNĐ)</th>
                            <th>@lang('admin.product.discount') (%)</th>
                            <th>@lang('admin.product.review')</th>
                            <th width="180px">@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->categoryProduct->name}}</td>
                                <td style="width: 300px">{{$product->description}}</td>
                                <td>{{ Html::image($product->picture_url, 'alt', array( 'width' => 150, 'height' => 100 )) }}</td>
                                <td style="text-align: center">{{ number_format($product->price) }} đ</td>
                                <td style="text-align: center">{{$product->discount}}</td>
                                <td style="text-align: center">{{$product->star}}</td>
                                <td class="center">
                                    <a href="{{ route('product.edit', $product->id) }}" title="" class="btn btn-success" style="width: 75px; float:left"><i class="fa fa-edit "></i> @lang('admin.edit')</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => route('product.destroy', $product->id)]) !!}
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
                {{ $products->links() }}
            </nav>
        </div>
    </div>
</div>
<!--body wrapper end-->
@stop