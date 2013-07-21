<?php
class Modelo {
    private $db;
    
    function Modelo(){
	
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
        $this->db->Connect('localhost','root','12345','eventositc');
    }
    
    
    
    public function consulta_sql($sql){
        $rs = $this->db->Execute($sql);
        $this->get_error($rs,'Error en consulta datos');
        return $rs;
    }
    
    public function get_error($result,$tipo_error){
        if($result === false){
            die('Redireccionar a la pagina de error '.$tipo_error);
            return false;
        }else{
            return true;
        }
    }
    
}
?>