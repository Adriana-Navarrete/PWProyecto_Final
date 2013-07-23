<?php
class valida{
        public $tiposV=array(
                'id'=>"/^[0-9]+$/",
                'nombre'=>"/^[A-Z]+[a-z]*\s$/",
                'precio'=>"/^[0-9]*$/",
                'lugares'=>"/^[0-9]*$/",
                'fecha'=>"/^[0-9][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]$/",
                
               
    );
    
    function valida_er($tipo, $valor)
    {
        $ER=  $this->tiposV[$tipo];
        
        $match = preg_match($ER, $valor);
    if ($match){
//        echo $valor.' VALIDO <br/>';
    return true;}
    else{
//        echo $valor.' INVALIDO <br/>';
    return false;}
    }
}
?>
