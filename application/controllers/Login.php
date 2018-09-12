<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ERROR | E_PARSE);
class Login extends CI_Controller {



 function index(){ 
    if(isset($this->session->userdata['logged_in'])){
        header('Location: '.base_url().'dashboard');
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
                $objUser = new stdClass;
                $result['code'] = 403;
                if($usuario == "alec" && $password == "1234"){ 
                    $result['code'] = 200;
                    $objUser->idUser = 12;
                    $objUser->nombreCompleto = 'Alec Gonzalez';
                }else if($usuario == "eddy" && $password == "1234"){
                    $result['code'] = 200;
                    $objUser->idUser = 15;
                    $objUser->nombreCompleto = 'Eddy Erazo';
                } 
                //$result = $this->login_model->login($usuario, $password);       
                
                if ($result['code'] == 200) { //echo "regreso muy bien";    
                        $session_data = array(
                                                /* 'nombre_completo' => $result['nombres'] . " " .  $result['apepater'] ,
                                                'iduser'=> $result['rid'], */
                                                'id_user'=> $objUser->idUser,
                                                'nombre_completo' => $objUser->nombreCompleto,
                                        );        
                                                                   
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);    
                        //header('Location:'.base_url().'home_view.php');
                        header('Location: '.base_url().'dashboard');                               
                       
    
                }else{

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