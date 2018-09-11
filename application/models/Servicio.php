<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Servicio extends CI_Model
{
    function __construct() {parent::__construct();}

    function lista_servicio($param){
        $sql = "SELECT * FROM om_helpdesk.sp_servicio_lista(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_tipo_servicio($param){
        $sql = "SELECT * FROM om_helpdesk.sp_tiposervicio_lista()";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function om_fichausuario_autocompletar_visualiza($param){
        $sql = "SELECT * FROM om_helpdesk.om_fichausuario_autocompletar_visualiza(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_area($param){
        $sql = "SELECT * FROM om_helpdesk.sp_lista_areas(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_subarea($param){
        $sql = "SELECT * FROM om_helpdesk.sp_lista_subareas(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_tecnico($param){
        $sql = "SELECT * FROM om_helpdesk.sp_tecnico_lista(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function listado_insidencias($param){
        $sql = "SELECT * FROM om_helpdesk.om_listado_insidenias(?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_editar($param){
        $sql = "SELECT * FROM om_helpdesk.om_listado_insidenias(?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function lista_editar_detalle($param){
        $sql = "SELECT * FROM om_helpdesk.om_listado_insidenias_detalle(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function cerrar_insidencia($param){
        $sql = "SELECT * FROM om_helpdesk.om_actualizar_estado(?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function cancelar_insidencia($param){
        $sql = "SELECT * FROM om_helpdesk.om_actualizar_estado(?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function hp_datoservicio_insert_update($param){
        $sql = "SELECT * FROM om_helpdesk.om_actualizar_estado(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function justificacion_insert_update($param){
        $sql = "SELECT * FROM om_helpdesk.om_justificar_hora(?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function evaluacion_insert_update($param){
        $sql = "SELECT * FROM om_helpdesk.om_evaluacion_insert(?,?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function noconformidad_insert_update($param){
        $sql = "SELECT * FROM om_helpdesk.om_conformidad_insert(?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    function hp_usuario_insert_update($param){
        $sql = "SELECT * FROM om_helpdesk.om_usuario_insert_update(?,?,?,?,?,?,?,?,?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}