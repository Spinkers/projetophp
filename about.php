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

            <h2 style="text-align: center">Equipe</h2>

            <div class="card-deck m-4" style="text-align: center">
                <div class="card">
                    <img class="card-img-top" src="./src/public/img/Larissa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Larissa Narciso</h5>
                        <p class="card-text">Front-end</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./src/public/img/Lucas.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lucas Rosado</h5>
                        <p class="card-text">Back-end</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./src/public/img/Denilson.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Denilson</h5>
                        <p class="card-text">DBA</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./src/public/img/Allanbida.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Allan</h5>
                        <p class="card-text">Designer UX UI</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

            <div class="line"></div>

            <h2 style="text-align: center">História</h2>
            <p>Iniciada através de um trabalho da matéria de linguagem de programação IV na faculdade de técnologia Fatec Ary Fossen em Jundiaí-SP, a fundação How To Learn surgiu com objetivos bem sólidos e imutáveis:</p>
            <ol>
                <li>Disseminar conhecimento</li>
                <li>Integração digital</li>
            </ol>

        </div>
    </div>

    <?php
    require_once './src/views/includes/scripts.php';
    ?>

</body>

</html>