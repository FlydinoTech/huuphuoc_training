<div class="form-group">
    {{ Form::label('name', trans('admin.category.countryName'), ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('admin.category.enterCountryName')]) }}
</div>
<div class="form-group">
    {{ Form::label('description', trans('admin.category.description'), ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('admin.category.enterDescription')]) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', trans('admin.picture'), ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($category) && $category->picture)
        {{ Html::image($category->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div><br/>