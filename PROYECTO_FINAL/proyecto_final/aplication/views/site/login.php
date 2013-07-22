<?php 
session_start();
    
    include ('../../models/Modelo.php');
    include ('../../models/Usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/siteController/loginController.php');

    
    if(isset($_POST['email'])){
        $login=new LoginController();
        $login->valida_usuario($_POST['email'],$_POST['password']);
    }
        
?>

<?php

    include('../layouts/header.php');
    
?>

<form class="form-horizontal" id="formulario" method="post">
    <fieldset>
        <legend><center>Acceso a Usuarios Registrados</center></legend>
        <div class="span5 offset2">
            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input id="email" name="email" type="text" maxlength="120" required="text" placeholder="Email" autofocus>
                    </div>
                </div>
            </div>
            <br>
            <div class="control-group">
                <label class="control-label" for="password">Contrase&ntilde;a</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <input id="password" name="password" type="password" maxlength="120" required="text" placeholder="Contrase&ntilde;a">
                    </div>
                </div>
            </div>
            <br>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Recordar mis datos
                    </label>
                    <button id="guardar" name="guardar" type="submit" class="btn btn-info">Aceptar</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>

<?php

    include('../layouts/footer.php');
    
?>

