@extends('admin.template.main')
@section('title', 'Modificar consultorio')
@section('titulo', 'Modificar consultorio')

@section('contenido')

{!! Form::open(['route' => ['consultorios.update', $consultorio], 'method' => 'PUT']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', $consultorio->nombre, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el nombre del consultorio']) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', $consultorio->direccion, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la dirección del consultorio']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-info']) !!}
</div>
<a href="{{route('consultorios.index')}}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

    @endsection