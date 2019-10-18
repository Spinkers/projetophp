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

      <h2>Seja bem vindo!</h2>
      <p>Hoje o PHP é uma das linguagens de programação mais utilizadas do mundo. Contudo, antes de explicarmos o porquê disso, vamos analisar o contexto histórico da tecnologia.
        O termo PHP significava originalmente Personal Home Page, tendo seu significado alterado para o acrônimo recursivo para Hypertext Preprocessor com o passar do tempo. A linguagem foi criada em 1994 por Rasmus Lerdof. Nessa época, a primeira versão da linguagem era apenas um conjunto de códigos CGI (Common Gateway Interface) escritos em linguagem C.</p>
      <p>Durante esse período, era conhecido como PHP/FI. A ideia do criador era de acompanhar as visitas de seu site pessoal, que funcionava como uma espécie de currículo. Ao longo do tempo, Rasmus desenvolvia mais e mais scripts, aumentando a gama de recursos que as ferramentas do seu site possuíam. Portanto, ele passou a chamar a tecnologia de PHP Tools.</p>

      <div class="line"></div>

      <h2>Porque aprender PHP?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="line"></div>

      <h2>Como aprender PHP?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="line"></div>

      <h3>Lorem Ipsum Dolor</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <?php
  require_once './src/views/includes/scripts.php';
  ?>

</body>

</html>