<?php include ('functions.php');
$nombres=$_GET['nombres'];
$telefonos=$_GET['tel'];


ejecutarSQLCommand("INSERT INTO  `usuarios` (nombres, telefonos)
VALUES (
'$nombres' ,
'$telefonos')

 ON DUPLICATE KEY UPDATE `nombres`= '$nombres',
`telefonos`='$telefonos';");
//http://localhost/pj/registro.php?nombres=Cristian%20Rey&tel=3138247119&edad=21
 ?>

