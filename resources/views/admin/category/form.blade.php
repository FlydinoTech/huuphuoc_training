<div class="form-group">
    {{ Form::label('name', 'Tên quốc gia', ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  'Nhập tên']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Mô tả', ['class' => 'form-group']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' =>  'Nhập mô tả']) }}
</div>
<div class="form-group">
    {{ Form::label('hinhanh', 'Hình ảnh', ['class' => 'form-group']) }}
    {{Form::file('file')}}<br/>
@if (isset($category->picUrl))
    {{ Html::image($category->picUrl, 'alt', array( 'width' => 150, 'height' => 100 )) }}
@endif
</div>
    {!! Form::submit( 'Submit', ['class' => 'btn-submit']) !!}
</div>
