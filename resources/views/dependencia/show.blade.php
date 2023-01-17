@extends('layouts.app')

@section('template_title')
    {{ $dependencia->name ?? 'Show Dependencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dependencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dependencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                         <div class="form-group">
                            <strong>Iddp:</strong>
                            {{ $dependencia->IdDp }}
                        </div>
                        <div class="form-group">
                            <strong>Namedp:</strong>
                            {{ $dependencia->nameDp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
