<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Tipodocumento extends CI_Model
{
    function __construct() {parent::__construct();}

    function om_gn_tipodoc_visualiza($param){
        $sql = "SELECT * FROM om_helpdesk.sp_tdocumento_lista()";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}