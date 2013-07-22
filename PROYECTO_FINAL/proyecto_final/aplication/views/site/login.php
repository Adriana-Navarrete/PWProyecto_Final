<?php session_start();
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

<html>
    <head>        
        <title>Acceso Usuarios</title>
    </head>
<body><center>
    <h3>Acceso a Usuarios Registrados</h3></center>
    <form class="form-horizontal" method="post">
 <div class="span5 offset2">

    <div class="control-group">
      <label class="control-label" for="email">Email</label>
         <div class="controls">
           <input type="text" id="email" name="email" placeholder="Email">
         </div>
      </div>
    <div class="control-group">
         <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
    </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn btn-info">Sign in</button>
    </div>
    </div>
 </div>
     
</form>

</body>
</html>

<?php
include('../layouts/footer.php');
?>

