@extends('admin.template.main')

@section('title', $user->nombre_completo)
@section('titulo', 'Información de ' . $user->nombre_completo)

@section('contenido')
@if(Auth::user())

    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre completo') !!}
        {!! Form::text('nombre_completo', $user->nombre_completo, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
        {!! Form::date('fecha_nacimiento', $user->fecha_nacimiento, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genero', 'Género: ') !!}
        {!! Form::text('genero', $user->genero, ['class' => 'form-control', 'Readonly'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('tipo', 'Tipo de usuario') !!}
        {!! Form::text('tipo', $user->tipo, ['class' => 'form-control', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Nombre de usuario') !!}
        {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'Número de teléfono'); !!}
        {!! Form::text('telefono', $user->telefono, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('celular', 'Número de celular'); !!}
        {!! Form::text('celular', $user->celular, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de celular', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('correo', 'Correo electrónico'); !!}
        {!! Form::email('correo', $user->correo, ['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('direccion', 'Dirección') !!}
        {!! Form::text('direccion', $user->direccion, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dui', 'DUI') !!}
        {!! Form::text('dui', $user->dui, ['class' => 'form-control', 'placeholder' => '12345678-9', 'required', 'Readonly']) !!}
    </div>

    <div class="form-group">
        <a href="{{route('users.index')}}" class="btn btn-info">Regresar</a>
    </div>

    {!! Form::close()!!}

@endif
    @endsection