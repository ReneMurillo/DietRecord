
@extends('admin.template.main')
@section('title', 'Crear usuario')
@section('titulo', 'Crear usuario')

@section('contenido')

{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre completo') !!}
        {!! Form::text('nombre_completo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo', 'required']) !!}
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
        {!! Form::select('tipo', ['Paciente' => 'Paciente', 'Medico' => 'Médico', 'Admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder'=>'Seleccione un tipo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Nombre de usuario') !!}
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pass', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'Número de teléfono'); !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('celular', 'Número de celular'); !!}
        {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de celular']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('correo', 'Correo electrónico'); !!}
        {!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('direccion', 'Dirección') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dui', 'DUI') !!}
        {!! Form::text('dui', null, ['class' => 'form-control', 'placeholder' => '12345678-9', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        <a href="{{route('users.index')}}" class="btn btn-primary">Cancelar</a>
    </div>


{!! Form::close()!!}

    @endsection