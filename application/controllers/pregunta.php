<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Pregunta extends CI_Controller
    {   
        
        function __construct(){
            parent::__construct();
            $this->load->model('cargo_model');           
        }
        
        public function index()
        {   
            
            $this->load->view("/layout/header.php");
            $this->load->view("/pregunta/index.php");
            $this->load->view("/layout/foother.php");
        }

        public function guardar()
        {   
            if(!empty($_POST['id'])) {
                $data= array ( 'id'=> $this->input->post('id'),
                                'descripcion'=> $this->input->post('descripcion'),
                                'abreviatura'=> $this->input->post('abreviatura'));
                $guardar=$this->cargo_model->editar($data);   

            }else{
                $data= array (  'descripcion'=> $this->input->post('descripcion'),
                                'abreviatura'=> $this->input->post('abreviatura') );
                $guardar=$this->cargo_model->crear($data);
                
            } 
            echo json_encode($guardar);   
        }
        
        public function eliminar()
        {            
            $guardar=$this->cargo_model->eliminar($_POST['id']);
            echo json_encode($guardar);  
        }

        public function cargar_datos($tabla='cargo')
        {   
            $consulta=$this->cargo_model->select($tabla);
            $result= array("draw"=>1,
                "recordsTotal"=>$consulta->num_rows(),
                 "recordsFiltered"=>$consulta->num_rows(),
                 "data"=>$consulta->result());
            
            //echo "<pre>";
            //print_r($nuevo);exit();
            echo json_encode($result);
        }

    }
 ?>

