@extends('adminlte::page')

@section('content')
    @section('template_title')
        Editar Dependencia
    @endsection

    @section('content')
        <section class="content container-fluid">
            <div class="">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Editar Dependencia</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('dependencias.update') }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf
                                <div class="box box-info padding-1">
                                    <div class="box-body">
                                        <div class="form-group">
                                          <label class="font-weight-bold" for="itemN-16">Dependencia</label>

                                              <input type="hidden" name="IdDp" value="{{ $dependencia->IdDp }}" >
                                             <input type="text" name="nameDp" class="form-control @error('nameDp') is-invalid @enderror" value="{{isset( $dependencia->nameDp) ?$dependencia->nameDp:old('nameDp')}}" >

                                            {{-- Form::text('nameDp',$dependencia->nameDp,['class'=>'form-control'.($errors->has('nameDp')?'is-invalid':''),'placeholder'=>'Dependencia'])
                                            {!! $errors->first('nameDp', '<div class="invalid-feedback">:message</div>') !!}--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer mt20">
                                    <a class="btn btn-primary" href="{{ route('dependencias.index') }}" >Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@stop
