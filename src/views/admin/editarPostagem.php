<?php
include('../../../helpers/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Painel - Editar Postagem</title>

  <!-- Configuração de head do painel -->
  <?php include_once '../includes/headPanelConfig.php' ?>

</head>

<body id="page-top">

  <!-- Modal -->
  <div class="modal fade" id="modalPostagem" tabindex="-1" role="dialog" aria-labelledby="modalPostagemTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPostagemTitle">Editar Postagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../../php_actions/postagem/update.php" method="POST">
          <div class="modal-body" id="conteudoModal">
            <input type="hidden" name="id" id="modalPostagemIdInput">

            <label for="tituloPostagem">Título da Postagem: </label>
            <input class="form-control" name="tituloPostagem" id="tituloPostagem" placeholder="How to start with PHP" type="text">

            <label for="conteudoPostagem2" class="mt-2">Conteúdo da Postagem: </label>
            <textarea class="form-control" name="conteudoPostagem" id="conteudoPostagem2" cols="30" rows="10" placeholder="Lorem ipsum dolor sit amet..."></textarea>

            <label for="categoriaPostagem" class="mt-2">Categoria da Postagem: </label>
            <select name="categoria" id="categoria" class="form-control">
              <?php
              require_once '../../php_actions/categoria/select.php';

              if (mysqli_num_rows($resultado) > 0) {
                while ($dados = mysqli_fetch_array($resultado)) {
                  echo "<option value=\"$dados[idCategoria]\">" . $dados['tipo'] . "</option>";
                }
              } else {
                echo "<option value='null'>Nenhuma categoria cadastrada</option>";
              }
              ?>
            </select>
          </div>
          <div class="modal-footer">
            <input type="submit" name="decisao" value="Salvar Alterações" class="btn btn-success" />
            <input type="submit" name="decisao" value="Excluir Postagem" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este artigo? Ele irá desaparecer totalmente da sua base de dados.')" />
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
          <li class="breadcrumb-item active">Editar Postagens</li>
        </ol>

        <!-- Page Content -->
        <h1>Editar Postagens</h1>
        <hr>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Título</th>
              <th>Categoria</th>
              <th>Data</th>
              <th>Autor</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Título</th>
              <th>Categoria</th>
              <th>Data</th>
              <th>Autor</th>
              <th>Editar</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            require_once '../../php_actions/postagem/listarPostagens.php';

            if (mysqli_num_rows($resultado) > 0) {
              while ($dados = mysqli_fetch_array($resultado)) {
                echo "<tr id='$dados[idPost]*'>
                                  <td>$dados[titulo]</td>
                                  <td>$dados[tipo]</td>
                                  <td>$dados[dataPostagem]</td>
                                  <td>$dados[nome]</td>
                                  <td><button type='button' id='$dados[idPost]' onclick='transferirDadosPostagem(this.id)' class='btn btn-primary' data-toggle='modal' data-target='#modalPostagem'><i class='fas fa-fw fa-edit'></i></button><textarea style='display:none;'>$dados[conteudo]</textarea> <input type='hidden' id='idCategoria' value='$dados[idCategoria]' /></td>
                                  </tr>";
              }
            } else {
              echo "<tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                  </tr>";
            }
            ?>
          </tbody>
        </table>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">

        <!-- Modal de logout -->
        <?php include_once '../includes/modalLogout.php' ?>


        <!-- Configuração de scripts do painel -->
        <?php include_once '../includes/scriptsPanelConfig.php' ?>

        <script>
          function transferirDadosPostagem(id) {
            let elementos = document.getElementById(id + '*').querySelectorAll('*');
            document.getElementById('tituloPostagem').value = elementos[0].innerText;
            document.getElementById('conteudoPostagem2').innerText = elementos[7].value;
            document.getElementById('modalPostagemIdInput').value = id;
            document.getElementById('categoria').value = elementos[8].value;

          }
        </script>

</body>

</html>