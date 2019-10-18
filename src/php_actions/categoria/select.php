<?php
//Sessão
session_start();
//Conexão
require_once '../../../config/conexao.php';

$sql = "SELECT * FROM Categoria";
$resultado = mysqli_query($connect, $sql);

/*if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
         echo "<option value=".$dados['idCategoria'].">".$dados['tipo']."</option>";
        }
}else{
    echo "<option value='null'>Nenhuma categoria cadastrada</option>";
}*/

?>