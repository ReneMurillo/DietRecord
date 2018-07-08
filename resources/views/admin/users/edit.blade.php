@extends('admin.template.main')

@section('title', 'Modificar información de paciente')
@section('titulo', 'Modificar información de paciente')

@section('contenido')
@if(Auth::user())

{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre completo') !!}
        {!! Form::text('nombre_completo', $user->nombre_completo, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
        {!! Form::date('fecha_nacimiento', $user->fecha_nacimiento, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genero', 'Género: ') !!}
        {!! Form::label('genero', 'Masculino') !!}
        {!! Form::radio('genero', 'Masculino') !!}
        {!! Form::label('genero', 'Femenino') !!}
        {!! Form::radio('genero', 'Femenino') !!}
    </div>

    <div class="form-group">
        {!! Form::label('tipo', 'Tipo de usuario') !!}
        {!! Form::select('tipo', ['Paciente' => 'Paciente', 'Medico' => 'Médico', 'Admin' => 'Administrador'], $user->tipo, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Nombre de usuario') !!}
        {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'Número de teléfono'); !!}
        {!! Form::text('telefono', $user->telefono, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('celular', 'Número de celular'); !!}
        {!! Form::text('celular', $user->celular, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de celular']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('correo', 'Correo electrónico'); !!}
        {!! Form::email('correo', $user->correo, ['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('direccion', 'Dirección') !!}
        {!! Form::text('direccion', $user->direccion, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dui', 'DUI') !!}
        {!! Form::text('dui', $user->dui, ['class' => 'form-control', 'placeholder' => '12345678-9', 'required']) !!}
    </div>

<div class="form-group">
    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-info']) !!}
    <a href="{{route('users.index')}}" class="btn btn-info">Cancelar</a>
</div>

{!! Form::close()!!}

@endif
    @endsection