<?php
include('../../../helpers/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Central de Cometários</title>

  <!-- Configuração de head do painel -->
  <?php include_once '../includes/headPanelConfig.php' ?>

</head>

<body id="page-top">

      <!-- Modal -->
      <div class="modal fade" id="modalPostagem" tabindex="-1" role="dialog" aria-labelledby="modalPostagemTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPostagemTitle">Título do Comentário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra metus a neque rutrum dictum. Fusce eget nisi et velit varius fermentum. Nullam nec iaculis massa. Integer a libero eu metus egestas tempus. Sed lobortis, purus ac condimentum posuere, sapien nibh vehicula erat, vitae fringilla libero risus sed enim. Sed tempor at metus ut volutpat. Nulla tincidunt lectus sed ligula eleifend, a sodales arcu tristique. Suspendisse auctor lacinia lorem sit amet tincidunt. Maecenas tincidunt lorem ut eros malesuada, et dapibus metus elementum. Etiam luctus ipsum sem, vel tempor lectus porta at. Ut quis ante ac nisi laoreet dapibus. In non massa ante. Morbi sit amet magna et mauris auctor consequat.

In placerat gravida tellus, in vehicula arcu auctor vitae. Etiam tellus tellus, euismod eget venenatis in, dapibus sit amet odio. Ut imperdiet sit amet erat sed vulputate. Ut vel tincidunt felis. Morbi sodales, sem sed mattis dignissim, ipsum dui finibus libero, et sagittis sapien quam quis tellus. Duis elit massa, maximus ac massa sit amet, ornare maximus justo. Donec ac eleifend elit. Nullam ac lorem semper, hendrerit turpis vel, sagittis mi. Duis diam leo, consectetur et sapien at, bibendum iaculis nulla. Aliquam erat volutpat. Curabitur pellentesque ultricies odio a luctus.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger">Reprovar Comentário</button>
              <button type="button" class="btn btn-success">Aprovar Comentário</button>
            </div>
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
        <h1>Central de Comentários</h1>
        <hr>
        <div class="card">
            <h5 class="card-header">Nome da pessoa</h5>
            <div class="card-body">
              <h5 class="card-title">Título do Comentário</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPostagem">Ler mais</button>
            </div>
          </div>

          <div class="card mt-3">
                <h5 class="card-header">Nome da pessoa</h5>
                <div class="card-body">
                  <h5 class="card-title">Título do Comentário</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type='button' class="btn btn-primary" data-toggle="modal" data-target="modalPostagem">Ler mais</button >
                </div>
              </div>
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
