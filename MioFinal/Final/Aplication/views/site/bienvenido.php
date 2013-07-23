<?php 
session_start();
include('../layaouts/header.php');
?>


<h2>Bienvenido </h2>
<?php 
//print_r($_SESSION);
if(isset($_SESSION['nombre'])){
?>
<h2>Bienvenido </h2>
<?php 
echo '<br>';
echo $_SESSION['nombre'];
echo'<br>';
echo $_SESSION['email'];
}else{
    echo $_SESSION['nombre'];
}
?>
<?php
include('../layaouts/footer.php');
?>
