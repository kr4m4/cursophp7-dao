<?php

require_once("config.php");

//***carrega apenas um usuario pelo parametro id
//$usuario = new Usuario();
//$usuario->loadById(1);
//echo $usuario;

//***carrega todos os dados da tb_usuarios
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//***carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//***Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//***carrega um usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("joao", "qwert");
//echo $usuario;

//*****INSERT DE USUARIO NO BANCO
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//***UPDATE DE USUARIO PELO ID
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->update("professor", "kelelakeleotro");

echo $usuario;


?>