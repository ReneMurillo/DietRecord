@extends('admin.template.main')
@section('title', 'Modificar cita')
@section('titulo', 'Modificar cita')

@section('contenido')

{!! Form::open(['route' => ['citas.update', $cita], 'method' => 'PUT']) !!}

<div class="form-group">
    {!! Form::text('id_usuario', $cita->id_usuario, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el ID', 'hidden']) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha de la cita') !!}
    {!! Form::date('fecha', $cita->fecha, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('hora', 'Hora de la cita') !!}
    {!! Form::time('hora', $cita->hora, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('causa', 'Causa') !!}
    {!! Form::text('causa', $cita->causa, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la causa de la cita']) !!}
</div>

<div class="form-group">
    {!! Form::label('medico', 'Médico') !!}
    {!! Form::select('id_medico', $medicos, $cita->id_medico, ['class' => 'form-control', 'require']) !!}
</div>

<div class="form-group">
    {!! Form::label('consultorio', 'Consultorio') !!}
    {!! Form::select('id_consultorio', $consultorios, $cita->id_consultorio, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('diagnostico', 'Diagnóstico') !!}
    {!! Form::text('diagnostico', $cita->diagnostico, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el Diagnóstico realizado']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{route('citas.index')}}" class="btn btn-primary">Cancelar</a>
</div>

{!! Form::close() !!}

    @endsection