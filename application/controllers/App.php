<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('Appmodel');
        $this->load->helper('url');
	}
	
	public function menucollapse()
    {
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idusuario')),
                esBoolean($this->input->post('_menustatus'))
            );//var_dump($param); die();
            $data  = json_encode($this->Appmodel->menu_collapse($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output($data);
        }
    }
}



