

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<br>

    

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
<input type="submit" value="Guardar">

</form>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>