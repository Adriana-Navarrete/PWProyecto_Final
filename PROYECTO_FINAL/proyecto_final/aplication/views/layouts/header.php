<?php
    include $_SERVER['DOCUMENT_ROOT'].'/PWProyecto_Final/PROYECTO_FINAL/proyecto_final/aplication/config.ini.php';
?>

<html>

    <head>

        <title>SITEC</title>
        
        <!-- Código del Icono -->
        <link href="<?echo BASE_URL;?>views/bootstrap/img/ICONO.ico" type="image/x-icon" rel="shortcut icon"/>

        <!-- Loading Bootstrap -->
        <link href="<?echo BASE_URL;?>views/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?echo BASE_URL;?>views/bootstrap/css/PROYECTO.css" rel="stylesheet">
        
        <!-- Loading Flat UI -->
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery-1.8.3.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap-select.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap-switch.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/flatui-checkbox.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/flatui-radio.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.tagsinput.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.placeholder.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.stacktable.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/application.js"></script>

        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>

    </head>

    <body background="<?echo BASE_URL;?>views/bootstrap/img/FONDO 3.jpg">

        <div class="container">
            <img src="<?echo BASE_URL;?>views/bootstrap/img/BANNER.jpg" alt="">

            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/inicio.php"><i class="icon-home"></i> Inicio</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_login.php"><i class="icon-user"></i> Login</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_usuarios.php"><i class="icon-pencil"></i> Registro</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_actividades.php"><i class="icon-tags"></i> Actividades</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_eventos.php"><i class="icon-briefcase"></i> Eventos</a>
                        </li>
                    </ul>
                </div>
            </div>