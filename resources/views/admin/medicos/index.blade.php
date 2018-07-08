@extends('admin.template.main')
@section('title', 'Médicos')
@section('titulo', 'Médicos')

@section('contenido')

@if(Auth::user())

    <a href="{{ route('medicos.create') }}" class="btn btn-info">Nuevo médico</a>
    <table class="table table-striped table-sm text-info">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Nombre</th>
        <th>Especialidad</th>
        <th>N° Licencia</th>
        <th>Consultorio</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($medicos as $medico)
            <tr>
                <td>{{$medico->id}}</td>
                <td>{{$medico->nombre_completo}}</td>
                <td>{{$medico->especialidad}}</td>
                <td>{{$medico->licencia}}</td>
                <td>{{$medico->consultorio->nombre}}</td>
                <td><a href="{{route('medicos.edit', $medico->id)}}" class="btn btn-secondary" title="Modificar"><span data-feather="edit" ></span></a>
                    <a href="{{route('admin.medicos.destroy', $medico->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $medicos->links('vendor.pagination.bootstrap-4') !!}

@endif

    @endsection