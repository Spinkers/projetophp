<?php
include('../../../helpers/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Painel - Editar Categoria</title>

  <!-- Configuração de head do painel -->
  <?php include_once '../includes/headPanelConfig.php' ?>

</head>

<body id="page-top">

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
          <li class="breadcrumb-item active">Editar Categorias</li>
        </ol>

        <!-- Page Content -->
        <h1>Editar Categorias</h1>
        <hr>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Categoria</th>
              <th>Salvar</th>
              <th>Remover</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Categoria</th>
              <th>Salvar</th>
              <th>Remover</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            require_once '../../php_actions/categoria/select.php';

            if (mysqli_num_rows($resultado) > 0) {
              while ($dados = mysqli_fetch_array($resultado)) {
                echo "<tr>
                        <form action='../../php_actions/categoria/update.php' method='POST'>
                          <td><input name='idCategoria' class='form-control' value='$dados[idCategoria]' style='max-width: 50px; text-align: center;' readonly /></td>
                          <td><input name='tituloCategoria' class='form-control' value='$dados[tipo]' /></td>
                          <td><button name='decisao' value='1' type='submit' class='btn btn-primary'><i class='fas fa-fw fa-save'></i></button></td>
                          <td><button name='decisao' value='2' type='submit' class='btn btn-warning'><i class='fas fa-fw fa-trash'></i></button></td>
                        </form>
                      </tr>
                      ";
              }
            } else {
              echo "<tr>
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

</body>

</html>