<?
  $dbhost     ="localhost";
  $dbusuario  ="root";
  $dbpassword ="L1bertad0res";
  $db         ="somae";
  $conexion   = mysql_connect($dbhost, $dbusuario, $dbpassword);

  mysql_select_db($db, $conexion);
?>
