<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ter_Clave_Model extends CI_Model {

    public function getTermino(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("tbl_ter_clave");
        return $resultados->result();
    }

    

}