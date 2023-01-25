@extends('adminlte::page')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 border-info">
            <div class="card text-center border-info mb-3">
                <div class="card-header bg-info">
                  <h5>Solicitudes para soporte tecnico</h5>
                </div>
                <div class="card-body ">

                  <p class="card-text text-info">Puedes ir generando tus solicitudes.</p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-info">Agregar Solicitud</a>
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
