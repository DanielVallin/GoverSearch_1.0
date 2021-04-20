<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Claves_Model extends CI_Model {

    public function getClave(){
        $this->db->select("c.* ,u.Nombre as Nombre");
        $this->db->select("c.* ,u.Apellidos as Apellidos");
        $this->db->from("tbl_claves c");
        $this->db->join("tbl_usuarios u","c.Usuario_pk = u.pk_Usuario");
        $this->db->where("c.Estado","1");
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function save($data){
        return $this->db->insert("tbl_claves",$data);
    }

    public function getClaveid($pk_Ter_Clave){
		$this->db->where("pk_Ter_Clave",$pk_Ter_Clave);
		$resultado = $this->db->get("tbl_claves");
		return $resultado->row();
	}

    public function update($pk_Ter_Clave, $data){
        $this->db->where("pk_Ter_Clave", $pk_Ter_Clave);
        return $this->db->update("tbl_claves", $data);
    }


}