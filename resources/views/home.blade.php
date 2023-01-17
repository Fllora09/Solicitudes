@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="card-body">
                    <p>Welcome to this beautiful admin panel.</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!
                    aqui es donde se indicara que es lo primero que hara el admin,
                     osea que ingresar las dependencias') }}

                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> Swal.fire(
    'Hola!',
    'Debes agregra las dependencias solicitantes'
  )</script>
@stop
