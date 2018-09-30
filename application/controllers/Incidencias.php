<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//require_once APPPATH . "/third_party/fpdf/fpdf.php";

class Incidencias extends CI_Controller {

	
    function __construct() {
		parent::__construct();
        $this->load->model('Incidencia');
        $this->load->helper('url');
	}


    public function actualizar() //x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idinsidencia')),
                esNumeroCero($this->input->post('_idestado')),
                esCadenaNulo($this->input->post('_vusuario')),
                esCadenaNulo($this->input->post('_hora'))
            );
            $data  = json_encode($this->Servicio->cancelar_insidencia($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    } 


    




}
ç