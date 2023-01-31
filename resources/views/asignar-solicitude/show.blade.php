@extends('layouts.app')

@section('template_title')
    {{ $asignarSolicitude->name ?? 'Show Asignar Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignar Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignar-solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idsolitd:</strong>
                            {{ $asignarSolicitude->idSolitd }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
