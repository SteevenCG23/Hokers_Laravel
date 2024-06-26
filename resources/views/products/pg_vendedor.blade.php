<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Icon page-->
    <link rel="icon" href="{{ asset('images/Logo_Hokers.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/pg_vendedor.css') }}">

    <title>Hokers</title>

</head>

<body class="background-radial-gradient overflow-hidden">

    <div class="container overflow-hidden text-center">
        <div class="row gy-1">
            <div class="col-6">
                <div class="p-3 custom-column">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/image-upload-free-png.webp') }}" height="100px" class=" mx-auto p-3">

                        <div class="card-body">
                            <a href="{{ route('vista_pg') }}" class="btn btn-primary">SUBIR PRODUCTO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 custom-column">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/3825143-middle-removebg-preview.png') }}" height="100px"
                            class=" mx-auto p-3" alt="...">
                        <div class="card-body">
                            <a href="{{ route('perfil') }}" class="btn btn-primary">IR AL PERFIL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="p-3 custom-column">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/salir-removebg-preview.png') }}" height="100px" class=" mx-auto p-3"
                            alt="...">
                        <div class="card-body">
                            <a href="#" class="btn btn-gray mb-4">CERRAR SESIÓN</a>
                            {{-- <a class="btn btn-gray mb-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                CERRAR SESIÓN
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
