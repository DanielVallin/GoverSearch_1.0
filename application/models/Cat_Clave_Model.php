<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat_Clave_Model extends CI_Model {

    public function getClave(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("tbl_cat");
        return $resultados->result();
    }

    



}