<div class="form-group">
    {{ Form::label('name', trans('admin.product.productName'), ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('admin.product.enterProductName')]) }}
</div>
<div class="form-group">
    {{ Form::label('category_product_id', trans('admin.product.categoryProduct'), ['class' => 'form-group']) }}
    {!! Form::select('category_product_id', $categoryProduct, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {{ Form::label('description', trans('admin.description'), ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('admin.product.enterDescriptionName')]) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', trans('admin.picture'), ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($product) && $product->picture)
        {{ Html::image($product->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div><br/>
<div class="form-group">
    {{ Form::label('star', trans('admin.product.review'), ['class' => 'form-group']) }}
    {!! Form::select('star', ['0' => 0,  '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5], null, ['class' => 'name']) !!}
</div><br/>
<div class="form-group">
    {{ Form::label('price', trans('admin.product.price') . ' (VNĐ)', ['class' => 'form-group']) }}
    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => trans('admin.product.enterPrice')]) }}
</div>
<div class="form-group">
    {{ Form::label('discount', trans('admin.product.discount') . ' (%)', ['class' => 'form-group']) }}
    {{ Form::text('discount', null, ['class' => 'form-control', 'placeholder' => trans('admin.product.enterDiscount')]) }}
</div><br/>
