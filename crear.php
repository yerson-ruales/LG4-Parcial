<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div>
            <h3>Crear Usuarios</h1>
        </div>
        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" name="nombre" placeholder="escriba su nombre">
        </div>
        <div class="form-group">
            <label for="">apellido</label>
            <input type="text" name="apellido" placeholder="escriba su apellido">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="text" name="email" placeholder="escriba su email">
        </div>
        <div class="form-group">
            <hash for="">clave</label><br>
            <input type="password" name="clave" placeholder="escriba su contraseña">
            
        </div>
        <div>
            <button type="submit" >Guardar</button>
            <a href="index.php">Volver</a>
            
        </div>
    </form>
</body>
</html>