@extends('admin.template.main')
@section('title', 'Consultorios')
@section('titulo', 'Consultorios')

@section('contenido')
@if(Auth::user())
    <a href="{{ route('consultorios.create') }}" class="btn btn-info">Registrar nuevo consultorio</a>
    <table class="table table-striped table-sm text-info">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($consultorio as $consultorios)
            <tr>
                <td>{{$consultorios->id}}</td>
                <td>{{$consultorios->nombre}}</td>
                <td>{{$consultorios->direccion}}</td>
                <td><a href="{{route('consultorios.edit', $consultorios->id)}}" class="btn btn-secondary" title="Modificar"><span data-feather="edit" ></span></a>
                    <a href="{{route('admin.consultorios.destroy', $consultorios->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $consultorio->links('vendor.pagination.bootstrap-4') !!}

@endif
    @endsection