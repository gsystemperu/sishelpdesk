<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

  
	public function index()
	{
		$this->load->view('dashboard/index');
	}
	
	public function get_sidebar()
	{
		$this->load->view('dashboard/sidebar');
    }
    
    public function registrarnuevo()
    {
        if(isset($this->session->userdata['logged_in'])){
            //Scripts
                $script['modulejs']="Registro/registrarnuevo.module.js";
    
               //array asociativo con la llamada al metodo
               //del modelo
               ///$data["listaprincipal"]=$this->incidencias_model->listarprincipal();

               $this->load->view('layouts/header');
               $this->load->view('registro/tipoincidencia', $script);
               $this->load->view('layouts/footer');
        }else{
           header('Location: '.base_url().'login');                  
        } 
    }


}
