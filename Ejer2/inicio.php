<?php
$tiempo = time() + 604800;

if(isset($_COOKIE['idioma'])){
setcookie('idioma', $_COOKIE['idioma'], $tiempo);
header('Location: bienvenidad.php');
}

if(isset($_POST['idioma']) && !empty($_POST['idioma'])) {
  $idioma = $_POST['idioma'];
setcookie('idioma', $idioma, $tiempo);
header('Location: bienvenidad.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pagina de inicio</h1>

  <form method="POST" action="bienvenidad.php">
    Selecciona un idioma: 
      <p>Indica el idioma que deseas: (español/ingles/frances)</p>
      <input style="text-transform:lowercase" type="text" name="idioma">
      <input type="submit" name="enviar" value="Enviar">
  </form>

</body>
</html>