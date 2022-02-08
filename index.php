<html lang="es">
<head>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<center>
<h2>Subir archivo</h2>
<table>
<tr>
<td><label>Nombre:</label></td>
<td><input type="text" name="nom" placeholder="nombre" autofocus /></td>
</tr>
<tr>
<td><label>Telefono:</label></td>
<td><input type="text" name="tel" placeholder="telefono" /></td>
</tr>
<tr>
<td><label>Correo Electronico:</label></td>
<td><input type="text" name="corr" placeholder="correo" /></td>
</tr>
</table>
<input type="file" name="file"><br>
<input type="submit" value="subir archivo" name="btne">
</center>
<?php 
include ("subir.php");
?>
</form>
</body>
</html>