@extends('layouts.layout2')

@section('content')
    @section('template_title')
        Create Solicitude
    @endsection

    @section('content')
        <section class="content container-fluid pt-5">
            <div class="row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Solicitud</span>
                            <div class="float-right">
                                <a class="btn btn-secondary btn-sm" href="{{ route('solicitudes.index') }}" >
                                Volver
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <form method="POST" action="{{ route('solicitudes.store') }}"  role="form" enctype="multipart/form-data"> --}}
                            <form method="POST" action="{{ route('solicitudes.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="box box-info padding-1">
                                    <div class="box-body">
                                        {{-- <div class="form-group row">
                                            <label for="user" class="col-md-2 col-form-label text-md-end" >{{ __('Usuario') }}</label>
                                            <div class="col-md-10">
                                                 <input type="text" id="user" name="user" class="form-control @error('user') is-invalid @enderror" value="{{ old('user') }}" required autocomplete="user"/>
                                                 {{-- {{ $users->user }}
                                             </div>
                                         </div> --}}
                                        <div class="form-group row">
                                           <label for="titulo" class="col-md-2 col-form-label text-md-end" >{{ __('Titulo') }}</label>
                                           <div class="col-md-10">
                                                <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" required autocomplete="titulo"/>
                                                @error('titulo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detailSoli" class="col-md-2 col-form-label text-md-end" >{{ __('Descripcion') }}</label>
                                            <div class="col-md-10">
                                                <textarea id="detailSoli" name="detailSoli" class="form-control @error('detailSoli') is-invalid @enderror" value="{{ old('detailSoli') }}" required autocomplete="detailSoli">
                                                </textarea>
                                                @error('detailSoli')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                 @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dependencia" class="col-md-2 col-form-label text-md-end" >{{ __('Dependencia') }}</label>
                                            <div class="col-md-10">
                                                <select name="dependencia" class="custom-select form-control @error('dependencia') is-invalid @enderror" required>
                                                    @foreach ( $dependencias as $dependencia)
                                                        <option value="{{ $dependencia->IdDp }}">{{ $dependencia->nameDp }}</option>
                                                    @endforeach
                                                  </select>
                                                @error('dependencia')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                 @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary">Enviar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@stop
