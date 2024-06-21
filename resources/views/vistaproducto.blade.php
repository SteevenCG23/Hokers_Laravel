<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h1 class="text-center text-success font-weight-bold p-5">PRODUCTOS</h1>






<div class="p-3 table-responsive "> 

<!--BOTON DE AGREGAR-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  AGREGAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Porducto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="{{ route('guardar_producto') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="nombre_producto">Nombre producto</label>
          <input type="text" name="nombre_producto"><br><br>
          <label for="nombre_producto">Tipo de Producto</label>
          <input type="text" name="tipo_producto"><br><br>
          <label for="nombre_producto">Precio de venta</label>
          <input type="text" name="precio_venta"><br><br>
          <label for="foto_producto">Imagen</label>
          <input type="file" name="foto_producto"><br><br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit"  class="btn btn-primary">Agregar</button>
          </div>
          
          </form>

      </div>
      
    </div>
  </div>
</div>


<!--TABLA DE PRODUCTOS -->
<div class="row">
    @foreach($productos as $producto)
        <div class="col-md-3 text-center mb-2">
            <div class="card " style="width: 300px;">
                <img src="data:image/jpeg;base64,{{ base64_encode($producto->foto_producto) }}" alt="" width="200px" height="200px" class=" mx-auto p-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                    <p class="card-text">{{ $producto->tipo_producto }}</p>
                    <p class="card-text">{{ $producto->precio_venta }}</p>
                    <button type="button" href="" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
    
    

    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>



