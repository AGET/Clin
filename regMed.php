
<html>
<head>
<title>REGISTRO</title>
</head>
<body>
<?php
if($_POST['nombre']!="" && $_POST['num']!="")
 {

 
 $conexion=mysql_connect("localhost","ideaschi_vero","arg030303") or
  die("Problemas en la conexion");

  mysql_select_db("ideaschi_tienda",$conexion) or
  die("Problemas en la seleccion de la base de datos");


  mysql_query("insert into medicos(cedula,nombre_medico,esp) values 
                                ('$_POST[num]','$_POST[nombre]','$_POST[esp]')", $conexion)
  or die("Problemas en el select".mysql_error());

mysql_close($conexion);


 header("location:home/ideaschi/public_html/shoppingInn/AvanceSistemas/index.html?Registro Exitoso");

 }
 
else
 {
header("location:home/ideaschi/public_html/shoppingInn/AvanceSistemas/AltaM.php?Error en los datos");

}
?>
</body>
</html>