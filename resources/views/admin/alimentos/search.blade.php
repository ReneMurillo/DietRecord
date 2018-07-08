@extends('admin.template.main')
@section('title', 'Alimentos')
@section('titulo', 'Alimentos')

@section('contenido')

@if(Auth::user())



    <table class="table table-striped text-info">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Proporción</th>
        <th>Fecha y hora</th>
        <th>Actions</th>
        </thead>
        <tbody>
        @foreach($alimentos as $alimento)
            <tr>
                <td>{{$alimento->id}}</td>
                <td>{{optional($alimento->usuarios)->nombre_completo}}</td>
                <td>{{$alimento->nombre}}</td>
                <td>{{$alimento->proporcion}}</td>
                <td>{{$alimento->created_at}}</td>
                <td><a href="{{route('alimentos.edit', $alimento->id)}}" class="btn btn-secondary">Modificar</a><a href="{{route('admin.alimentos.destroy', $alimento->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endif
    @endsection