
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Bienvenidos a DietRecord</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/personal.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="">DietRecord</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" hidden="hidden" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" hidden="hidden" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" hidden="hidden" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" action="{{route('login')}}">
                <a href="{{route('login')}}"> <button class="btn btn-info my-2 my-sm-0" type="submit">Ingresar</button> </a>
            </form>
        </div>
    </nav>
</header>

<main role="main">

    <div class="banner">
        <img src="{{asset('plugins/images/citas-banner.jpg')}}">

        <div class="centrado">
            <h1>Gestión de Pacientes</h1>
            <h3>Olvídate de las enormes pilas de papel. Compra DietRecord y descubre una nueva manera de gestionar tus pacientes, programarles citas y
                asignarles tratamientos.
            </h3>
        </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" id="contenedor">

        <!-- Three columns of text below the carousel -->
        <div class="row">
                <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('plugins/images/citas-promo.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Programación de citas</h2>
                <p>Usar DietRecord te permite administrar tus citas de manera fácil y rápida. Envía recordatorios a tus pacientes para garantizar que esta fecha importante no se les olvide.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('plugins/images/Alimentos-saludables.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Registro de alimentos ingeridos</h2>
                <p>Puedes consultar en cualquier momento el registro general de lo que han estado comiendo tus pacientes. También permite seguir individualmente el registro de cada uno de ellos.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('plugins/images/appmovil.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Aplicación móvil para pacientes</h2>
                <p>Tus pacientes contarán con una aplicación que les permite registrar los alimentos que ingieren, acceder a las indicaciones de los tratamientos y revisar cuánto falta para su próxima cita.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Beneficio</h2>
                <p class="lead">
                    Software diseñado para médicos especialistas esmerados en mejorar la calidad de vida alimenticia de sus pacientes referente a los trastornos
                    alimenticios, el cual permitirá tener un perfil y un registro de cada paciente;  estudios revelan que mas del 80% de la población no sigue una
                    dieta rica y balanceada con lo cual el sobrepeso y la obesidad es un problema que se vive día con día.

                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{asset('plugins/images/beneficio.jpg')}}" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Principales características</h2>
                <p class="lead">El paciente, a través de la aplicación móvil registra a lo largo del día todo lo que come, esto se sincroniza con una aplicación que tendrá el médico para que,
                    al momento de la cita, el médico revise el perfil del usuario y vea qué ha estado comiendo y ayudar a dar su diagnóstico y el respectivo tratamiento.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="{{asset('plugins/images/caracteristicas.jpg')}}" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">


        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->

</main>

<footer>
    <div>
        <section id="about">
            <header>
                <h3>¿Quiénes somos?</h3>
            </header>
            <p>
                Somos una empresa líder en la innovación tecnológica por nuestro aporte en el desarrollo sistemático,
                económico y social de El Salvador. Enfocada a satisfacer las necesidades de profesionales y empresas:
                mediante el desarrollo e innovación de sistemas informáticos.
            </p>
        </section>
        <section id="blogroll">
            <header>
                <h3>Desarrolladores</h3>
            </header>
            <ul>
                <li>Stefany Nallely Vásquez Guandique</li>
                <li>Hector Mauricio Ayala Castillo</li>
                <li>René Alfredo Murillo Rivera</li>
            </ul>
        </section>
        <section id="popular">
            <header>
                <h3>Contacto</h3>
            </header>
            <ul>
                <li><h5>Números telefónicos</h5></li>
                <ul>
                <li>+503 7252-1336</li>
                <li>+503 6001-7332</li>
                <li>+503 7372-8834</li>
                </ul>
                <li><h5>Correo</h5></li>
                <ul>
                <li>masterdevelopment7@gmail.com</li>
                </ul>
            </ul>
        </section>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../../../assets/js/vendor/holder.min.js"></script>

</body>
</html>
