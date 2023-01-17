<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('IdDp') }}
            {{ Form::text('IdDp', $dependencia->IdDp, ['class' => 'form-control' . ($errors->has('IdDp') ? ' is-invalid' : ''), 'placeholder' => 'Iddp']) }}
            {!! $errors->first('IdDp', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('nameDp') }}
            {{ Form::text('nameDp', $dependencia->nameDp, ['class' => 'form-control' . ($errors->has('nameDp') ? ' is-invalid' : ''), 'placeholder' => 'Namedp']) }}
            {!! $errors->first('nameDp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
