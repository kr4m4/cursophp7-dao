<?php

require_once("config.php");
//carrega um usuario
//$usuario = new Usuario();
//$usuario->loadById(1);
//echo $usuario;

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("joao", "qwert");

echo $usuario;
?>