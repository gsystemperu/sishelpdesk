<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class Loginmodel extends CI_Model
{
    function __construct() {parent::__construct();}

    public function login($usuario, $password){
        $parametros = esCadenaNulo($usuario);
        $sql = "SELECT * FROM om_helpdesk.sp_listar_usuario_porusername(?)";
        $consulta = $this->db->query($sql,$parametros);
        $data = array();
        if ($consulta->num_rows()!=0){
            $hashpass = md5($password);
            foreach ($consulta->result() as $row)
            {
                     if($hashpass == $row->clave){
                        $data = array( 'code' =>  200,
                                   'uid' => $row->idusuario,
                                   'usuario' => $row->usuario,
                                   'nombres' => $row->nombres,
                                   'apepater' => $row->apepat,
                                   'apemater' => $row->apemat
                        );
                        return $data;
                    } 
            }  
            
            $data = array( 'code' =>  -2 ,
            'message' => 'La contraseña es incorrecta');
            return $data;
        } else { 
            $data = array( 'code' =>  -1 ,
                      'message' => 'Usuario no registrado' 
                    );
            return $data;
        }
    } 


}