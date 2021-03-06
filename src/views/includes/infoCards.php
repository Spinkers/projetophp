<!-- Icon Cards-->
<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 comentários!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  <?php 
                    require_once '../../php_actions/postagem/select.php';
                    if(mysqli_num_rows($resultado) > 0){
                      echo mysqli_num_rows($resultado), " postagens!";
                    }else{
                      echo "Nenhuma postagem :(";
                    }
                  ?>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="editarPostagem.php">
                <span class="float-left">Ver Detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">
                  <?php 
                    require_once '../../php_actions/usuario/select.php';
                    if(mysqli_num_rows($resultado) > 0){
                      echo mysqli_num_rows($resultado), " usuários!";
                    }else{
                      echo "Nenhum usuário :(";
                    }
                  ?>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">
                <?php 
                    require_once '../../php_actions/postagem/listarPostagensNaoAprovadas.php';
                    if(mysqli_num_rows($resultado) > 0){
                      echo mysqli_num_rows($resultado), " postagens pendentes!";
                    }else{
                      echo "Nenhuma postagem pendente :)";
                    }
                  ?>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>