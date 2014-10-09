<?
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="agustin"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="mipass"; // password de acceso para el usuario de la
                      // linea anterior
$db="ejemplo";        // Seleccionamos la base con la cual trabajar
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);
?>
