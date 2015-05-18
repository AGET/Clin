
<html>
<head>
<title>REGISTRO</title>
</head>
<body>
<?php
if($_POST['tel']!="" && $_POST['nombre']!="")
 {

 
 $conexion=mysql_connect("localhost","ideaschi_vero","arg030303") or
  die("Problemas en la conexion");

  mysql_select_db("ideaschi_tienda",$conexion) or
  die("Problemas en la seleccion de la base de datos");


  mysql_query("insert into pacientes(clave, nombre, apellido_paterno, apellido_materno, sexo, domicilio) values 
                                ('$_POST[tel]','$_POST[nombre]','$_POST[apma]','$_POST[appa]','$_POST[sexo]','$_POST[dom]')", $conexion)
  or die("Problemas en el select".mysql_error());

mysql_close($conexion);


 header("location:ProyectoWeb/AvanceSistemas/index.html?Registro Exitoso");
 }
 
else
 {
header("location:/AltaP.php?Error en los datos");

}
?>
</body>
</html>