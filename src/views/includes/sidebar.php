<style>
.estilo{
    color: #fff;
    border: transparent;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
    width: 100%;
    text-align: left;
}

button:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li button {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
</style>

<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>How to Learn</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="/howToLearnPhp">Início</a>
        </li>

        <?php
        $raiz = $_SERVER['DOCUMENT_ROOT'];
        require_once $raiz . '/howToLearnPhp/src/php_actions/categoria/select.php';

        if (mysqli_num_rows($resultado) > 0) {
            while ($dados = mysqli_fetch_array($resultado)) {
                echo "<form action='/howToLearnPhp/filter.php' method='GET'>";
                echo "<li><button class='estilo' name='categoriaEscolhida' value='$dados[idCategoria]'>$dados[tipo]</button></li>";
                echo "</form>";
            }
        } else {
            echo "Nenhuma categoria";
        }
        ?>

        <li>

        </li>

        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="" class="download">Teste seu conhecimento</a>
        </li>
        <li>
            <a href="" class="article">Envie sua sugestão</a>
        </li>
    </ul>
</nav>