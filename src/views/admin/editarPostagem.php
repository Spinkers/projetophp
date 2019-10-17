<!DOCTYPE html>
<html lang="en">

<head>
<title>Painel - Editar Postagem</title>

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
              <tr>
                <td>PHP For Dummies</td>
                <td>Iniciante</td>
                <td>14/10/2019</td>
                <td>Denilson</td>
                <td>Editar</td>
              </tr>
              <tr>
                <td>PHP Aprendiz</td>
                <td>Intermediário</td>
                <td>14/10/2019</td>
                <td>Larissa</td>
                <td>Editar</td>
              </tr>
              <tr>
                <td>PHP Jedi Master</td>
                <td>Avançado</td>
                <td>14/10/2019</td>
                <td>Lucas Mourão</td>
                <td>Editar</td>
              </tr>
            </tbody>
          </table>
        <p>This is a great starting point for new custom pages.</p>

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
