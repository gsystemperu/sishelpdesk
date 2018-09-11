<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//require_once APPPATH . "/third_party/fpdf/fpdf.php";

class Servicios extends CI_Controller {

	
    function __construct() {
		parent::__construct();
        $this->load->model('Servicio');
        $this->load->helper('url');
	}

    #@Area POST
	
    
    #@Area GET
    public function index()
	{
        
        $servicio = $this->input->post('servicio');
        $param = array(esNumeroCero($servicio));
        $data  = json_encode($this->Servicio->lista_servicio($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function combotiposervicio()
	{
        $param = array('');
        $data  = json_encode($this->Servicio->lista_tipo_servicio($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function mostrarservicios()
	{
        $param = array(
            esNumeroCero($this->input->get('tservicio'))
        );
        $data  = json_encode($this->Servicio->lista_servicio($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function listadoautocompletar()
	{
        $param = array(
            esCadenaNulo($this->input->get('tbuscar'))
        );
        $data  = json_encode($this->Servicio->om_fichausuario_autocompletar_visualiza($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function listararea()
	{
        $param = array(
            esCadenaNulo($this->input->get('tbuscar'))
        );
        $data  = json_encode($this->Servicio->lista_area($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function listarsubarea()
	{
        $param = array(
            esCadenaNulo($this->input->get('tbuscar'))
        );
        $data  = json_encode($this->Servicio->lista_subarea($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function listartecnico()
	{
        $param = array(
            esCadenaNulo($this->input->get('tbuscar'))
        );
        $data  = json_encode($this->Servicio->lista_tecnico($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    public function listadoinsidencias()
	{
        $param = array(
            esNumeroCero($this->input->get('idincidencia')),
            esCadenaNulo($this->input->get('fecha'))
        );
        $data  = json_encode($this->Servicio->listado_insidencias($param));
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                $data
            );
    }
    #@Area PUT


}
