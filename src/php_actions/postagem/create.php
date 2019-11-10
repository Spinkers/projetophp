<?php
//Sessão
session_start();
//Conexão
require_once '../../../config/conexao.php';

if(isset($_POST['btn-salvar'])){
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $conteudo = mysqli_escape_string($connect, $_POST['conteudo']);
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $dataPostagem = '2019-11-10 00:00:00';
    $idUser = $_SESSION['idUser'];

    $sql = "INSERT INTO `Postagem` (`conteudo`, `titulo`, `dataPostagem`, `idUser`, `idCategoria`) VALUES ('$conteudo', '$titulo', '$dataPostagem', '$idUser', '$categoria');";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../../views/admin/novaPostagem.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../../views/admin/novaPostagem.php');
    }

}