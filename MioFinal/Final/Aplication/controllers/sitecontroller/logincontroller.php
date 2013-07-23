<?php
  class LoginController extends Usuarios{
      
    private $email;
    private $password;
    
      public function valida_usuario($email,$password){
      parent::Usuarios();
      $SQL="select  
          from usuarios
          where email='".$email."'";
     
      $rs=$this->consulta_sql($SQL);
//      echo"<pre>";
     
      $rows=$rs->GetArray();
  
//      echo "</pre>";
        //print_r($rows);
        //echo $rows['0']['password'];
      if(count($rows)==1){
        if($rows['0']['password']==$password){
            $this->inicia_sesion($rows[0]);
        } else{
            echo"email no encontrado"; 
        }
           
     }
     else{
         echo"soy yo";
     }
      }
      public function inicia_sesion($rows){
          $_SESSION['nombre']=$rows['nombre'];
          $_SESSION['email']=$rows['email'];
          $_SESSION['roles']=array('admin','maestro');
          $_SESSION['roles']='1';
        
//         echo $_SESSION['nombre'];
//         echo $_SESSION['email'];
//         echo $_SESSION['roles'];
        header("Location: ../../views/site/inicio.php");
      }
     
  }
?>
