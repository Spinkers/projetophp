<?php
//Conexão com banco de dados
$servername = "remotemysql.com";
$username = "ApSTt7HJYU";
$password = "RG1JEVlgtl";
$db_name = "ApSTt7HJYU";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}
?>