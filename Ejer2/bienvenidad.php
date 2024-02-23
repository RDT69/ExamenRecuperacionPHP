<?php
if(isset($_COOKIE['idioma'])){
header('Location: inicio.php');
}


if(isset($_POST['idioma']) && $_POST['idioma'] === 'español') {
  echo "<h1>Bienvenido</h1>
  <a href='eliminar.php?action=delete'>Eliminar cookie</a>";
} else if(isset($_POST['idioma']) && $_POST['idioma'] === 'ingles') {
  echo "<h1>Welcome</h1>
  <a href='eliminar.php?action=delete'>Eliminar cookie</a>";
} else if(isset($_POST['idioma']) && $_POST['idioma'] === 'frances') {
  echo "<h1>Bienvenue</h1>
  <a href='eliminar.php?action=delete'>Eliminar cookie</a>";
}
  
?>