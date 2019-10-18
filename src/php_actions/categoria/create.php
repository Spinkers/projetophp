<?php
//Sessão
session_start();
//Conexão
require_once '../../../config/conexao.php';

if(isset($_POST['btn-salvar'])){
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $idCategoria = 2; //Isso deve ser autoincremento no banco

    $sql = "INSERT INTO Categoria (idCategoria, tipo) VALUES ('$idCategoria', '$titulo')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../../views/admin/novaCategoria.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../../views/admin/novaCategoria.php');
    }

}