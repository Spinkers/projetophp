<?php
session_start();
include('../../config/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../../index.php');
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT idUser, email FROM Usuario WHERE email = '{$email}' AND senha = '{$senha}'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: ../views/admin/index.php');
    exit();
}else{
    header('Location: ../../index.php');
    exit();
}

?>