{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('content')
    @section('template_title')
        Create Dependencia
    @endsection

    @section('content')
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Create Dependencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dependencias.index') }}" >
                            Volver a Dependencias
                            </a>
                        </div>
                        <div class="card-body">
                            {{-- <form method="POST" action="{{ route('dependencias.store') }}"  role="form" enctype="multipart/form-data"> --}}
                            <form method="POST" action="{{ route('dependencias.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('dependencia.form')
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@stop
