<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function getUsuarios(){
        $this->db->select("u.* ,r.Nombre_Rol as rol");
        
        $this->db->from("tbl_usuarios u");

        $this->db->join("tbl_roles r","u.User_Rol_pk = r.pk_Rol");
        
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function save($data){
        return $this->db->insert("tbl_usuarios",$data);
    }
    
    public function getUsuario($pk_Usuario){
        $this->db->where("pk_Usuario",$pk_Usuario);
        $resultado = $this->db->get("tbl_usuarios");
        return $resultado->row();
    }


    public function update($pk_Usuario,$data){
		$this->db->where("pk_Usuario",$pk_Usuario);
		return $this->db->update("tbl_usuarios",$data);
	}

    public function delete($pk_Usuario){
		$this->db->where("pk_Usuario",$pk_Usuario);
		return $this->db->delete("tbl_usuarios");
	}
    
}

