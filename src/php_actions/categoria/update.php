<?php
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz .'/howToLearnPhp/config/conexao.php';

if(isset($_POST['decisao'])){
    if($_POST['decisao'] == 1){
        $tituloCategoria = mysqli_escape_string($connect, $_POST['tituloCategoria']);
        $idCategoria = mysqli_escape_string($connect, $_POST['idCategoria']);

        $sql = "UPDATE Categoria SET tipo = '$tituloCategoria' WHERE Categoria.idCategoria = $idCategoria";
        $resultado = mysqli_query($connect, $sql);
        
        if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Categoria atualizada com sucesso!";
            header('Location: ../../views/admin/editarCategoria.php');
        }else{
            $_SESSION['mensagem'] = "Erro ao atualizar categoria!";
            header('Location: ../../views/admin/editarCategoria.php');
        }

    }else{
            $idCategoria = mysqli_escape_string($connect, $_POST['idCategoria']);
            $sql = "DELETE FROM Categoria WHERE idCategoria = '$idCategoria'";
            
            if(mysqli_query($connect, $sql)){
                $_SESSION['mensagem'] = "Categoria excluída com sucesso!";
                header('Location: ../../views/admin/editarCategoria.php');
            }else{
                $_SESSION['mensagem'] = "Erro ao excluír Categoria!";
                header('Location: ../../views/admin/editarCategoria.php');
            }

    }

}

?>