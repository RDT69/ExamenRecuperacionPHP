<?php

if (isset($_COOKIE['idioma'])) {
  $idioma = $_COOKIE['idioma'];
} else {

  if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];
    setcookie('idioma', $idioma, time() + (7 * 24 * 60 * 60), "/");
  } else {

    echo '<form method="post" action="">
                <label for="idioma">Selecciona tu idioma:</label>
                <select name="idioma" id="idioma">
                    <option value="es">Español</option>
                    <option value="en">Inglés</option>
                    <option value="fr">Francés</option>
                </select>
                <input type="submit" value="Guardar idioma">
            </form>';
    return;
  }
}


if ($idioma == 'es') {
  $mensajeBienvenida = "Bienvenido";
} elseif ($idioma == 'en') {
  $mensajeBienvenida = "Welcome";
} elseif ($idioma == 'fr') {
  $mensajeBienvenida = "Bienvenue";
}


if (isset($_COOKIE['ultima_visita'])) {
  $ultimaVisita = $_COOKIE['ultima_visita'];
} else {
  $ultimaVisita = "Primera visita";
}


echo "<h1>$mensajeBienvenida</h1>";
echo "<p>Última visita: $ultimaVisita</p>";
echo '<a href="eliminar_idioma.php">Eliminar preferencia de idioma</a>';
echo '<a href="eliminar_visita.php">Eliminar registro de última visita</a>';

setcookie('ultima_visita', date("d/m/Y H:i:s"), time() + (7 * 24 * 60 * 60), "/");
