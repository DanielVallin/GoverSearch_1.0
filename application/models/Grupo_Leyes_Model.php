<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupo_Leyes_Model extends CI_Model {

    public function getGrupo_Model(){
        $resultados = $this->db->get("tbl_gpo_leyes");
        return $resultados->result();
    }

    public function getRegLey($pk_Gpo_Ley){
        $this->db->select("l.* ,g.Nombre_de_Grupo as grupos");
        $this->db->from("tbl_leyes l");
        $this->db->join("tbl_gpo_leyes g","l.Grupo_pk = g.pk_Gpo_Ley");
        $this->db->where("g.pk_Gpo_Ley", $pk_Gpo_Ley);
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function getRegLeyGrupo($pk_Gpo_Ley){
        $this->db->select("l.* ,g.Nombre_de_Grupo as grupos");
        $this->db->from("tbl_leyes l");
        $this->db->join("tbl_gpo_leyes g","l.Grupo_pk = g.pk_Gpo_Ley");
        $this->db->where("Grupo_pk ",$pk_Gpo_Ley);
        $resultados = $this->db->get();
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
        $this->db->where("pk_Gpo_Ley", $pk_Gpo_Ley);
        return $this->db->update("tbl_gpo_leyes", $data);
    }

}