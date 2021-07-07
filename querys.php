<?php include("./components/head.php") ?>

<body>
    <?php include("./components/navbar.php") ?>
    <div class="container text-center mb-5">
        <h1>Querys</h1>
    </div>
    <div class="container">
        <p> Con la finlidad de cumplir el requisito de la creación de varias tablas en una base de datos MySQL he decido expresarlo en forma de scripts que se ejecutan directamente en MySQL.</p>
        <h4 class="mt-5">Creación de schema</h4>
        <div class="dropdown-divider"></div>
        <p>Es necesario crear la base de datos con el nombre "global_prueba"</p>
        <div class="alert alert-secondary">
            <code>
                CREATE DATABASE global_prueba;
            </code>
        </div>
        <h4 class="mt-5">Creación de tablas</h4>
        <div class="dropdown-divider"></div>
        <p>La unica tabla necesaria para el proyecto es "producto", las demas son opcionales.</p>
        <div class="alert alert-secondary">
            <code>
                CREATE TABLE producto
            </code>
        </div>

    </div>
    <?php include("./components/scriptsfoot.php") ?>
</body>

</html>