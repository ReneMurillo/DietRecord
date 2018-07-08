@extends('admin.template.main')
@section('title', 'Alimentos')
@section('titulo', 'Alimentos')

@section('contenido')

@if(Auth::user())


<table class="table table-striped table-sm text-info">
    <thead class="thead-dark">
    <th>ID</th>
    <th>Usuario</th>
    <th>Nombre</th>
    <th>Proporción</th>
    <th>Fecha y hora</th>
    <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($alimentos as $alimento)
        <tr>
            <td>{{$alimento->id}}</td>
            <td>{{optional($alimento->usuarios)->nombre_completo}}</td>
            <td>{{$alimento->nombre}}</td>
            <td>{{$alimento->proporcion}}</td>
            <td>{{$alimento->created_at}}</td>
            <td><a href="{{route('alimentos.edit', $alimento->id)}}" class="btn btn-secondary" title="Modificar"><span data-feather="edit" ></span></a>
                <a href="{{route('admin.alimentos.destroy', $alimento->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
{!! $alimentos->links('vendor.pagination.bootstrap-4') !!}

    @endif

    @endsection