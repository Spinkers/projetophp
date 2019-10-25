<?php
session_start();
include('../../config/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../../index.php');
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT * FROM Usuario WHERE email = '{$email}' AND senha = '{$senha}'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $dados = mysqli_fetch_array($result);

    $_SESSION['email'] = $email;
    $_SESSION['admin'] = $dados['admin'];
    $_SESSION['nome'] = $dados['nome'];
    $_SESSION['idUser'] = $dados['idUser'];
    header('Location: ../views/admin/index.php');
    exit();
}else{
    header('Location: ../../index.php');
    exit();
}

?>