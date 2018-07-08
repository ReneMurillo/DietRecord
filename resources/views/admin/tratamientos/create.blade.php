@extends('admin.template.main')
@section('title', 'Asignar tratamiento')
@section('titulo', 'Asignar tratamiento')

@section('contenido')

{!! Form::open(['route' => 'tratamientos.store', 'method' => 'POST']) !!}

<div class="form-group">
    {!! Form::text('id_usuario', $cita->usuarios->id, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el ID', 'hidden']) !!}
</div>

<div class="form-group">
    {!! Form::text('id_cita', $cita->id, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el ID', 'hidden']) !!}
</div>

<div class="form-group">
    {!! Form::text('id_medico', $cita->id_medico, ['class' => 'form-control', 'require', 'placeholder' => 'Seleccione el médico', 'hidden']) !!}
</div>

<div class="form-group">
    {!! Form::label('medicamento', 'Medicamento') !!}
    {!! Form::text('medicamento', null, ['class' => 'form-control', 'required', 'placeholder' => 'ingrese el nombre del medicamento']) !!}
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
    {!! Form::text('tiempo', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese el tiempo que debe estar tomando']) !!}
</div>

<div class="form-group">
    {!! Form::label('indicaciones', 'Indicaciones') !!}
    {!! Form::text('indicaciones', null, ['class' => 'form-control', 'require', 'placeholder' => 'Ingrese las indicaciones']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{{route('tratamientos.index')}}" class="btn btn-primary">Cancelar</a>
</div>

{!! Form::close() !!}

    @endsection