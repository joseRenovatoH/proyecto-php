<html>
<head>

</head>
<body>
<center>
<h1>Libros</h1>
<table border="3">
<tr>
<td><h3>Nombre</h3></td>
<td><h3>Titulo</h3></td>
<td><h3>ISBN</h3></td>
</tr>
<tr>
<?php
 $archivo= fopen("prueba.txt","a+");
 $todo = fread($archivo, filesize("prueba.txt"));
 $lineas = explode(chr(13).chr(10), $todo);
 for($i=0; $i < count($lineas); $i++){
 $palabra = explode("|", $lineas[$i]);
 ?>
<td><?php echo $palabra[0];?></td>
<td><?php echo $palabra[1];?></td>
<td><?php echo $palabra[2];?></td>
<?php
}
?>
</tr>
</table>
</center>
</body>
</html>