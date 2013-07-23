<?php

class Usuarios extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'id';
    public $atributos = array(
                        'apellido_paterno'=>array(),
                        'apellido_materno'=>array(),
                        'nombre'=>array(),
                        'sexo'=>array(),
                        'edad'=>array(),                        
                        'email'=>array(),
                        'nctr_rfc'=>array(),
                        'numero_control'=>array(),
                        'password'=>array()
    );
    private $apellido_paterno;
    private $apellido_materno;
    private $nombre;
    private $sexo;
    private $edad;
    private $email;
    private $nctr_rfc;
    private $numero_control;
    private $password;
        
    function Usuarios() {
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
        public function get_apllido_p(){
        return $this->apellido_paterno;
    } 
    
    public function set_apellido_p($valor){
        $this->apellido_paterno = $valor;
    }
            public function get_apllido_m(){
        return $this->apellido_materno;
    } 
    
    public function set_apellido_m($valor){
        $this->apellido_materno = $valor;
    }
    public function get_nombre(){
        return $this->nombre;
    } 
    
    public function set_nombre($valor){
        $this->nombre = $valor;
    }
     public function get_sexo(){
        return $this->sexo;
    } 
    
    public function set_sexo($valor){
        $this->sexo = $valor;
    }
     public function get_edad(){
        return $this->edad;
    } 
    
    public function set_edad($valor){
        $this->edad = $valor;
    }
    
    public function get_email(){
        return $this->email;
    } 
    
    public function set_email($valor){
        
        $this->email = $valor;
    }
     public function get_rfc(){
        return $this->nctr_rfc;
    } 
    
    public function set_rfc($valor){
        $this->nctr_rfc = $valor;
    }
     public function get_numero_control(){
        return $this->numero_control;
    } 
    
    public function set_numero_control($valor){
        $this->numero_control = $valor;
    }
    
    public function get_password(){
        return $this->password;
    } 
    
    public function set_password($valor){
        
        $this->password = md5($valor);
        
    }
    
    
    
}
?>
