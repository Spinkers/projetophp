<!-- Sidebar -->
<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Início</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Conteúdo</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Criar:</h6>
          <a class="dropdown-item" href="novaPostagem.php">Nova Postagem</a>
          <a class="dropdown-item" href="novaCategoria.php">Nova Categoria</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Editar:</h6>
          <a class="dropdown-item" href="editarPostagem.php">Editar Postagens</a>
          <a class="dropdown-item" href="editarCategoria.php">Editar Categorias</a>
        </div>
      </li>

<?php
if($_SESSION['admin'] == 1) : 
?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Administração</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="centralPostagem.php">Aprovar Postagens</a>
          <a class="dropdown-item" href="centralComentarios.php">Aprovar Comentários</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

<?php
endif;
?>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-user"></i>
          <span>Perfil</span></a>
      </li>

    </ul>