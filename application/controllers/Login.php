<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ERROR | E_PARSE);
class Login extends CI_Controller {


    
 function __construct(){
    parent::__construct();
    $this->load->model("Loginmodel");
 }



 function index(){ 
    if(isset($this->session->userdata['logged_in'])){
        header('Location: '.base_url().'registro/registrarnuevo');
    }else{
        $this->load->helper('form');
        $this->load->view('login/acceso');
    }
 }

public function user_login_process() { 

      //Valida los campos  
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');      
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){

                //header('Location:'.base_url().'home_view.php');
                $this->load->view('login/acceso');
            }else{
                //$this->load->view('login_forms');                
                $this->load->view('login/acceso');
            }
        }else{
                $usuario = htmlentities(addslashes($this->input->post('username')));
                $password = htmlentities(addslashes($this->input->post('password')));  
                
                $result = $this->Loginmodel->login($usuario, $password);       
                if ($result['code'] == 200) { //echo "regreso muy bien";                
            
                        $session_data = array(
                                                'nombre_completo' => $result['nombres'] . " " .  $result['apepater'] ,
                                                'iduser'=> $result['uid'],
                                        );        
                                                                   
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);    
                        //header('Location:'.base_url().'home_view.php');
                        header('Location: '.base_url().'registro/registrarnuevo');                                     
                       
    
                }else{
                    //$data = array('error_message' => $result['message']);
                    $this->load->view('login/acceso');
                }


            
        }
    }

    public function generar(){
        //$val = $this->input->post('clave');
        
        //echo crypt($val);
    }

   public function logout() {
        // Elimina los datos de la sesión
        $sess_array = array(
        'id_user' => '',
        'nombre_completo' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        header('Location: '.base_url().'login');
        /*$data['message_display'] = 'La sesión finalizó correctamente.';
        $this->load->view('login', $data);*/
     }

}