<!DOCTYPE HTML>
<html>

<head>
  <title>CONSULTAS MEDICAS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="css/estilos.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">CLINICA<span class="logo_colour">_ESPECIALIDADES_CHILPANCINGO</span></a></h1>
          <h2>16 de Septiembre 24, Emiliano Zapata, 39050 Chilpancingo de Los Bravo, Guerrero</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="Citas.php">CITAS</a></li>
          <li><a href="#">NOSOTROS</a>
            <ul>
              <li><a href="Medicos.php">MEDICOS</a></li>
              <li><a href="Especialidades.php">ESPECIALIDADES</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="300" alt="seascape_one" /></li>
        <li><img src="images/2.jpg" width="600" height="300" alt="seascape_two" /></li>
        <li><img src="images/3.jpg" width="600" height="300" alt="seascape_three" /></li>
        <li><img src="images/4.jpg" width="600" height="300" alt="seascape_four" /></li>
        <li><img src="images/5.jpg" width="600" height="300" alt="seascape_five" /></li>
        <li><img src="images/6.jpg" width="600" height="300" alt="seascape_seascape" /></li>
      </ul>
      <div id="sidebar_container">
      </div>
      <div class="content">
        <h1 ><CENTER>BIENVENIDOS A CLINICA DE ESPECIALIDADES CHILPANCINGO</CENTER></h1>
        <h3>NUESTRAS CITAS A LA FECHA</h3>
         <?php
$conexion=mysql_connect("127.0.0.1","root","") or
  die("Problemas en la conexion");

mysql_select_db("clinica",$conexion) or
  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select  nombre_paciente, fecha_consulta, telefono, nombre_medico, consultorio, diagnostico
                        from consultas_medicas",$conexion) or
  die("Problemas en el select:".mysql_error());

while ($reg=mysql_fetch_array($registros))
{
  
  echo "NOMBRE DEL PACIENTE: ".$reg['nombre_paciente']."<br>";
  echo "FECHA DE CONSULTA: ".$reg["fecha_consulta"]."<br>";
  echo "TELEFONO DE PACIENTE: ".$reg["telefono"]."<br>";
  echo "NOMBRE DEL MEDICO: ".$reg["nombre_medico"]."<br>";
  echo "NO. DE COSULTORIO: ".$reg["consultorio"]."<br>";
  echo "DIAGNOSTICO PREVIO: ".$reg["diagnostico"]."<br>";

  echo "<br>";
  echo "<hr>";
}

mysql_close($conexion);
?>
      </div>
    </div>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <section id="wrap">
  
      <footer>
        <section id="acerca-de">
          <article>
            <hgroup><h3>Nuestro sitio</h3></hgroup>
            <p>Gracias por utilizar nuestra pagina web :)
            </p>
          </article>
        </section>
        <section id="redes-s">
          <div class="email"><a href="http://prodigy.msn.com/?ocid=iehp"></a></div>
          <div class="twitter"><a href="https://twitter.com/"></a></div>
          <div class="youtube"><a href="videos.php"></a></div>
          <div class="facebook"><a href="https://www.facebook.com/veronica.garciavalle.3?ref=tn_tnmn"></a></div>
        </section>
      </footer>
    </section>
</body>
</html>
