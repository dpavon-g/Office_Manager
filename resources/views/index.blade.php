<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficinas</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Personal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="d-flex align-items-center justify-content-center">
        <a class="text-decoration-none text-secondary" href="{{ route('home') }}"><h1>Gestor oficinas Pavón</h1></a>    
    </header>
    <main class="d-flex align-items-center justify-content-center mt-1">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                <a class="btn btn-primary" href="{{ route('newOffice') }}">Añadir oficina</a>
            </div>
            <div class="col-12 d-flex align-items-center justify-content-center">
                @if($Oficinas->isNotEmpty())
                    <ul class="list-group d-flex align-items-center justify-content-center">
                        @foreach($Oficinas as $oficina)
                            <li class="list-group-item d-flex align-items-center justify-content-center mb-2"><a href="#">{{ $oficina->nombre }}</a></li>
                        @endforeach
                    </ul>
                @else
                    <p>No hay oficinas disponibles.</p>
                @endif
            </div>
        </div>
       
    </main>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>