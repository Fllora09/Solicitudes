@extends('layouts.layout2')
    @section('content')
        @section('template_title')
            Solicitude
        @endsection

        @section('content')
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Solicitude') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('solicitudes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Nueva') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                {{-- <th>No</th> --}}

                                                <th>Numero</th>
                                                <th>Titulo</th>
                                                <th>Descripcion</th>
                                                <th>Status</th>
                                                {{-- <th>Solicitante</th>
                                                <th>Dependencia</th> --}}
                                                <th>Acciones</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($solicitudes as $solicitude)
                                                <tr>
                                                    {{-- <td>{{ ++$i }}</td> --}}

                                                    <td>#{{ $solicitude->idSolitd }}</td>
                                                    <td>{{ $solicitude->titulo }}</td>
                                                    <td>{{ $solicitude->detailSoli }}</td>
                                                    <td>{{ $solicitude->status }}</td>
                                                    {{-- <td>{{ $solicitude->user}}</td>
                                                    <td>{{ $solicitude->dependencia }}</td> --}}

                                                    {{-- @foreach($solicitude->dependencias as $dependencia)
                                                        <td>{{ $dependencia->nameDp }}</td>
                                                    @endforeach --}}

                                                    {{-- --}}

                                                     <td>
                                                        <form method="POST">
                                                            <a class="float-left  btn btn-sm btn-warning" href=""><i class="fa fa-fw fa-door-closed"></i>Cerrar</a>
                                                        </form>
                                                    </td>
                                                    {{-- <td>
                                                        <form method="POST">
                                                            {{-- en este se asigna al usuario tecnico que se encarga de la solicitud"
                                                            href="{{ route('solicitudes.edit',$solicitude->id) }}">
                                                            <a class="float-left  btn btn-sm btn-success" href="">
                                                                <i class="fa fa-fw fa-edit">
                                                                </i> Editar</a>
                                                        </form>
                                                    </td>--}}
                                                    <td>
                                                        <form method="POST">
                                                           {{--<a class="btn btn-sm btn-primary " href="{{ route('solicitudes.show',$solicitude->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                           --}}
                                                            <a class="float-left  btn btn-sm btn-info" href="{{ route('solicitudes.show',$solicitude->idSolitd) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        {{-- <form action="{{ route('solicitudes.destroy',$solicitude->id) }}" method="POST"> --}}
                                                        <form action="" method="POST">
                                                             @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="px-4 py-3" colspan="4">No se encontraron solicitudes.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- {!! $solicitudes->links() !!} --}}
                    </div>
                </div>
            </div>
        @endsection
    @stop
