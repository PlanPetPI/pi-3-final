<?php
$host = "localhost";
$usuario = "root1";
$senha = "{Ld7A1)HS1OO"; 
$banco = "petshop";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
