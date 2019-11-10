<?php
//Sessão
//session_start();
//Conexão
require_once '../../../config/conexao.php';

$sql = "SELECT Postagem.idPost, Postagem.titulo, Postagem.dataPostagem, Postagem.conteudo, Usuario.nome, Categoria.tipo FROM Postagem INNER JOIN Usuario ON Postagem.idUser = Usuario.idUser INNER JOIN Categoria ON Postagem.idCategoria = Categoria.idCategoria WHERE Postagem.aprovado = '0'";
$resultado = mysqli_query($connect, $sql);

?>