<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//require_once APPPATH . "/third_party/fpdf/fpdf.php";

class Servicios extends CI_Controller {

	
    function __construct() {
		parent::__construct();
        $this->load->model('Servicio');
        $this->load->helper('url');
	}

    #@Area POST

    public function cerraratencion() //x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idinsidencia')),
                esNumeroCero($this->input->post('_idestado')),
                esCadenaNulo($this->input->post('_vusuario')),
                esCadenaNulo($this->input->post('_hora'))
            );
            $data  = json_encode($this->Servicio->cerrar_insidencia($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function cancelaratencion() //x
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


    /*select * from "om_helpdesk"."om_hd_servicios_insertar_actualizar"
    (0,4,1,'2018',9,NULL,NULL,'2018-09-10','10:00','10:15:00',NULL,'10:43:00',NULL,'OBSERVACION TEST',2,'AGONZALEZ','1|2|','0007')*/

    public function grabardatoservicio()//x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_iidincidencia')),
                esNumeroNulo($this->input->post('_iidcliente')),
                esNumeroCero($this->input->post('_iidtecnico')),
                esCadenaNulo($this->input->post('_vperiodo')),
                esNumeroCero($this->input->post('_imes')),
                esCadenaNulo($this->input->post('_flagprocedimientos')),
                esCadenaNulo($this->input->post('_flaginterna')),
                esCadenaNulo($this->input->post('_fechaini')),
                esCadenaNulo($this->input->post('_horasalida')),
                esCadenaNulo($this->input->post('_horallegada')),
                esCadenaNulo($this->input->post('_horatermino')),
                esCadenaNulo($this->input->post('_horaretorno')),
                esCadenaNulo($this->input->post('_tiempoatencion')),
                esCadenaNulo($this->input->post('_observaciones')),
                esNumeroCero($this->input->post('_vestado')),
                esCadenaNulo($this->input->post('_vusuario')),
                esCadenaNulo($this->input->post('_vcadena_servicio')),
                esCadenaNulo($this->input->post('_numficha')),
                esNumeroCero($this->input->post('_iidurgencia')),
                esNumeroCero($this->input->post('_iidimpacto')),
                esNumeroCero($this->input->post('_iidprioridad'))
            ); 
            $data  = json_encode($this->Servicio->hp_datoservicio_insert_update($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function grabarjustificacion()//x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idinsidencia',0)),
                esNumeroCero($this->input->post('_opcion',0)),
                esCadenaNulo($this->input->post('_hora','')),
                esCadenaNulo($this->input->post('_observacion',''))
            );
            $data  = json_encode($this->Servicio->justificacion_insert_update($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function grabarevaluacion()//x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idinsidencia',0)),
                esCadenaNulo($this->input->post('_flagprocedimientos','')),
                esCadenaNulo($this->input->post('_flaginterna','')),
                esNumeroCero($this->input->post('_idestado',0)),
                esCadenaNulo($this->input->post('_vcadena_servicio',''))
            );
            $data  = json_encode($this->Servicio->evaluacion_insert_update($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function grabarnoconformidad()//x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idinsidencia',0)),
                esCadenaNulo($this->input->post('_vcadena_servicio',''))
            );
            $data  = json_encode($this->Servicio->noconformidad_insert_update($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function grabarusuario() //x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idusuario',0)),
                esCadenaNulo($this->input->post('_dni','')),
                esCadenaNulo($this->input->post('_nombres','')),
                esCadenaNulo($this->input->post('_apepat','')),
                esCadenaNulo($this->input->post('_apemat','')),
                esCadenaNulo($this->input->post('_iidarea','')),
                esCadenaNulo($this->input->post('_idsubarea','')),
                esCadenaNulo($this->input->post('_ventanilla','')),
                esCadenaNulo($this->input->post('_anexo','')),
                esCadenaNulo($this->input->post('_vusuario',''))
            );
            $data  = json_encode($this->Servicio->hp_usuario_insert_update($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    #@Area GET
    public function index()
	{
        //print_r($this->input->method()); die(); 

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
        if($this->input->method()=='get')
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
    }
    public function mostrarservicios()
	{
        if($this->input->method()=='get')
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
    }
    public function listadoautocompletar()
	{
        if($this->input->method()=='get')
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
    }
    public function listararea()
	{
        if($this->input->method()=='get')
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
    }
    public function listarsubarea()
	{
        if($this->input->method()=='get')
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
    }
    public function listartecnico()
	{
        if($this->input->method()=='get')
        {
            $param = array(
                esCadenaNulo($this->input->get('tbuscar'))
            ); //var_dump($param);die();
            $data  = json_encode($this->Servicio->lista_tecnico($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function listadoincidencias()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_idincidencia')),
                esCadenaNulo($this->input->post('_fecha'))
            ); //var_dump($param); die();
            $data  = json_encode($this->Servicio->listado_insidencias($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }


    public function getlistaestado()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $data  = json_encode($this->Servicio->get_lista_estado());
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function getlistaurgencia()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $data  = json_encode($this->Servicio->get_lista_urgencia());
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function getlistaprioridad()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $data  = json_encode($this->Servicio->get_lista_prioridad());
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function getlistaimpacto()
	{ //echo "asdfa";die();
        if($this->input->method()=='post')
        {
            $data  = json_encode($this->Servicio->get_lista_impacto());
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function getlistatiposervicio()
    {
        if($this->input->method()=='post')
        {
            $data  = json_encode($this->Servicio->get_lista_tiposervicio());
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }

    public function getlistaservicio() //x
	{
        if($this->input->method()=='post')
        {
            $param = array(
                esNumeroCero($this->input->post('_tiposervicio'))
            );
            $data  = json_encode($this->Servicio->get_lista_servicio($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    } 

    public function editarinsidencia()
	{
        if($this->input->method()=='get')
        {
            $param = array(
                esNumeroCero($this->input->get('_idinsidencia',0)),
                esCadenaNulo($this->input->get('_fecha',''))
            );
            $data  = json_encode($this->Servicio->lista_editar($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function insidenciamarcadetalle()
	{
        if($this->input->method()=='get')
        {
            $param = array(
                esNumeroCero($this->input->get('_idinsidencia',0))
            );
            $data  = json_encode($this->Servicio->lista_editar_detalle($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function evaluaciondetalle()
	{
        if($this->input->method()=='get')
        {
            $param = array(
                esNumeroCero($this->input->get('_idinsidencia',0))
            );
            $data  = json_encode($this->Servicio->lista_editar_detalle($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    public function noconformidaddetalle()
	{
        if($this->input->method()=='get')
        {
            $param = array(
                esNumeroCero($this->input->get('_idinsidencia',0))
            );
            $data  = json_encode($this->Servicio->lista_editar_detalle($param));
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(
                    $data
                );
        }
    }
    
    #@Area PUT


}
