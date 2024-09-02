
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
    <!-- Navegación  -->
    <div class="nav">
        <a href="index.html" class="nav-link">Inicio</a>
        <a href="formulario.html" class="nav-link">Formulario</a>
    </div>
    
    <h1 id="contact-title">Formulario de Contacto</h1>
    
    <form method="POST" action="/contacto-recibe">
        @csrf
        <!-- Nombre text -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <!-- Correo  email -->
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <!-- Comentario textarea -->
        <label for="comentario">Comentario:</label><br>
        <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea><br><br>
        
        <!-- Botón para enviar-->
        <button type="submit" class="submit-btn">Enviar</button>
        
    </form>
</body>
</html>
