@extends('admin.template.main')
@section('title', 'Crear consultorio')
@section('titulo', 'Crear consultorio')

@section('contenido')

{!! Form::open(['route' => 'consultorios.store', 'method' => 'POST']) !!}

    <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el nombre del consultorio']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('direccion', 'Dirección') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la dirección del consultorio']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        <a href="{{route('consultorios.index')}}" class="btn btn-primary">Cancelar</a>
    </div>

{!! Form::close() !!}
    @endsection