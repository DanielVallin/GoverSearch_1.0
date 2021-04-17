<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_Leyes_Model extends CI_Model {

    public function getRegLey(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("tbl_leyes");
        return $resultados->result();
    }

   



}