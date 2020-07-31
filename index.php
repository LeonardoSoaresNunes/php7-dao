<?php


require_once ("config.php");

//$sql = new sql();

//$usuarios  = $sql-> select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
//echo "<br>";

//echo "_____________________________<br>";
//echo '<br>';

//carrega um usuario 
//echo '<br>';

//$root = new usuario();

//$root->loadbyid(8); 

//echo $root;

//echo '<br>';



//echo '_____________________________';

// Carrega uma lista de usuario 

//$lista = usuario::getList();

//echo  json_encode($lista);

//echo '<br>';



//echo '_____________________________';

//Carrega uma lista de busca pelo login

//$search  = Usuario::search("leo");

//echo json_encode($search);

//echo '<br>';

//echo "_______________________________"

//Carrega um usuario usando o login e a senha 
//$usuario = new usuario();
//$usuario -> login("root" , "!@$%");

//echo $usuario;

//echo "_______________________________"

/*
$aluno = new Usuario("aluno" , "@aluno");

//$aluno ->setDeslogin("aluno");
//$aluno->setDessenha("@aluno");

$aluno ->insert();

echo $aluno;

*/

$usuario = new usuario();

$usuario=>loadyByid(8);

$usuario=> update("aluno" , "leonardo");

echo $usuario;

 ?>