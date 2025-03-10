<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
     <!-- CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="d-flex align-items-center justify-content-center mt-5">
        <a class="text-decoration-none text-secondary" href="{{ route('home') }}"><h1>Pavon office manager</h1></a>    
    </header>
    <main class="d-flex align-items-center justify-content-center mt-1">
        <form class="text-secondary" action="{{ route('createUser') }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="d-flex align-items-center justify-content-center">
                <p>Crear un nuevo usuario</p>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="nombre" class="form-label mb-0">Nombre *</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="primer_apellido" class="form-label mb-0">Primer Apellido *</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="segundo_apellido" class="form-label mb-0">Segundo Apellido</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="rol" class="form-label mb-0">Rol</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="rol" name="rol">
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="fecha_de_nacimiento" class="form-label mb-0">Fecha de Nacimiento</label>
                </div>
                <div class="col-6">
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_de_nacimiento">
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="DNI" class="form-label mb-0">DNI *</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="DNI" name="DNI" required pattern="[0-9]{8}[A-Za-z]" title="Debe tener 8 números seguidos de una letra">
                    
                    <script>
                        console.log({{ $errors }})
                    </script>

                @error('DNI')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <label for="email" class="form-label mb-0">Email *</label>
                </div>
                <div class="col-6">
                    <input type="email" class="form-control" id="email" name="email" required>
                    @if($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <input class="btn btn-primary" type="submit" value="Crear Usuario">
                </div>
            </div>
            <input type="hidden" name="oficina_id" value="{{$idOficina}}">
        </form>
    </main>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
