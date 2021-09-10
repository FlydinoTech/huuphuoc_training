<div class="form-group">
    {{ Form::label('name', 'Tên chuyến đi', ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nhập tên']) }}
</div>
<div class="form-group">
    {{ Form::label('category_id', 'Tên quốc gia', ['class' => 'form-group']) }}
    {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {{ Form::label('description', 'Mô tả', ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Nhập mô tả']) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', 'Hình ảnh', ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($tour) && $tour->picture)
        {{ Html::image($tour->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div>
<div class="form-group">
    {{ Form::label('day', 'Số ngày', ['class' => 'form-group']) }}
    {{ Form::text('day', null, ['class' => 'form-control', 'placeholder' => 'Nhập số ngày']) }}
</div>
<div class="form-group">
    {{ Form::label('night', 'Số đêm', ['class' => 'form-group']) }}
    {{ Form::text('night', null, ['class' => 'form-control', 'placeholder' => 'Nhập số đêm']) }}
</div>
<div class="form-group">
    {{ Form::label('price', 'Giá tiền (VNĐ)', ['class' => 'form-group']) }}
    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Nhập giá tiền']) }}
</div>
<div class="form-group">
    {{ Form::label('discount', 'Giảm giá (%)', ['class' => 'form-group']) }}
    {{ Form::text('discount', null, ['class' => 'form-control', 'placeholder' => 'Giảm giá']) }}
</div><br/>
