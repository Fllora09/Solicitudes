@extends('layouts.layout2')

@section('template_title')
    {{ $user->name ?? 'Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Editar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('users.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                            {{-- <form method="POST">
                                <div class="float-right">
                                    <a class="" href="{{ route('users.edit') }}">Editar</a>
                                </div>
                            </form> --}}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                            {{-- <div class="float-right">
                                <a class="" href="{{ route('users.edit',$user->email) }}">Editar</a>
                            </div> --}}
                        </div>
                        <div class="box-footer float-right mt20">
                            {{-- <button type="submit" class="btn btn-primary">Editar</button> --}}
                            <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}">
                                <i class="fa fa-fw fa-edit"></i>
                                 Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
