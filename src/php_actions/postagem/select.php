<?php
//Sessão
//session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

$sql = "SELECT Postagem.titulo, Postagem.dataPostagem, Usuario.nome, Categoria.tipo FROM Postagem INNER JOIN Usuario ON Postagem.idUser = Usuario.idUser INNER JOIN Categoria ON Postagem.idCategoria = Categoria.idCategoria ";
$resultado = mysqli_query($connect, $sql);

?>