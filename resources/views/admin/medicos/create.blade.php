@extends('admin.template.main')
@section('title', 'Registrar Médico')
@section('titulo', 'Registrar Médico')

@section('contenido')

{!! Form::open(['route' => 'medicos.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre completo') !!}
        {!! Form::text('nombre_completo', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el nombre completo']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('especialidad', 'Especialidad') !!}
        {!! Form::text('especialidad', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la especialidad del médico']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('licencia', 'N° de Licencia') !!}
        {!! Form::text('licencia', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el N° de licencia del médico']) !!}
    </div>

<div class="form-group">
    {!! Form::label('consultorio', 'Consultorio') !!}
    {!! Form::select('id_consultorio', $consultorios, null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un consultorio']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-info']) !!}
    <a href="{{route('medicos.index')}}" class="btn btn-info">Cancelar</a>
</div>

{!! Form::close() !!}

    @endsection