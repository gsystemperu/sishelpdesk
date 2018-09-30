<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Appmodel extends CI_Model
{
    function __construct() {parent::__construct();}

    function menu_collapse($param){
        $sql = "SELECT * FROM om_helpdesk.om_actualizar_menucollapse(?,?)";
        $resultado = $this->db->query($sql,$param);
        $data['data'] = $resultado->result();
        return $data;
    }

}