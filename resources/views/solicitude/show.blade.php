@extends('layouts.app')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idsolitd:</strong>
                            {{ $solicitude->idSolitd }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $solicitude->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Detailsoli:</strong>
                            {{ $solicitude->detailSoli }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $solicitude->status }}
                        </div>
                        <div class="form-group">
                            <strong>User:</strong>
                            {{ $solicitude->user }}
                        </div>
                        <div class="form-group">
                            <strong>Dependencia:</strong>
                            {{ $solicitude->dependencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
