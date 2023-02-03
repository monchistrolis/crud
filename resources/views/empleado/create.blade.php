<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Inscripcion</title>
</head>

<body>

    <nav style="background-color:rgb(21, 118, 118)">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/empleado') }}">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/departamento') }}">Departamentos</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex justify-content-center">
        <h1>Registro de Empleado</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre"
                        aria-describedby="helpId">
                    <label for="Apellido">Apellido Paterno</label>
                    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control"
                        placeholder="Apellido Paterno" aria-describedby="helpId">
                    <label for="ApellidoMaterno">Apellido Materno</label>
                    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control"
                        placeholder="Apellido Materno" aria-describedby="helpId">
                    <label for="Correo">Correo</label>
                    <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Correo"
                        aria-describedby="helpId">
                    <label for="Foto">Foto</label>
                    <input type="file" name="Foto" id="Foto" class="form-control" placeholder="Foto"
                        aria-describedby="helpId">
                    <div class="d-flex justify-content-center mt-3">
                        <input type="submit" name="Enviar" id="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
