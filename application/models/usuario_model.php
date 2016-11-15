<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_model extends CI_Model{
	    

	    function __construct(){
            parent::__construct();            
            $this->db=$this->load->database('mysql',TRUE);       
    
        }

        function ValidarUsuario($data){
	    	$sql="SELECT idusuario,cargo 
	    			FROM usuario 
	    			WHERE login='".$data['user']."' and clave='".$data['password']."' and estado='A'";

            $query=$this->db->query($sql);            
            return $query->row();
      
	    }

        function select(){
            $this->db->where("estado",'A');  
            $query=$this->db->get("usuario");      
            return $query;            
        }

        function crear($data){
            $datos=array('login' => $data['name'],
                        'clave' =>$data['password'],
                        'estado' => 'A' );
            if($this->db->insert('usuario',$datos)){
                 $query=0;
            }else{
                 $query=$this->db->_error_message();
            }
            return $query;            
        }

        function editar($data){
            $datos=array(   'login' => $data['name'],
                        'clave' =>$data['password'] );
            $this->db->where("idusuario",$data['id']);
            if($this->db->update('usuario',$datos)){
                 $query=0;
            }else{
                 $query=$this->db->_error_message();
            }
            return $query;
        }

        function eliminar($id){
            $datos=array('estado' => 'I' );
            $this->db->where("idusuario",$id);
            if($this->db->update('usuario',$datos)){
                 $query=0;
            }else{
                 $query=$this->db->_error_message();
            }
            return $query;
        }
	}
?>