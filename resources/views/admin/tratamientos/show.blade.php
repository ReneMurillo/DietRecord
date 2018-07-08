@extends('admin.template.main')
@section('title', 'Tratamientos')
@section('titulo', 'Tratamientos')

@section('contenido')
    @if(Auth::user())

        <table class="table table-striped table-sm text-info">
            <thead class="thead-dark">
            <th>ID</th>
            <th>Usuario</th>
            <th>Medicamento</th>
            <th>Tomar</th>
            <th>Frecuencia</th>
            <th>Tiempo</th>
            <th>Indicaciones</th>
            <th>Acciones</th>
            </thead>
            <tbody>
            @foreach($tratamientos as $tratamiento)
                <tr>
                    <td>{{$tratamiento->id}}</td>
                    <td>{{$tratamiento->users->nombre_completo}}</td>
                    <td>{{$tratamiento->medicamento}}</td>
                    <td>{{$tratamiento->tomar}}</td>
                    <td>{{$tratamiento->frecuencia}}</td>
                    <td>{{$tratamiento->tiempo}}</td>
                    <td>{{$tratamiento->indicaciones}}</td>
                    <td><a href="{{route('tratamientos.edit', $tratamiento->id)}}" class="btn btn-secondary" title="Modificar"><span data-feather="edit" ></span></a>
                        <a href="{{route('admin.tratamientos.destroy', $tratamiento->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')" title="Eliminar"><span data-feather="delete" ></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>


    @endif
@endsection