
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
                        <li>
                <div id="loginContainer">
                <a href="" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" method="POST" action="../site/login.php">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="">Forgot your password?</a></span>
                    </form>
                </div>
            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">