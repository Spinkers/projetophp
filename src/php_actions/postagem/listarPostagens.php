<?php
//Sessão
//session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

$sql = "SELECT Postagem.idPost, Postagem.titulo, Postagem.dataPostagem, Postagem.conteudo, Usuario.nome, Categoria.tipo, Categoria.idCategoria FROM Postagem INNER JOIN Usuario ON Postagem.idUser = Usuario.idUser INNER JOIN Categoria ON Postagem.idCategoria = Categoria.idCategoria WHERE Postagem.aprovado = '1'";
$resultado = mysqli_query($connect, $sql);

?>