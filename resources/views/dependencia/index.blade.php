@extends('adminlte::page')

@section('content')

    @section('template_title')
        Dependencia
    @endsection

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Dependencia') }}
                                </span>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('dependencias.create') }}"> Agregar</a>
                                </div>
                                {{-- <div class="float-right">
                                    <a href="{{ route('dependencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="usuariosr" class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Dependencia</th>
                                            <th>Fecha creacion</th>
                                            <th>Actualizado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($dependencias as $dependencia)
                                            <tr>
                                                {{-- {{ $i++ }} --}}
                                                <td>{{ $dependencia->IdDp }}</td>
                                                <td>{{ $dependencia->nameDp }}</td>
                                                <td>{{ $dependencia->created_at }}</td>
                                              {{--  <td>
                                                    <form method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('dependencias.show',$dependencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('dependencias.edit',$dependencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    </form>
                                                    <form action="{{ route('dependencias.destroy',$dependencia->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>--}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('#usuariosr').DataTable();
        });
  </script>
@stop

