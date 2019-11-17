<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>How to Learn</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#">Início</a>
        </li>

        <?php
            define('BASE_URL', getcwd());
            require_once BASE_URL .'/src/php_actions/categoria/select.php';

            if (mysqli_num_rows($resultado) > 0) {
                while ($dados = mysqli_fetch_array($resultado)) {
                    echo "<li>";
                    echo "<a href='#$dados[tipo]SubMenu' data-toggle='collapse' aria-expanded='false' class='dropdown-toggle'>$dados[tipo]</a>";
                    echo "<ul class='collapse list-unstyled' id='$dados[tipo]SubMenu'>
                    <li>
                        <a href='#'>Sintaxe Básica</a>
                    </li>
                    <li>
                        <a href='#'>Tipos</a>
                    </li>
                    <li>
                        <a href='#'>Variáveis</a>
                    </li>
                    <li>
                        <a href='#'>Constantes</a>
                    </li>
                    <li>
                        <a href='#'>Expressões</a>
                    </li>
                    <li>
                        <a href='#'>Operadores</a>
                    </li>
                    <li>
                        <a href='#'>Estruturas de Controle</a>
                    </li>
                </ul>";
                    echo "</li>";
                }

            } else {
                echo "Nenhuma categoria";
            }
        ?>

        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Teste seu conhecimento</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Envie sua sugestão</a>
        </li>
    </ul>
</nav>