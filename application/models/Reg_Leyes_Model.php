<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_Leyes_Model extends CI_Model {

    public function getRegLey(){
        $this->db->select("l.* ,g.Nombre_de_Grupo as grupos");

        $this->db->from("tbl_leyes l");

        $this->db->join("tbl_gpo_leyes g","l.Grupo_pk = g.pk_Gpo_Ley");

        $this->db->where("l.Estado","1");

        $resultados = $this->db->get();

        return $resultados->result();

    }

    public function save($data){
        return $this->db->insert("tbl_leyes", $data);
    }


}