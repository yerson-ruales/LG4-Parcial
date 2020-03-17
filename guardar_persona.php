<?php 
    include('includes/db.php');

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $clave = $_POST["clave"];

    header('Location: index.php');
    if(isset($id) == false){
        $sql = "insert into personas(nombre,apellido,email,clave)values('$nombre','$apellido', '$email','$clave')"; 
    }else{
        $sql = "UPDATE personas set nombre='$nombre',apellido='$apellido', email='$email', clave='$clave' WHERE id='$id'";
    }

    DB::query($sql);
?>