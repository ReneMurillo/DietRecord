@extends('admin.template.main')
@section('title', 'Modificar Médico')
@section('titulo', 'Modificar Médico')

@section('contenido')

{!! Form::open(['route' => ['medicos.update', $medico], 'method' => 'PUT']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'Nombre completo') !!}
    {!! Form::text('nombre_completo', $medico->nombre_completo, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el nombre completo']) !!}
</div>

<div class="form-group">
    {!! Form::label('especialidad', 'Especialidad') !!}
    {!! Form::text('especialidad', $medico->especialidad, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la especialidad del médico']) !!}
</div>

<div class="form-group">
    {!! Form::label('licencia', 'N° de Licencia') !!}
    {!! Form::text('licencia', $medico->licencia, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el N° de licencia del médico']) !!}
</div>

<div class="form-group">
    {!! Form::label('consultorio', 'Consultorio') !!}
    {!! Form::select('id_consultorio', $consultorios, $medico->id_consultorio, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-info']) !!}
    <a href="{{route('medicos.index')}}" class="btn btn-info">Cancelar</a>
</div>

{!! Form::close() !!}

    @endsection