<?php

    class Modelo{
           function Modelo(){
		         $this->db = ADONewConnection('mysql');
//				 $this->db->debug = false;
				 $this->db->Connect('localhost','root','','proyectow');				 
		   }
		   public function consulta_sql($sql){
                   $rs=$this->db->Execute('SELECT * from '.$this->nombre_tabla);
		   $this->get_error($rs,'Error en consulta datos');
		   return $rs; 
                   }

                   public function consulta_datos(){
		   $rs=$this->db->Execute('SELECT * from '.$this->nombre_tabla);
		   $this->get_error($rs,'Error en consulta datos');
		   return $rs;
		   }
                      public function get_error($result,$tipo_error){
		         if($result===false){
		              die('Rediccionar a la pagina de error' .$tipo_error );
                              return false;
                              
		        }else{
                            return true;
                        }
		   }
		   
		   public function show_grid($num='10'){
		         $sql="SELECT * FROM ".$this->nombre_tabla;
				 $grid= new ADODB_Pager($this->db,$sql);
				 $grid->Render($rows_per_page=$num);
		   }
    }
?>
