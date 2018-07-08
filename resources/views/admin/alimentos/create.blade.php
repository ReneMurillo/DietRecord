@extends('admin.template.main')
@section('title', 'Registrar alimentos ingeridos')
@section('titulo', 'Registrar alimentos ingeridos')

@section('contenido')
@if(Auth::user())

    {!! Form::open(['route' => 'alimentos.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre del alimento') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese el nombre del alimento']) !!}
        </div>

        <div class="form-group">
            {!! Form::number('id_usuario', Auth::user()->id, ['class' => 'form-control', 'hidden', 'required', 'placeholder' => 'Ingrese el nombre del alimento']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('proporcion', 'Proporción ingerida') !!}
            {!! Form::text('proporcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese la cantidad ingerida']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('alimentos.index')}}" class="btn btn-info">Cancelar</a>
        </div>


    {!! Form::close() !!}
    @endif
    @endsection