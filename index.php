<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

echo "<br>";
echo "<hr>";

$root = new Usuario();

$root->loadbyId(4);

echo $root;
echo "<br>";
echo "<hr>";

?>