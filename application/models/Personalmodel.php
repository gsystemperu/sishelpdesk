<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Personalmodel extends CI_Model
{
    function __construct() {parent::__construct();}

    function grabar_tipo_usuario($param){
        $sql = "SELECT * FROM om_helpdesk.om_tipousuario_insert_update(?,?,?,?,?,?,?,?,?)"; //echo $sql; die();
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }
    
    function listado_tipousuario($param){
        $sql = "SELECT * FROM om_helpdesk.om_lista_tipo_usuario(?)"; //echo $sql; die();
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

    function eliminar_tipousuario($param){
        $sql = "SELECT * FROM om_helpdesk.sp_eliminar_tipousuario(?)"; //echo $sql; die();
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}