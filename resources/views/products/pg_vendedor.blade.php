<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!--Icon page-->
    <link rel="icon" href="{{ asset('images/Logo_Hokers.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/pg_vendedor.css') }}">
    <title>Hokers</title>
   
</head>
<body>

    <div class="contenedor">

        <div class="texto_contenedor">
            <h1>Elije una Acción</h1>
        </div>

        <!-- círculos decorativos de fondo -->
        <div class="circulo circulo1"></div>
        <div class="circulo circulo2"></div>
        <div class="circulo circulo3"></div>

        <!-- Opciones del panel de usuario -->
        
        <div class="opcion">
            <img src=" {{ asset('images/icono_subir.png') }}" alt="Subir producto">
            <a href="{{ route('vista_pg') }}"><button class="boton">Subir Producto</button></a>
        </div>
        
        <div class="opcion">
            <img src="{{ asset('images/icono_perfil.png') }}" alt="Ir al perfil">
            <a href="{{ route('perfil') }}"><button class="boton">Ir al Perfil</button></a>
        </div>

        <div class="opcion cerrar-sesion">
            <img src="{{ asset('images/icono_cerrar_sesion.png') }}" alt="Cerrar sesión">
            <button class="boton salir">Cerrar Sesión</button>
        </div>
    </div>
    
</body>
</html>
