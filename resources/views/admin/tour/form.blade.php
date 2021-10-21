<div class="form-group">
    {{ Form::label('name', trans('admin.tour.tourName'), ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterTourName')]) }}
</div>
<div class="form-group">
    {{ Form::label('category_id', trans('admin.tour.countryName'), ['class' => 'form-group']) }}
    {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {{ Form::label('description', trans('admin.tour.descriptionName'), ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterDescriptionName')]) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', trans('admin.picture'), ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($tour) && $tour->picture)
        {{ Html::image($tour->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div>
<div class="form-group">
    {{ Form::label('day', trans('admin.tour.day'), ['class' => 'form-group']) }}
    {{ Form::text('day', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterDay')]) }}
</div>
<div class="form-group">
    {{ Form::label('night', trans('admin.tour.night'), ['class' => 'form-group']) }}
    {{ Form::text('night', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterNight')]) }}
</div>
<div class="form-group">
    {{ Form::label('price', trans('admin.tour.price') . ' (VNĐ)', ['class' => 'form-group']) }}
    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterPrice')]) }}
</div>
<div class="form-group">
    {{ Form::label('discount', trans('admin.tour.discount') . ' (%)', ['class' => 'form-group']) }}
    {{ Form::text('discount', null, ['class' => 'form-control', 'placeholder' => trans('admin.tour.enterDiscount')]) }}
</div><br/>
