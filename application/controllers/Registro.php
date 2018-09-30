<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

  
    function __construct() {
		parent::__construct();
        $this->load->model('Servicio');
        //$this->load->model('Incidencia');
        $this->load->helper('url');
	}

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
                $styles['modulecss']="registro/registro.css";
                $scripts['modulejs']="registro_js/launcher.module.js";
               $this->load->view('layouts/header', $styles);
               $this->load->view('registro/content_nuevo', $scripts);
               $this->load->view('layouts/footer');
        }else{
           header('Location: '.base_url().'login');                  
        } 
    }

    public function modalregistrarservicio()
    {
       // $extradata['model_lista_urgencia'] = 

       $query_tiposervicio = $this->Servicio->get_lista_tiposervicio();
       $query_impacto = $this->Servicio->get_lista_impacto();
       $query_urgencia = $this->Servicio->get_lista_urgencia();
       $query_prioridad = $this->Servicio->get_lista_prioridad();
       $query_estadoincidencia = $this->Servicio->get_lista_estado();
       $extradata['lista_impacto'] = $query_impacto['data']; 
       $extradata['lista_urgencia'] = $query_urgencia['data']; 
       $extradata['lista_prioridad'] = $query_prioridad['data']; 
       $extradata['lista_estadoincidencia'] = $query_estadoincidencia['data']; 
       $extradata['lista_tiposervicio'] = $query_tiposervicio['data']; 
       
        $this->load->view('registro/modal_regservicio',  $extradata);
    }

    public function modalagregarcliente()
    {
        $this->load->view('registro/modal_agregarcliente');
    }


    


}
