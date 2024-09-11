
<!DOCTYPE html>
<!-- HTML5 -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
   <table border="1">  <!-- Tabla -->
    <tr> 
        <th>ID</th>  <!-- Columnas -->
        <th>Nombre</th>
        <th>Correo</th>
        <th>Mensaje</th>
    </tr>
        @foreach ($mensajes as $mensaje) <!-- Recorre los mensajes -->
            <tr>  <!-- Filas -->
                <td>{{$mensaje->id}}</td>  
                <td>{{$mensaje->nombre}}</td>
                <td>{{$mensaje->correo}}</td>
                <td>{{$mensaje->mensaje}}</td>
            </tr>
        @endforeach
   </table>
</body>
</html>
