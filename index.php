<?php include("./components/head.php") ?>

<body>
    <?php include("./components/navbar.php") ?>
    <div class="container text-center">
        <h1>Home</h1>
        <p>Esta es una app de demostración de la prueba propuesta por la empresa Desarrollo Global</p>
        <h2 class="mt-4">Sobre la app</h2>
        <p>Esta es una App desarrollada en PHP y MySQL, para hacer uso correcto de la aplicación es necesrio conectar a una base de datos MySQL con los datos que se espicifican en el archivo db.php en la carpeta "database". Es necesario que en la base de datos exista la tabla producto y cuente con los campos <strong> id, nombre y decripcion.</strong></p>
        <p>Los requisitos de la creación de una base de datos con varias tablas lo plasmé en un script de creación de base de datos que incluye la base de datos que es necesaria para el proyecto. Los Scripts se ecnuetran en <a href="querys.php">la sección querys</a></p>
    </div>


    <?php include("./components/scriptsfoot.php") ?>
</body>

</html>