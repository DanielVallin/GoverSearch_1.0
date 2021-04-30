<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_Model extends CI_Model {


    public function getGestiones(){
            $this->db->where("Estado","1");
            $resultados = $this->db->get("tbl_gestion");
            return $resultados->result();
    }

    public function save($data){
		return $this->db->insert("tbl_gestion",$data);
	}
	
    public function getGrupo_Modelid($pk_Gestionid){
		$this->db->where("pk_Gestionid",$pk_Gestionid);
		$resultado = $this->db->get("tbl_gestion");
		return $resultado->row();

	}

    public function update($pk_Gestionid, $data){
        $this->db->where("pk_Gestionid", $pk_Gestionid);
        return $this->db->update("tbl_gestion", $data);
    }

}