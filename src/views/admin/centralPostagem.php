<?php
include('../../../helpers/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>


  <title>Central Postagem</title>

  <!-- Configuração de head do painel -->
  <?php include_once '../includes/headPanelConfig.php' ?>

</head>

<body id="page-top">

  <!-- Modal -->
  <div class="modal fade" id="modalPostagem" tabindex="-1" role="dialog" aria-labelledby="modalPostagemTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPostagemTitle">Título da Postagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="conteudoModal">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra metus a neque rutrum dictum. Fusce eget nisi et velit varius fermentum. Nullam nec iaculis massa. Integer a libero eu metus egestas tempus. Sed lobortis, purus ac condimentum posuere, sapien nibh vehicula erat, vitae fringilla libero risus sed enim. Sed tempor at metus ut volutpat. Nulla tincidunt lectus sed ligula eleifend, a sodales arcu tristique. Suspendisse auctor lacinia lorem sit amet tincidunt. Maecenas tincidunt lorem ut eros malesuada, et dapibus metus elementum. Etiam luctus ipsum sem, vel tempor lectus porta at. Ut quis ante ac nisi laoreet dapibus. In non massa ante. Morbi sit amet magna et mauris auctor consequat.
          
          In placerat gravida tellus, in vehicula arcu auctor vitae. Etiam tellus tellus, euismod eget venenatis in, dapibus sit amet odio. Ut imperdiet sit amet erat sed vulputate. Ut vel tincidunt felis. Morbi sodales, sem sed mattis dignissim, ipsum dui finibus libero, et sagittis sapien quam quis tellus. Duis elit massa, maximus ac massa sit amet, ornare maximus justo. Donec ac eleifend elit. Nullam ac lorem semper, hendrerit turpis vel, sagittis mi. Duis diam leo, consectetur et sapien at, bibendum iaculis nulla. Aliquam erat volutpat. Curabitur pellentesque ultricies odio a luctus.
        </div>
        <form method="POST" action="../../php_actions/postagem/aprovarPostagem.php">
          <div class="modal-footer">
            <input type="hidden" name="conteudo" id="conteudoModalInput">
            <input type="hidden" name="titulo" id="modalPostagemTitleInput">
            <input type="hidden" name="id" id="modalPostagemIdInput">
            <input type="hidden" name="categoria" id="modalPostagemCategoriaInput">
            <input type="submit" name="decisao" value="Aprovar Postagem" class="btn btn-success" />
            <input type="submit" name="decisao" value="Reprovar Postagem" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja reprovar este artigo? Ele irá desaparecer totalmente da sua base de dados.')"/>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- topNav-->
  <?php include_once '../includes/topNav.php' ?>

  <div id="wrapper">

    <!-- sideBar-->
    <?php include_once '../includes/sidebarAdmin.php' ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Central de Postagens</li>
        </ol>

        <!-- Page Content -->
        <h1>Central de Postagens</h1>
        <hr>
        <?php
        require_once '../../php_actions/postagem/listarPostagens.php';

        if (mysqli_num_rows($resultado) > 0) {
          while ($dados = mysqli_fetch_array($resultado)) {
            $conteudoMin = mb_strimwidth($dados[conteudo], 0, 300, "...");
            echo "
                    <div class='card mt-2' id='$dados[idPost]*'>
                      <h5 class='card-header'>$dados[nome]</h5>
                      <div class='card-body'>
                        <h5 class='card-title'>$dados[titulo]</h5>
                        <p class='card-text'>$conteudoMin</p>
                        <textarea style='display:none;'>$dados[conteudo]</textarea>
                        <button type='button' id='$dados[idPost]' onClick='transferirDadosPostagem(this.id)' class='btn btn-primary' data-toggle='modal' data-target='#modalPostagem'>Ler mais</button>
                      </div>
                      <div class='card-footer text-muted'><b>Categoria:</b> $dados[tipo]</div>
                    </div>";
          }
        } else {
          echo "Ops! não tem nenhuma postagem para a análise :(";
        }
        ?>




      </div>


      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal de logout -->
  <?php include_once '../includes/modalLogout.php' ?>

  <!-- Configuração de scripts do painel -->
  <?php include_once '../includes/scriptsPanelConfig.php' ?>

  <script>
    function transferirDadosPostagem(id) {
      let elementos = document.getElementById(id + '*').querySelectorAll('*');
      document.getElementById('modalPostagemTitle').innerText = elementos[2].innerText;
      document.getElementById('conteudoModal').innerText = elementos[4].value;

      document.getElementById('modalPostagemTitleInput').value = elementos[2].innerText;
      document.getElementById('conteudoModalInput').value = elementos[4].value;
      document.getElementById('modalPostagemIdInput').value = id;
      let categoriaSubs = elementos[6].innerText.replace("Categoria: ", "");
      document.getElementById('modalPostagemCategoriaInput').value = categoriaSubs;

    }
  </script>

</body>

</html>