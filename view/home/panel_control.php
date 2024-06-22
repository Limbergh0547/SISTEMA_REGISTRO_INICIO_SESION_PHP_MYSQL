<?php
    $ruta = $_SERVER["DOCUMENT_ROOT"]."/Proyectos/SISTEMA_REGISTRO_INICIO_SESION_PHP_MYSQL";
    require_once($ruta."/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['usuario']?></h1>
<?php
    require_once($ruta."/view/head/footer.php");
?>