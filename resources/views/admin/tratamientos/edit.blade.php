@extends('admin.template.main')
@section('title', 'Modificar tratamiento')
@section('titulo', 'Modificar tratamiento')

@section('contenido')
{!! Form::open(['route' => ['tratamientos.update', $tratamiento], 'method' => 'PUT']) !!}

<div class="form-group">
    {!! Form::label('medico', 'Médico') !!}
    {!! Form::select('id_medico', $medicos, $tratamiento->id_medico, ['class' => 'form-control', 'require']) !!}
</div>

<div class="form-group">
    {!! Form::label('medicamento', 'Medicamento') !!}
    {!! Form::text('medicamento', $tratamiento->medicamento, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('tomar', 'Tomar') !!}
    {!! Form::text('tomar', $tratamiento->tomar, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la cantidad']) !!}
</div>

<div class="form-group">
    {!! Form::label('frecuencia', 'Frecuencia') !!}
    {!! Form::text('frecuencia', $tratamiento->frecuencia, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la frecuencia']) !!}
</div>

<div class="form-group">
    {!! Form::label('tiempo', 'Durante') !!}
    {!! Form::text('tiempo', $tratamiento->tiempo, ['class' => 'form-control', 'require', 'placeholder' => 'Ingreseel tiempo que debe estar tomando']) !!}
</div>

<div class="form-group">
    {!! Form::label('indicaciones', 'Indicaciones') !!}
    {!! Form::text('indicaciones', $tratamiento->indicaciones, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese las indicaciones']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
    <a href="{{route('tratamientos.index')}}" class="btn btn-primary">Cancelar</a>
</div>

{!! Form::close() !!}

    @endsection