<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function getUsuarios(){
        $this->db->select("u.* ,r.Nombre_Rol as rol");

        $this->db->from("tbl_usuarios u");

        $this->db->join("tbl_roles r","u.User_Rol_pk = r.pk_Rol");

        $this->db->where("u.Estado","1");
        
        $resultados = $this->db->get();
        
        return $resultados->result();

    }

    public function save($data){
        return $this->db->insert("TBL_Usuarios",$data);
    }
    public function getCategoria($id){
        $this->db->where("id",$id);
        $resultado = $this->db->get("categorias");
        return $resultado->row();
    }

}

