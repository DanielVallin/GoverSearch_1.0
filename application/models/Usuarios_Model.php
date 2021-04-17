<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {

public function login($Usuario, $Contrasena){
    $this->db->where("Usuario", $Usuario);
    $this->db->where("Contrasena", $Contrasena);
    

    $resultados = $this->db->get("TBL_Usuarios");
    if ($resultados->num_rows() > 0) {
        return $resultados->row();
    }
    else{
        return false;
    }
}
}
