<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupo_Leyes_Model extends CI_Model {

    public function getGrupo_Model(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("tbl_gpo_leyes");
        return $resultados->result();
    }

    public function save($data){
		return $this->db->insert("tbl_gpo_leyes",$data);
	}
	
    public function getGrupo_Modelid($pk_Gpo_Ley){
		$this->db->where("pk_Gpo_Ley",$pk_Gpo_Ley);
		$resultado = $this->db->get("tbl_gpo_leyes");
		return $resultado->row();

	}

    public function update($pk_Gpo_Ley, $data){
        $this->db->where("pk_Gpo_Ley",$pk_Gpo_Ley);
        return $this->db->update("tbl_gpo_leyes", $data);
    }

}