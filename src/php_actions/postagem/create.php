<?php
//Sessão
session_start();
//Conexão
require_once '../../../config/conexao.php';

if(isset($_POST['btn-salvar'])){
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $conteudo = mysqli_escape_string($connect, $_POST['conteudo']);
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $idUser = $_SESSION['idUser'];
    $idPost = 2;
    $dataPostagem = '2019-08-15';

    $sql = "INSERT INTO Postagem (idPost, idUser, idCategoria, título, conteúdo, dataPostagem) VALUES ('$idPost', '$idUser', '$categoria', '$titulo', '$conteudo', '$dataPostagem')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../../views/admin/novaPostagem.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../../views/admin/novaPostagem.php');
    }

}