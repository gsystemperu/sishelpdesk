<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Personalmodel');
        $this->load->helper('url');
    }


    public function listausuarios()
    {
            CHECK_USER_LOGIN();
            //Scripts
            $styles['modulecss']= "personal/personal.css";
            $scripts['modulejs']= "personal_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('personal/listausuarios', $scripts);
            $this->load->view('layouts/footer');

    }

    public function crearusuario()
    {
            CHECK_USER_LOGIN();
            //Scripts
            $styles['modulecss']= "personal/personal.css";
            $scripts['modulejs']= "personal_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('personal/crearusuario', $scripts);
            $this->load->view('layouts/footer');

    }

    public function tipousuario()
    {
            CHECK_USER_LOGIN();
            //Scripts
            $styles['modulecss']= "personal/personal.css";
            $scripts['modulejs']= "personal_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('personal/tipousuario', $scripts);
            $this->load->view('layouts/footer');
  
    }

    public function creartipousuario($action = '', $idtipousuario = 0)
    {
            CHECK_USER_LOGIN();
            //Scripts
            $styles['modulecss']= "personal/personal.css";
            $data['modulejs']= "personal_js/launcher.module.js";

            switch(strtolower($action)){
                case "edit": 
                    $toDo['type'] = 'edit'; 
                    $toDo['payload'] = $idtipousuario;
                    $data['action']= $toDo;
                    break;
            }
            
            $this->load->view('layouts/header', $styles);
            $this->load->view('personal/creartipousuario', $data);
            $this->load->view('layouts/footer');

    }

    public function grabartipousuario()//x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_id_tipousuario')),
                esCadenaNulo($this->input->post('_nombre')),
                esBoolean($this->input->post('_ps_incidencias')),
                esBoolean($this->input->post('_ps_categorias')),
                esBoolean($this->input->post('_ps_clientes')),
                esBoolean($this->input->post('_ps_usuarios')),
                esBoolean($this->input->post('_ps_informes')),
                esBoolean($this->input->post('_ps_miperfil')),
                esBoolean($this->input->post('_ps_mantenimiento'))
            ); 
            $data  = json_encode($this->Personalmodel->grabar_tipo_usuario($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function listadotipousuario()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_id_tipousuario'))
            ); //var_dump($param); die();
            $data  = json_encode($this->Personalmodel->listado_tipousuario($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function eliminartipousuario()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_id_tipousuario'))
            ); //var_dump($param); die();
            $data  = json_encode($this->Personalmodel->eliminar_tipousuario($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    

    
 
}
