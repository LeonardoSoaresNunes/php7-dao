<?php


require_once ("config.php");

//$sql = new sql();

//$usuarios  = $sql-> select("SELECT * FROM tb_usuarios");



$Leonardo = new usuario();

$Leonardo->loadbyid(8); 

echo $Leonardo;

 ?>