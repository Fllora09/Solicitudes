<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('idSolitd') }}
            {{ Form::text('idSolitd', $solicitude->idSolitd, ['class' => 'form-control' . ($errors->has('idSolitd') ? ' is-invalid' : ''), 'placeholder' => 'Idsolitd']) }}
            {!! $errors->first('idSolitd', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $solicitude->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detailSoli') }}
            {{ Form::text('detailSoli', $solicitude->detailSoli, ['class' => 'form-control' . ($errors->has('detailSoli') ? ' is-invalid' : ''), 'placeholder' => 'Detailsoli']) }}
            {!! $errors->first('detailSoli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $solicitude->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('user') }}
            {{ Form::text('user', $solicitude->user, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('dependencia') }}
            {{ Form::text('dependencia', $solicitude->dependencia, ['class' => 'form-control' . ($errors->has('dependencia') ? ' is-invalid' : ''), 'placeholder' => 'Dependencia']) }}
            {!! $errors->first('dependencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
