<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Mujeres y niñas en la ciencia - Yucatán</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" async="async" />
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1><a href="http://demos.sim/isl-profile-pic/">11FYUC</a></h1>
        <p>El Día Internacional de Mujer y la Niña en la Ciencia se celebra globalmente de diferentes maneras, grandes y pequeñas.</p>
        <?php
        $url = htmlspecialchars($_GET["i"]);
        if(isset($_GET["i"]))
          echo "<a href='". $url ."' download='kerala-blasters-profile'><img src='". $url ."' /></a>";
        else
          header("Redirect: index.php");
        ?>
        <p>
        Para descargar tu marco, haz click sobre la imagen.<br/>o click derecho y elige "guardar imagen"
        </p>
        <p>
          <a href="index.php"><button id="download">Crea otra foto de perfil.</button></a>
        </p>
        <?php
        require_once __DIR__ . "/footer.php";
        ?>
      </div>
    </div>
  </body>
</html>
