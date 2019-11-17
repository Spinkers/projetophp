<?php
//Sessão
session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

if(isset($_POST['decisao'])){

    if($_POST['decisao'] == 'Aprovar Postagem'){
       
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $sql = "UPDATE Postagem SET aprovado = 1 WHERE idPost = '$id'";

            if(mysqli_query($connect, $sql)){
                $_SESSION['mensagem'] = "Aprovado com sucesso!";
                header('Location: ../../views/admin/centralPostagem.php');
            }else{
                $_SESSION['mensagem'] = "Erro ao aprovar!";
                header('Location: ../../views/admin/novaPostagem.php');
            }
        }

    }else{

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $sql = "DELETE FROM Postagem WHERE idPost = '$id'";
            
            if(mysqli_query($connect, $sql)){
                $_SESSION['mensagem'] = "Reprovado com sucesso!";
                header('Location: ../../views/admin/centralPostagem.php');
            }else{
                $_SESSION['mensagem'] = "Erro ao reprovar!";
                header('Location: ../../views/admin/novaPostagem.php');
            }
        }
        
    }
}else{
    //Não veio um valor valido
}
