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
         <h3 >FORMATO PARA DAR DE ALTA A UN PACIENTE EN EL SISTEMA</h3>


         <form action="regP.php" method="post">
          <center><table border="0px" width="960px" cellspacing="0px" bgcolor="#fcfccf">
            <tr>
              <td colspan="5"><h4>Rellene todos los campos</h4> </td>
            </tr>
            <tr align="justify">
              <td colspan="5">
                  Telefono del paciente<br><input type="text" name="tel" size="20" maxlength="20">
              </td> </tr>
              <tr>             
              <td colspan="5">
                  Nombre de del paciente<br><input type="text" name="nombre" sizechae="60" maxlength="70">
              </td></tr>
            <tr>
              <td colspan="3">
                  Apellido Paterno<br><input type="text" name="apma" size="50" maxlength="70">
              </td>
              <td colspan="3">
                  Apellido Materno<br><input type="text" name="appa" size="50" maxlength="70">
              </td>
            </tr>
            <tr>             
              <td colspan="5">
                  Sexo<br><input type="text" name="sexo" size="60" maxlength="70">
              </td></tr>
              <tr>             
              <td colspan="5">
                  Domicilio<br><input type="text" name="dom" size="60" maxlength="70">
              </td></tr>
              
          </table></center>
          <input type="submit" value="Registrar"><br><br>
        </form>
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
