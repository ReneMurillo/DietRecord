@extends('admin.template.main')

@section('title', 'Pacientes')
@section('titulo', 'Pacientes')
@section('contenido')

<a href="{{ route('users.create') }}" class="btn btn-info">Registrar nuevo paciente</a>

{!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class'=>'navbar-form pull-right']) !!}

            <div class="input-group">
                <div class="input-group-prepend">
                    {!! Form::text('nombre_completo', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario']) !!}
                    <div class="input-group-text">

                            <span data-feather="search" ></span>



                    </div>

                </div>

            </div>

    {!! Form::close() !!}
<div class="table-responsive">
    <table class="table table-striped table-sm text-info">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Tipo de usuario</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nombre_completo}}</td>
            <td>{{$user->genero}}</td>
            <td>{{$user->tipo}}</td>
            <td>{{$user->celular}}</td>
            <td>{{$user->correo}}</td>
            <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-secondary btn-sm" title="Editar"><span data-feather="edit" ></span></a>
                <a href="{{route('admin.citas.create', $user->id)}}" class="btn btn-success btn-sm" title="Crear cita"><span data-feather="calendar" ></span></a>
                <a href="{{route('citas.show', $user->id)}}" class="btn btn-success btn-sm" title="Ver citas"><span data-feather="eye" ></span></a>
                <a href="{{route('admin.alimentos.search', $user->id)}}" class="btn btn-info btn-sm" title="Registro de alimentos"><span data-feather="file-text" ></span></a>
                <a href="{{route('tratamientos.show', $user->id)}}" class="btn btn-warning btn-sm" title="Ver tratamientos"><span data-feather="eye" ></span></a>
                <a href="{{route('expedientes.show', $user->id)}}" class="btn btn-info btn-sm" title="Ver registro médico"><span data-feather="save" ></span></a>
                <a href="{{route('users.show', $user->id)}}" class="btn btn-primary btn-sm" title="Ver información de usuario"><span data-feather="eye" ></span></a>
                <a href="{{route('admin.users.destroy', $user->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
            </td>
        </tr>
            @endforeach
    </tbody>

</table>
</div>
<center>{!! $users->links('vendor.pagination.bootstrap-4') !!}</center>

    @endsection