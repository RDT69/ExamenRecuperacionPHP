<?php
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
  setcookie('idioma', '', time() - 3600);
  header('Location: inicio.php');
  exit;
}
?>	