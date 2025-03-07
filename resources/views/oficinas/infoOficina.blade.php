<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Personal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="d-flex align-items-center justify-content-center">
        <a class="text-decoration-none text-secondary" href="{{ route('home') }}"><h1>Pavon office manager</h1></a>    
    </header>
    <main class="d-flex align-items-center justify-content-center mt-1">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                <a class="btn btn-primary" href="{{ route('newEmpleado', ['idOficina' => $oficina->id]) }}">Añadir empleado</a>
            </div>
            <div class="col-12">
                <p><b>Nombre:</b> {{ $oficina->nombre }}</p>
                <p><b>Ubicacion:</b> {{ $oficina->ubicacion }}</p>
            </div>
            <div class="col-12">
                <h3>Empleados:</h3>

                @if($oficina->empleados->isNotEmpty())
                    <ul class="list-group d-flex align-items-center justify-content-center">
                        @foreach($oficina->empleados as $empleado)
                            <li class="list-group-item mb-3">
                                <a href="#">
                                    {{ $empleado->nombre }} {{ $empleado->primer_apellido }} - {{ $empleado->rol }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No hay empleados en esta oficina.</p>
                @endif
            </div>
        </div>
    </main>
</body>
</html>