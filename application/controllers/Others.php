<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Others extends CI_Controller {

  
    function __construct() {
		parent::__construct();
        //$this->load->model('Registro');
        $this->load->helper('url');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
            //Scripts
                $styles['modulecss']="registro/registro.css";
                $scripts['modulejs']="registro_js/registrarnuevo.module.js";
               $this->load->view('layouts/header', $styles);
               $this->load->view('others/error404', $scripts);
               $this->load->view('layouts/footer');
        }else{
           header('Location: '.base_url());                  
        } 
	}
	

    public function error404()
    {
        if(isset($this->session->userdata['logged_in'])){
            //Scripts
                $styles['modulecss']="registro/registro.css";
                $scripts['modulejs']="registro_js/registrarnuevo.module.js";
               $this->load->view('layouts/header', $styles);
               $this->load->view('others/error404', $scripts);
               $this->load->view('layouts/footer');
        }else{
           header('Location: '.base_url());                  
        } 
    }


}
