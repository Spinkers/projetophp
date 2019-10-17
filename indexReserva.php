<!-- Head -->
<?php
  require_once './src/views/includes/head.php';
?>
    <title>PHP LEARN</title>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
          <?php
            require_once './src/views/includes/sidebar.php'; 
          ?>

          <!-- Page Content -->
            <div id="page-content-wrapper">

              <!-- Navbar -->
                <?php
                  require_once './src/views/includes/navbar.php';
                ?>

              <!-- Literal Content -->
                <div class="container-fluid">
                  <?php
                    require_once './src/views/includes/slideshow.php';  
                  ?>
                </div>

            </div>
          <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
  require_once './src/views/includes/scripts.php';
?>

</body>

</html>