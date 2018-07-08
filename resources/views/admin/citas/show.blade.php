@extends('admin.template.main')
@section('title', 'Citas')
@section('titulo', 'Citas')

@section('contenido')

@if(Auth::user())

    <table class="table table-striped table-sm text-info">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Causa</th>
        <th>Médico</th>
        <th>Consultorio</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{{$cita->id}}</td>
                <td>{{optional($cita->usuarios)->nombre_completo}}</td>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->hora}}</td>
                <td>{{$cita->causa}}</td>
                <td>{{optional($cita->medicos)->nombre_completo}}</td>
                <td>{{optional($cita->consultorio)->nombre}}</td>
                <td><a href="{{route('citas.edit', $cita->id)}}" class="btn btn-secondary btn-sm" title="Modificar"><span data-feather="edit" ></span></a>
                    <a href="{{route('admin.tratamientos.create', $cita->id)}}" class="btn btn-warning btn-sm" title="Asignar tratamiento"><span data-feather="thermometer" ></span></a>
                    <a href="{{route('admin.citas.destroy', $cita->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endif

    @endsection