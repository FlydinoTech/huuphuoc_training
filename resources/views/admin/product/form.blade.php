<div class="form-group">
    {{ Form::label('name', 'Tên sản phẩm', ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nhập tên sản phẩm']) }}
</div>
<div class="form-group">
    {{ Form::label('category_product_id', 'Loại sản phẩm', ['class' => 'form-group']) }}
    {!! Form::select('category_product_id', $categoryProduct, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {{ Form::label('description', 'Mô tả', ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Nhập mô tả']) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', 'Hình ảnh', ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($product) && $product->picture)
        {{ Html::image($product->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div><br/>
<div class="form-group">
    {{ Form::label('star', 'Số sao', ['class' => 'form-group']) }}
    {!! Form::select('star', ['0' => 0,  '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5], null, ['class' => 'name']) !!}
</div><br/>
<div class="form-group">
    {{ Form::label('price', 'Giá tiền (VNĐ)', ['class' => 'form-group']) }}
    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Nhập giá tiền']) }}
</div>
<div class="form-group">
    {{ Form::label('discount', 'Giảm giá (%)', ['class' => 'form-group']) }}
    {{ Form::text('discount', null, ['class' => 'form-control', 'placeholder' => 'Giảm giá']) }}
</div><br/>
