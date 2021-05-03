<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {

    public function getID($link){
        $this->db->like("link", $link);
        $resultado = $this->db->get("tbl_menus");
        return $resultado->row();
    }

    public function getPermisos($menu,$rol){
        $this->db->where("menu_pk", $menu);
        $this->db->where("rol_pk", $rol);
        $resultado = $this->db->get("tbl_permisos");
        return $resultado->row();
    }
}