<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Cliente extends CI_Model
{
    function __construct() {parent::__construct();}

    function grabar_cliente($param){ 
        $sql = "SELECT * FROM om_helpdesk.om_cliente_insert_update(?,?,?,?,?,?,?,?,?)"; //var_dump($param); die();
        $resultado = $this->db->query($sql,$param);  //echo $this->db->last_query(); die();
        $data['data'] = $resultado->result();
        return $data;
    }

  
    
    public function om_fichacliente_autocompletar_visualiza( $param )
	{
        $sql = "SELECT * FROM om_helpdesk.om_fichacliente_autocompletar_visualiza(?)"; //var_dump($param); die();
        $resultado = $this->db->query($sql,$param);  //echo $this->db->last_query(); die();
        $data['data'] = $resultado->result();
        return $data;

	}


}