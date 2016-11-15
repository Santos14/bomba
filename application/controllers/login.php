<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
    * 
    */
    class Login extends CI_Controller
    {   
        function __construct(){
            parent::__construct();
        }

        public function index()
        {         
            if(!isset($_POST['user'])){ //primera vez en el login                
                $this->load->view("/login/index.php");            
            }else{
                
                $this->load->model('usuario_model');
                $data= array('user' =>  $_POST['user'],'password'=>$_POST['password']);
                $user=$this->usuario_model->ValidarUsuario($data);
                //print_r($user); exit;
                if(!empty($user)){
                    $data= array(
                        'user' => $_POST['user'],
                        'id' => $user->idusuario, 
                        'login'=>true,
                        'cargo'=>$user->cargo
                    );
                    $this->session->set_userdata($data);
                    if($user->cargo=='A'){
                        redirect('', 'refresh');
                    }else{
                        redirect('', 'refresh');
                    }
                }else{
                    $data['error']="Usuario o password incorrecta";
                    $this->load->view("/login/index.php",$data); 
                }
            }

        }
        public function cerrar()
        {
            $this->session->sess_destroy();
            redirect('', 'refresh');
        
        } 


    }


?>