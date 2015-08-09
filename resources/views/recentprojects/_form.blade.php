<div class="form-group">
        {!! Form::label('title', 'Title:', ['class'=>'control-label']) !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('category', 'Category:', ['class'=>'control-label']) !!}
        {!! Form::text('category', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('image', 'Image:', ['class'=>'control-label']) !!}
        {!! Form::file('image', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::submit($SubmitBtn, ['class'=>'btn btn-lg btn-success btn-block']) !!}
</div>