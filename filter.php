<?php
//Sessão
//session_start();
// URL BASE
$raiz = $_SERVER['DOCUMENT_ROOT'];
//Conexão
require_once $raiz . '/howToLearnPhp/config/conexao.php';


?>

<!-- Head -->
<?php
require_once './src/views/includes/head.php';
?>
<title>How to learn PHP</title>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./src/php_actions/login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Endereço de email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                                Lembrar de mim
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="wrapper">
        <!-- Sidebar -->
        <?php
        require_once './src/views/includes/sidebar.php';
        ?>

        <!-- Page Content Holder -->
        <div id="content">

            <!-- Navbar -->
            <?php
            require_once './src/views/includes/navbar.php';
            ?>

            <?php
            if (isset($_GET['categoriaEscolhida'])) {
                $categoria = $_GET['categoriaEscolhida'];
            }

            $sql = "SELECT Postagem.idPost, Postagem.titulo, Postagem.dataPostagem, Postagem.conteudo, Usuario.nome, Categoria.tipo, Categoria.idCategoria FROM Postagem INNER JOIN Usuario ON Postagem.idUser = Usuario.idUser INNER JOIN Categoria ON Postagem.idCategoria = Categoria.idCategoria WHERE Postagem.idCategoria = '$categoria'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while ($dados = mysqli_fetch_array($resultado)) {
                    $conteudoMin = mb_strimwidth($dados[conteudo], 0, 300, "...");
                    echo "
                    <div class='card mt-2' id='$dados[idPost]*'>
                      <h5 class='card-header'>$dados[titulo]</h5>
                      <div class='card-body'>
                      <h6 class='card-title'>Autor: $dados[nome]</h6>
                        <p class='card-text'>$conteudoMin</p>
                        <textarea style='display:none;'>$dados[conteudo]</textarea>
                        <a class='btn btn-primary' data-toggle='collapse' href='#collapsePost$dados[idPost]' role='button' aria-expanded='false' aria-controls='collapsePost$dados[idPost]'>
                            Ler mais
                        </a>

                        <div class='collapse' id='collapsePost$dados[idPost]'>
                            <div class='card card-body'>
                                $dados[conteudo]
                            </div>
                        </div>

                        <button class='btn btn-default' data-toggle='collapse' href='#collapseComment$dados[idPost]' role='button' aria-expanded='false' aria-controls='collapseComment$dados[idPost]'>
                            Comentar
                        </button>

                        <div class='collapse' id='collapseComment$dados[idPost]'>
                            <div class='card card-body'>
                                <form>
                                    <label for='nome'>Nome: </label>
                                    <input id='nome' name='name' placeholder='Joãozinho' class='form-control' / >

                                    <label class='mt-2' for='comentario'>Comentário: </label>
                                    <textarea class='form-control' placeholder='Nossa, que interessante!'></textarea>

                                    <button type='submit' class='btn btn-success mt-2'>Enviar</button>
                                </form>
                            </div>
                        </div>
                      </div>
                      <div class='card-footer text-muted'><b>Categoria:</b> $dados[tipo]</div>
                    </div>";
                }
            } else {
                echo "Ops! não tem nenhuma postagem para a análise :(";
            }
            ?>

        </div>
    </div>

    <?php
    require_once './src/views/includes/scripts.php';
    ?>


</body>

</html>