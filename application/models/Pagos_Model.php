<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos_Model extends CI_Model {

    public function getPagos(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("TBL_Pagos");
        return $resultados->result();
    }
    

}