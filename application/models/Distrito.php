<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Distrito extends CI_Model
{
    function __construct() {parent::__construct();}

    function lista_servicio($param){
        $sql = "SELECT * FROM om_helpdesk.sp_servicio_lista(?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}