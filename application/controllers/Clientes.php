<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//require_once APPPATH . "/third_party/fpdf/fpdf.php";

class Clientes extends CI_Controller {

	
    function __construct() {
		parent::__construct();
        $this->load->model('Cliente');
        $this->load->helper('url');
	}

    #@Area POST

    public function grabarcliente() //x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('idcliente',0)),
                trim($this->input->post('dni','')),
                trim($this->input->post('nombres','')),
                trim($this->input->post('apepater','')),
                trim($this->input->post('apemater','')),
                trim($this->input->post('email','')),
                trim($this->input->post('telefono','')),
                trim($this->input->post('celular','')),
                trim($this->input->post('usuario','NULL'))
            ); 
            $data  = json_encode($this->Cliente->grabar_cliente($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                ); 
        }
    }

    public function listadoautocompletar()
    {
        if($this->input->method()=='get')
        {
            $param = array(
                texto_vacio_a_nulo($this->input->get('q',''))
            );
            $data  = json_encode($this->Cliente->om_fichacliente_autocompletar_visualiza($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                ); 
        }
    }
    


}