<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function getUsuarios(){
        $this->db->where("Estado","1");
        $resultados = $this->db->get("TBL_Usuarios");
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

