<?php
session_start();

$connexion_db = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_materias_crud'
) or die(mysqli_erro($mysqli));

?>
