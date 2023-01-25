<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row mb-3">
            <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Nombre') }}</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($user->name) ?$user->name:old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            {{-- {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
            <div class="col-md-10">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($user->email) ?$user->email:old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        {{--{{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="row form-group mb-3">
            <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Contaseña') }}</label>

            <div class="col-md-10">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="password-confirm" class="col-md-2 col-form-label text-md-end">{{ __('Confirmar Contaseña') }}</label>

            <div class="col-md-10">
                <input  type="password" class="form-control" >
            </div>
        </div>
    </div>
</div>
