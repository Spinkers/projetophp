<!DOCTYPE html>
<html lang="en">

<head>
  <title>Painel - Nova Categoria</title>

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
          <li class="breadcrumb-item active">Nova Categoria</li>
        </ol>

        <!-- Page Content -->
        <h1>Nova Categoria</h1>
        <hr>
          <form action="" method="POST">
            <label for="categoria">Categoria</label>
            <input type="text" id="titulo" class="form-control" placeholder="Insira o título da categoria">

            <button class="btn btn-primary mt-3">Salvar</button>

          </form>
        <p>This is a great starting point for new custom pages.</p>

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

</body>

</html>
