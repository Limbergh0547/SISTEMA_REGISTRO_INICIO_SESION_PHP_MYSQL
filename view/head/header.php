<?php
    $ruta = $_SERVER["DOCUMENT_ROOT"]."/Proyectos/SISTEMA_REGISTRO_INICIO_SESION_PHP_MYSQL";
    require_once($ruta."/view/head/head.php");
    
?>

<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php if(empty($_SESSION['usuario'])): ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                    </ul>
                    <a href="/PROYECTOS/SISTEMA_REGISTRO_INICIO_SESION_PHP_MYSQL/view/home/login.php" class="boton">Inicia Session</a>
                    <a href="/PROYECTOS/SISTEMA_REGISTRO_INICIO_SESION_PHP_MYSQL/view/home/signup.php" class="boton">Registrate</a>
                </div>
                <?php else: ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Agregar informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Session de recursos</a>
                        </li>
                    </ul>
                    <a href="/PROYECTOS/SISTEMA_REGISTRO_INICIO_SESION_PHP_MYSQL/view/home/logout.php" class="boton">Cerrar Sesion</a>
                </div>
                <?php endif ?>

            </div>
        </nav>
    </div>
</div>
<div class="fondo">

