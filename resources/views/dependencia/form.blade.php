<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('IdDp') }}
            {{ Form::text('IdDp', $dependencia->IdDp, ['class' => 'form-control' . ($errors->has('IdDp') ? ' is-invalid' : ''), 'placeholder' => 'Iddp']) }}
            {!! $errors->first('IdDp', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            <label class="font-weight-bold" for="itemN-16">Dependencia</label>
            <input type="text" name="nameDp" class="form-control @error('nameDp') is-invalid @enderror" value="{{isset( $dependencia->nameDp) ?$dependencia->nameDp:old('nameDp')}}" >
            {{-- {{ Form::text('nameDp', $dependencia->nameDp, ['class' => 'form-control' . ($errors->has('nameDp') ? ' is-invalid' : ''), 'placeholder' => 'Dependencia']) }}
            {!! $errors->first('nameDp', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
    </div>
</div>
