@extends('admin.template.main')
@section('title', 'Registro médico')
@section('titulo', 'Registro médico')

@section('contenido')
    @if(Auth::user())

        <table class="table table-striped table-sm text-info">
            <thead class="thead-dark">
            <th>Usuario</th>
            <th>Fecha-Cita</th>
            <th>Médico</th>
            <th>Diagnostico</th>
            <th>Tomar</th>
            <th>Frecuencia</th>
            <th>Tiempo</th>
            <th>Indicaciones</th>
            </thead>
            <tbody>
            @foreach($citas as $cita)
                @foreach($tratamiento as $trat)
                <tr>
                    <td>{{$cita->usuarios->nombre_completo}}</td>
                    <td>{{$cita->fecha}}</td>
                    <td>{{$cita->medicos->nombre_completo}}</td>
                    <td>{{$cita->diagnostico}}</td>
                    <td>{{$trat->medicamento}}</td>
                    <td>{{$trat->frecuencia}}</td>
                    <td>{{$trat->tiempo}}</td>
                    <td>{{$trat->indicaciones}}</td>
                </tr>
                    @endforeach
            @endforeach
            </tbody>

        </table>

    @endif
@endsection