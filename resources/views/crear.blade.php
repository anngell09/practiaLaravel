<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Vista crear</center> 
    <br>
    
    <form  action="{{route('productos.formdata')}}" method="POST" >

    <!-- Agregar el token @CSRF, esto es un token de proteccion de ataques de falsificación de solicitudes entre sitios. 
    !-->
     
        @csrf
        
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <br> <br> <br>
        <label>
            Precio:
            <input type="text" name="precio">
        </label>
        <br> <br> <br>
        <label for>
            Existencias:
            <input type="text" name="existencias">
        </label>
        <br> <br> <br>

        <button type="submit">Enviar</button>
        
    </form>
</body>
</html>