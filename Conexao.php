<?php
// Dados necessários para SGBD
$servidor = 'localhost';
$login = 'root';
$senha = 'root';
$banco = 'db_sistema';

// Conectando no banco de dados
$conexao = mysqli_connect($servidor,$login,$senha,$banco);

// Dados do formulário
$user = $_POST['user'];
$sexo = $_POST['sexo'];
$login = $_POST['login'];
$senha = $_POST['senha'];

// Variável que recebe instrução insert
$insert = "INSERT INTO `tb_user` (`id_user`,`nm_user`,`sexo`,`login`,`senha`)
            value (null, '$user','$sexo','$login','$senha')";

$sql = mysqli_query($conexao, $insert);

?>