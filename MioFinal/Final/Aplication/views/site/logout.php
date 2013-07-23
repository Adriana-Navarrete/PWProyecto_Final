<?php 
session_start();

if ($_SESSION['nombre'])
{	
	session_destroy();
        header("Location: inicio.php");
	}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión, por favor regístrese")
	self.location = "formulario.html"
	</script>';}
?>
