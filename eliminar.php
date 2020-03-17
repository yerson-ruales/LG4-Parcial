<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from personas where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
        echo "El usuario no existe";
        die;
    }
?>
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
            <h3>eliminar usuario</h1>
            <?php 
	if(isset($_GET['eliminar'])){
	
	$borrar_id = $_GET['eliminar'];
	
	$eliminar = "DELETE FROM usuarios WHERE id='$borrar_id'";
	
	$ejecutar = mysqli_query($con,$eliminar); 
		
		if($ejecutar){
		
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
		}
	
	}
	
	?>
            <button type="submit" a href="crear.php">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>
</html>