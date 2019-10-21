<?php
//Sessão
//session_start();
//Conexão
require_once '../../../config/conexao.php';

$sql = "SELECT * FROM Usuario";
$resultado = mysqli_query($connect, $sql);

?>