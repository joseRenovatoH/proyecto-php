<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $rfc  = $_POST['rfc'];
 $email = $_POST['email'];

$insertar = "INSERT INTO clientes VALUES ('$nombre','$rfc','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}






?>