<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear oficina</title>
     <!-- CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Personal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="d-flex align-items-center justify-content-center mt-5">
        <a class="text-decoration-none text-secondary" href="{{ route('home') }}"><h1>Pavon office manager</h1></a>    
    </header>
    <main class="d-flex align-items-center justify-content-center mt-1">
        <form class="text-secondary" action="{{ route('createOffice') }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="d-flex align-items-center justify-content-center">
                <p>Crear una nueva oficina</p>
            </div>    
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="name" class="form-label mb-0">Nombre</label>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <input type="text" class="form-control" id="name" name="nombre" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="name" class="form-label mb-0">Dirección</label>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <input type="text" class="form-control" id="name" name="ubicacion" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <input class="btn btn-primary" type="submit" value="Crear oficina">
                </div>
            </div>
        </form>
    </main>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>