<?php
//Conexão
require_once '../../../config/conexao.php';

if(isset($_POST['decisao'])){
    if($_POST['decisao'] == 'Salvar Alterações'){
        $idPostagem = mysqli_escape_string($connect, $_POST['id']);
        $tituloPostagem = mysqli_escape_string($connect, $_POST['tituloPostagem']);
        $conteudoPostagem = mysqli_escape_string($connect, $_POST['conteudoPostagem']);
        $categoria = mysqli_escape_string($connect, $_POST['categoria']);

        $sql = "UPDATE Postagem SET conteudo = '$conteudoPostagem', titulo = '$tituloPostagem', idCategoria = $categoria WHERE Postagem.idPost = $idPostagem";
        $resultado = mysqli_query($connect, $sql);
        
        if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Postagem atualizada com sucesso!";
            header('Location: ../../views/admin/editarPostagem.php');
        }else{
            $_SESSION['mensagem'] = "Erro ao atualizar postagem!";
            header('Location: ../../views/admin/editarPostagem.php');
        }

    }else{

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $sql = "DELETE FROM Postagem WHERE idPost = '$id'";
            
            if(mysqli_query($connect, $sql)){
                $_SESSION['mensagem'] = "Postagem excluída com sucesso!";
                header('Location: ../../views/admin/editarPostagem.php');
            }else{
                $_SESSION['mensagem'] = "Erro ao excluír postagem!";
                header('Location: ../../views/admin/editarPostagem.php');
            }
        }

    }

}

?>