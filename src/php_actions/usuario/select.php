<?php
//Sessão
//session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

$sql = "SELECT * FROM Usuario";
$resultado = mysqli_query($connect, $sql);

?>