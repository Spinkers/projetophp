<?php
//Sessão
session_start();
//Conexão
require_once '../../../config/conexao.php';

$sql = "SELECT Postagem.título, Postagem.dataPostagem, Usuario.nome, Categoria.tipo FROM Postagem INNER JOIN Usuario ON Postagem.idUser = Usuario.idUser INNER JOIN Categoria ON Postagem.idCategoria = Categoria.idCategoria ";
$resultado = mysqli_query($connect, $sql);

?>