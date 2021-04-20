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

    public function getClaveid($pk_Datos_Ley){
		$this->db->where("pk_Datos_Ley",$pk_Datos_Ley);
		$resultado = $this->db->get("tbl_leyes");
		return $resultado->row();
	}

    public function update($pk_Datos_Ley, $data){
        $this->db->where("pk_Datos_Ley", $pk_Datos_Ley);
        return $this->db->update("tbl_leyes", $data);
    }


}