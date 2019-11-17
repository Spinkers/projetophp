<?php
//Sessão
session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';
//Regra de negócio
$sql = "SELECT * FROM Categoria";
$resultado = mysqli_query($connect, $sql);

?>