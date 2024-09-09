
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icon page-->
    <link rel="icon" href="{{ asset('images/Logo_Hokers.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/mis_productos.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Hokers</title>
    
</head>

<body>

    <div class="contenedor">
        <h1>Mis Productos</h1>
        <div class="botones_2">
            <button class="agregar" data-bs-toggle="modal" data-bs-target="#create">AGREGAR</button>
            <a href="{{ route('vista_dn') }}"><button class="atras">ATRÁS</button></a>
        </div>
        <div class="contenedor-productos">
            @foreach ($products as $product)
                @if ($product['status'] !== 'inactivo')
            <!-- Producto 1 -->
            <div class="producto">
                <img src="data:image/jpeg;base64,{{ base64_encode($product->image) }}" alt="Producto">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>${{ $product->price }}</p>
                <small>Agregado hace 2 días</small>
                <div class="botones">
                    <button class="editar"  data-bs-toggle="modal"
                    data-bs-target="#edit{{ $product->id }}">EDITAR</button>
                    <button class="eliminar" data-bs-toggle="modal"
                    data-bs-target="#delete{{ $product->id }}">ELIMINAR</button>
                </div>
            </div>
            @include('products.edit')
            @include('products.delete')

            @endif
            @endforeach
            @include('products.create')
        </div>

        <!-- círculos decorativos de fondo -->
        <div class="circulo circulo1"></div>
        <div class="circulo circulo2"></div>
        <div class="circulo circulo3"></div>
    </div>
</body>

</html>