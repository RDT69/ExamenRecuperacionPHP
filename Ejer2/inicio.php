<?php
// Verificar si se ha seleccionado un idioma
if (isset($_COOKIE['idioma'])) {
    $idioma = $_COOKIE['idioma'];
} else {
    // Si no hay cookie de idioma, mostrar formulario para seleccionar idioma
    if (isset($_POST['idioma'])) {
        $idioma = $_POST['idioma'];
        setcookie('idioma', $idioma, time() + (7 * 24 * 60 * 60), "/");
    } else {
        // Si no se ha seleccionado idioma previamente, mostrar formulario
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

// Mostrar mensaje de bienvenida según el idioma seleccionado
if ($idioma == 'es') {
    $mensajeBienvenida = "Bienvenido";
} elseif ($idioma == 'en') {
    $mensajeBienvenida = "Welcome";
} elseif ($idioma == 'fr') {
    $mensajeBienvenida = "Bienvenue";
}

// Mostrar mensaje de última visita
if (isset($_COOKIE['ultima_visita'])) {
    $ultimaVisita = $_COOKIE['ultima_visita'];
} else {
    $ultimaVisita = "Primera visita";
}

// Mostrar página de bienvenida
echo "<h1>$mensajeBienvenida</h1>";
echo "<p>Última visita: $ultimaVisita</p>";
echo '<a href="eliminar_idioma.php">Eliminar preferencia de idioma</a>';
echo '<a href="eliminar_visita.php">Eliminar registro de última visita</a>';

// Guardar la fecha de la última visita en una cookie
setcookie('ultima_visita', date("d/m/Y H:i:s"), time() + (7 * 24 * 60 * 60), "/");
?>