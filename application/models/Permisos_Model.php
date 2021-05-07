<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_Model extends CI_Model {

    public function getPermisos(){
        $this->db->select("p.* , r.Nombre_Rol as Rol");
        
        $this->db->from("tbl_permisos p");
        $this->db->join("tbl_roles r","p.rol_pk = r.pk_Rol");
        
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function getMenus(){
        $resultados = $this->db->get("tbl_menus");
        return $resultados->result();
    }

    public function save($data){
        return $this->db->insert("tbl_permisos",$data);
    }

    public function getPermiso($pk_Permiso){
		$this->db->where("pk_Permiso",$pk_Permiso);
		$resultado = $this->db->get("tbl_permisos");
		return $resultado->row();
	}

    public function update($pk_Permiso, $data){
        $this->db->where("pk_Permiso", $pk_Permiso);
        return $this->db->update("tbl_permisos", $data);
    }

    public function delete($pk_Permiso){
        $this->db->where("pk_Permiso", $pk_Permiso);
        return $this->db->delete("tbl_permisos");
    }


}