<div class="form-group">
    {{ Form::label('name', trans('admin.categoryProduct.categoryProductName'), ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('admin.categoryProduct.enterCategoryProductName')]) }}
</div><br/>
<div class="form-group">
    {{ Form::label('hinhanh', trans('admin.picture'), ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($categoryProduct) && $categoryProduct->picture)
        {{ Html::image($categoryProduct->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div>