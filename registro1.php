
<html>
<head>
<title>REGISTRO</title>
</head>
<body>
<?php
if($_POST['nombre']!="" && $_POST['idp']!="")
 {

 
 $conexion=mysql_connect("127.0.0.1","root","") or
  die("Problemas en la conexion");

  mysql_select_db("clinica",$conexion) or
  die("Problemas en la seleccion de la base de datos");

  mysql_query("insert into consultas_medicas(nombre-paciente,fecha_consulta,telefono,nombre_medico,consultorio,diagnostico) values 
                                ('$_POST[nombre]','$_POST[fecha]',$_POST[idp],'$_POST[idm]','$_POST[consultorio]','$_POST[diag]')", $conexion)
  or die("Problemas en el select".mysql_error());

mysql_close($conexion);

header("location:home/ideaschi/public_html/shoppingInn/AvanceSistemas/index.html?Cita registrada con exito");

 }
 
else
 {
header("location:home/ideaschi/public_html/shoppingInn/AvanceSistemas/Citas.php?Error en los datos");

}
?>
</body>
</html>