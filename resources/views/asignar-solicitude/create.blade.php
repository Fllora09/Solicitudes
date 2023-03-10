@extends('layouts.app')

@section('template_title')
    Create Asignar Solicitude
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Asignar Solicitude</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignar-solicitudes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('asignar-solicitude.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
