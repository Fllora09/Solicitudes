@extends('layouts.layout2')

@section('content')
    @section('template_title')
        Registrar Usuario
    @endsection

    @section('content')
        <section class="content ">
            <div class=" container-fluid pt-5 row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title"> Registrar Usuario</span>
                            <div class="float-right">
                                <a class="btn btn-secondary btn-sm" href="{{ route('users.index') }}" >
                                Volver
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('user.form')

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
