<?php
//Sessão
session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

if(isset($_POST['btn-salvar'])){
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);

    $sql = "INSERT INTO Categoria (tipo) VALUES ('$titulo')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../../views/admin/novaCategoria.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../../views/admin/novaCategoria.php');
    }

}