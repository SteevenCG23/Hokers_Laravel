<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icon page-->
    <link rel="icon" href="{{ asset('images/Logo_Hokers.png') }}" type="image/x-icon" />

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">

    <title>Hokers</title>
    <link rel="stylesheet" href="mi_cuenta.css">
</head>

<body>

    <div class="contenedor">
        <div class="texto_contenedor">
            <h1>Mi Cuenta</h1>
        </div>
        <!-- círculos decorativos de fondo -->
        <div class="circulo circulo1"></div>
        <div class="circulo circulo2"></div>
        <div class="circulo circulo3"></div>

        <!-- tarjeta info del usuario -->
        <div class="tarjeta-perfil">
            <img src="{{asset('images/avatar.jpg')}}" alt="avatar" class="avatar">
            <h2>Alvaro Uribe</h2>
            <p>Desarrollador Full Stack</p>
            <div class="botones">
                <button class="editar"  {{-- data-bs-toggle="modal"
                data-bs-target="#edit{{ $user->id }}" --}}>EDITAR</button>
                <a href="{{url('pg_vendedor')}}"><button class="regresar">REGRESAR</button></a>
            </div>
        </div>

        <!-- info de contacto del usuario -->
        <div class="informacion-usuario">
            <p><strong>Nombre completo: </strong>alvaro Uribe Velez</p>
            <hr>
            <p><strong>Correo: </strong>alvarito1@gmail.com</p>
            <hr>
            <p><strong>Teléfono: </strong>3158959645</p>
            <hr>
            <p><strong>Dirección: </strong>Miami Bitch, USA</p>
        </div>

        <!-- estado proyectos -->
        <div class="estado-proyectos">
            <h3>Productos</h3>
            {{-- @foreach($products as $product)
            <div class="estado">
               
                <span>{{$product->name}}</span>
                <div class="progreso">
                    <div class="barra-progreso" style="width: 80%;"></div>
                    <!-- modifique *style="width: 80%;"* 
                        para cambiar el llenado de la barra-->
                </div>
               
            </div>
            @endforeach --}}
            <div class="estado">
                <span>Hamburguesa</span>
                <div class="progreso">
                    <div class="barra-progreso" style="width: 60%;"></div>
                </div>
            </div>
            <div class="estado">
                <span>Perro</span>
                <div class="progreso">
                    <div class="barra-progreso" style="width: 70%;"></div>
                </div>
            </div>
            <div class="estado">
                <span>Arepa quesuda</span>
                <div class="progreso">
                    <div class="barra-progreso" style="width: 40%;"></div>
                </div>
            </div>
            <div class="estado">
                <span>Papas a la francesa</span>
                <div class="progreso">
                    <div class="barra-progreso" style="width: 50%;"></div>
                </div>
            </div>

            
        </div>
    </div>
</body>

</html>