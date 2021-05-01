<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_Model extends CI_Model {

    public function getPermisos(){
        $this->db->select("p.* ,m.nombre as Menu, r.Nombre_Rol as Rol");
        
        $this->db->from("tbl_permisos p");
        $this->db->join("tbl_roles r","p.rol_pk = r.pk_Rol");
        $this->db->join("tbl_menus m","p.menu_pk = m.pk_menu");
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