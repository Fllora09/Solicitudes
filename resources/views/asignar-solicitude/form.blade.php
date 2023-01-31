<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idSolitd') }}
            {{ Form::text('idSolitd', $asignarSolicitude->idSolitd, ['class' => 'form-control' . ($errors->has('idSolitd') ? ' is-invalid' : ''), 'placeholder' => 'Idsolitd']) }}
            {!! $errors->first('idSolitd', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>