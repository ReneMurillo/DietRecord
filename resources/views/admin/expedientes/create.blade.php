@extends('admin.template.main')

@section('title', 'Asignar tratamiento')

{!! Form::open(['route' => 'tratamientos.store', 'method' => 'POST']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'ID Usuario') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el ID']) !!}
</div>

<div class="form-group">
    {!! Form::label('medico', 'ID Medico') !!}
    {!! Form::text('id_medico', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('medicamento', 'Medicamento') !!}
    {!! Form::text('medicamento', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('tomar', 'Tomar') !!}
    {!! Form::text('tomar', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la cantidad']) !!}
</div>

<div class="form-group">
    {!! Form::label('frecuencia', 'Frecuencia') !!}
    {!! Form::text('frecuencia', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese la frecuencia']) !!}
</div>

<div class="form-group">
    {!! Form::label('tiempo', 'Durante') !!}
    {!! Form::text('tiempo', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingreseel tiempo que debe estar tomando']) !!}
</div>

<div class="form-group">
    {!! Form::label('indicaciones', 'Indicaciones') !!}
    {!! Form::text('indicaciones', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese las indicaciones']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-info']) !!}
</div>
<a href="{{route('expedientes.index')}}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}