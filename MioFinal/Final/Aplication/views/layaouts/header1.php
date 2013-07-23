
<html>

    <head>

        <title>SITEC</title>

        <!-- Loading Bootstrap -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../bootstrap/css/PROYECTO.css" rel="stylesheet">
        <link href="../bootstrap/css/style.css" rel="stylesheet" >
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
        <script src="../bootstrap/js/login.js"></script>

        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>
    

    </head>

    <body background="../bootstrap/img/FONDO.jpg">

        <div class="container">
            <img src="../bootstrap/img/BANNER.jpg" alt="">

            <div class="navbar navbar-form">
               <div class="navbar-inner">
                    <ul class="nav add-on">
                        <li class="divider-vertical">
                            <a href="../site/inicio.php">Inicio</a>
                        </li>
                        <li class="divider-vertical">
                            <a href="../site/form_login.php">Eventos</a>
                        </li>
                        <li class="divider-vertical">
                            <a href="<../site/form_usuarios.php">Registro</a>
                        </li>
                        <li class="divider-vertical">
                            <a href="../site/form_actividades.php">Actividades</a>
                        </li>
                        <li class="divider-vertical">
                            <a href="../site/logout.php">Cerrar Sesion:   <?php echo $_SESSION['nombre']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
