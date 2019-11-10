<?php
//Conexão com banco de dados

$servername = "localhost";
$username = "userTest";
$password = "#Teste34524519";
$db_name = "howToLearnPhp";

/*$servername = "mysql:host=localhost:3306";
$username = "root";
$password = "root";
$db_name = "teste";*/

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}
?>