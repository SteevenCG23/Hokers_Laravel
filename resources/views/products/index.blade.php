<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icon page-->
    <link rel="icon" href="{{ asset('images/Logo_Hokers.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Hokers</title>
    
</head>

<body class="background-radial-gradient overflow-auto">

    <h1 class="text-center  font-weight-bold p-5" style="color:white">MIS PRODUCTOS</h1>

    <div class="p-3 table-responsive ">

        <!--BOTON DE AGREGAR-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-gray mb-4">
            <a href="{{ route('vista_dn') }}" style="text-decoration: none; color:white;">REGRESAR</a>
        </button>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#create">
            AGREGAR
        </button>


        <!--TABLA DE PRODUCTOS -->
        <div class="row">
            @foreach ($products as $product)
                @if ($product['status'] !== 'inactivo')
                    <div class="col-md-3 text-center mb-2">
                        <div class="card " style="width: 300px;">
                            <div class="card " style="width: 300px;">
                                <img src="data:image/jpeg;base64,{{ base64_encode($product->image) }}" alt=""
                                    width="200px" height="200px" class="mx-auto p-3">
                                <div class="card-body bg-glass">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">{{ $product->price }}</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $product->id }}">Editar</button>
                                    <button type="button" class="btn btn-gray" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $product->id }}">Eliminar</button>
                                </div>
                            </div>
                            @include('products.edit')
                            @include('products.delete')
                        </div>
                @endif
            @endforeach
            @include('products.create')
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>
