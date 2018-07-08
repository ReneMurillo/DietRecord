@extends('admin.template.main')
@section('title', 'Crear Cita')
@section('titulo', 'Crear Cita')

@section('contenido')

{!! Form::open(['route' => 'citas.store', 'method' => 'POST']) !!}

<div class="form-group">
    {!! Form::text('id_usuario', $usuario->id, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el ID', 'hidden']) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha de la cita') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha', 'Hora de la cita') !!}
    {!! Form::time('hora', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('causa', 'Causa') !!}
    {!! Form::text('causa', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la causa de la cita']) !!}
</div>

<div class="form-group">
    {!! Form::label('medico', 'Médico') !!}
    {!! Form::select('id_medico', $medicos, null, ['class' => 'form-control', 'require', 'placeholder' => 'Seleccione el médico']) !!}
</div>

<div class="form-group">
    {!! Form::label('consultorio', 'Consultorio') !!}
    {!! Form::select('id_consultorio', $consultorios, null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un consultorio']) !!}
</div>

<div class="form-group">
    {!! Form::label('diagnostico', 'Diagnóstico') !!}
    {!! Form::text('diagnostico', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el Diagnóstico realizado']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-info']) !!}
    <a href="{{route('users.index')}}" class="btn btn-info">Cancelar</a>
</div>
{!! Form::close() !!}

    @endsection