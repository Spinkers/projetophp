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
    <?php include_once '../includes/sideBar.php' ?>

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
                  <th>Editar</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                  <th>ID</th>
                  <th>Categoria</th>
                  <th>Editar</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
                  require_once '../../php_actions/categoria/select.php';

                  if(mysqli_num_rows($resultado) > 0){
                      while($dados = mysqli_fetch_array($resultado)){
                          echo "<tr>
                                  <td>$dados[ID]</td>
                                  <td>$dados[categoria]</td>
                                  <td><button type='submit' class='btn btn-primary'><i class='fas fa-fw fa-edit'></i></button></td>
                                </tr>";
                          }
                  }else{
                    echo "<tr>
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
