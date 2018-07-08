@extends('admin.template.main')
@section('title', 'Inicio')
@section('titulo', 'Panel de administración')

        @section('contenido')
            <div class="card" style="width: 30rem; float:left;">
                <a href="{{route('users.index')}}"><img class="card-img-top" src="plugins/images/medico-paciente.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Pacientes</h5>
                    <p class="card-text">Accede al listado que contiene todos los pacientes registrados</p>
                    <a href="{{route('users.index')}}" class="btn btn-primary">Ir a usuarios</a>
                </div>
            </div>
            <div class="card" style="width: 30rem; float:left; margin-left: 6%;">
                <a href="{{route('alimentos.index')}}"><img class="card-img-top" src="plugins/images/registro.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Registro</h5>
                    <p class="card-text">Accede al registro de lo que han ingerido tus pacientes</p>
                    <a href="{{route('alimentos.index')}}" class="btn btn-primary">Ir a registro</a>
                </div>
            </div>
            <div class="card" style="width: 30rem; float:left; margin-left: 6%;">
                <a href="{{route('citas.index')}}"><img class="card-img-top" src="plugins/images/citas.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Citas</h5>
                    <p class="card-text">Revisa todas las citas que tienes programadas para esta semana</p>
                    <a href="{{route('citas.index')}}" class="btn btn-primary">Ir a citas</a>
                </div>
            </div>

            <div class="card" style="width: 30rem; float:left; margin-top: 3%; margin-bottom: 2%;">
                <a href="{{route('tratamientos.index')}}"><img class="card-img-top" src="plugins/images/tratamiento.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Tratamientos</h5>
                    <p class="card-text">Ingresa al listado de tratamientos a los que est[an sometidos tus pacientes</p>
                    <a href="{{route('tratamientos.index')}}" class="btn btn-primary">Ir a tratamientos</a>
                </div>
            </div>
            <div class="card" style="width: 30rem; float:left; margin-left: 6%; margin-top: 3%; margin-bottom: 2%;">
                <a href="{{route('consultorios.index')}}"><img class="card-img-top" src="plugins/images/hospital.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Consultorios</h5>
                    <p class="card-text">Accede a todos los consultorios que actualmente utilizan DietRecord</p>
                    <a href="{{route('consultorios.index')}}" class="btn btn-primary">Ir a Consultorios</a>
                </div>
            </div>
            <div class="card" style="width: 30rem; float:left; margin-left: 6%; margin-top: 3%; margin-bottom: 2%;">
                <a href="{{'expedientes.index'}}"><img class="card-img-top" src="plugins/images/expedientes.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Expedientes</h5>
                    <p class="card-text">Consulta el expediente de cada uno de los usuarios registrados</p>
                    <a href="{{'expedientes.index'}}" class="btn btn-primary">Ir a expedientes</a>
                </div>
            </div>
    @endsection