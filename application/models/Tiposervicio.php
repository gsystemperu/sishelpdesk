<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Tiposervicio extends CI_Model
{
    function __construct() {parent::__construct();}

    function om_gn_tiposervicio_visualiza($param){
        $sql = "SELECT * FROM om_helpdesk.sp_listar_tiposervicio()";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}