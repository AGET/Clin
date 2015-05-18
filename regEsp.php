
<html>
<head>
<title>REGISTRO</title>
</head>
<body>
<?php
if($_POST['num']!="" && $_POST['nombre']!="")
 {

 
 $conexion=mysql_connect("127.0.0.1","root","") or
  die("Problemas en la conexion");

  mysql_select_db("clinica",$conexion) or
  die("Problemas en la seleccion de la base de datos");


  mysql_query("insert into especialidad(id, nombreEspecialidad, descripcion) values
                                ('$_POST[num]','$_POST[nombre]','$_POST[descrip]')", $conexion)
  or die("Problemas en el select".mysql_error());

mysql_close($conexion);


              header("location:/ProyectosPrueba/AvanceSistemas/index.html?Cita registrada con exito");


 }
 
else
 {
header("location:/ProyectosPrueba/AvanceSistemas/Citas.php?Error en los datos");
}
?>
</body>
</html>