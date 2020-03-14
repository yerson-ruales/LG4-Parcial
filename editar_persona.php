<?php 
    include('includes/db.php');
    
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    $sql = "UPDATE personas set nombre='$nombre', email='$email' WHERE id='$id'";
    
    if(DB::query($sql)){ //if($con->query($query) == true)
        echo "Persona actualizada correctamente";
    }else{
        echo "No se ha podido actualizar la persona. ". $con->error;
    } 

    header('Location: index.php');
?>
<>