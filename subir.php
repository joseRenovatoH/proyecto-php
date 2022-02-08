<?php
include ("connect.php");

if(isset($_POST['btne'])){
    $nombre = $_POST['nom'];
    $telefono = $_POST['tel'];
    $correo = $_POST['corr'];
    

    $directorio="archivos/";
$archivo = $directorio . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $archivo);
$consulta = "INSERT INTO  usuario (nombre, telefono, correo, d_archivo) VALUES ('$nombre', '$telefono', '$correo', '$archivo')";
$resultado = mysqli_query($conex, $consulta);
if($resultado){
echo"exito";
}else{
echo"algo salio mal";
}

    }

?>