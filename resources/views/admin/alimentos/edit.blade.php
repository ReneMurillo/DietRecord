@extends('admin.template.main')
@section('title', 'Editar alimentos ingeridos')
@section('titulo', 'Editar alimentos ingeridos')

@section('contenido')

@if(Auth::user())

{!! Form::open(['route' => ['alimentos.update', $alimento], 'method' => 'PUT']) !!}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre del alimento') !!}
    {!! Form::text('nombre', $alimento->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese el nombre del alimento']) !!}
</div>

<div class="form-group">
    {!! Form::label('proporcion', 'Proporción ingerida') !!}
    {!! Form::text('proporcion', $alimento->proporcion, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese la cantidad ingerida']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{route('alimentos.index')}}" class="btn btn-primary">Cancelar</a>
</div>


{!! Form::close() !!}

    @endif
    @endsection