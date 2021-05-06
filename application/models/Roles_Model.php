<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_Model extends CI_Model {

    public function getRoles(){
        $resultados = $this->db->get("TBL_Roles");
        return $resultados->result();
    }
    
    public function save($data){
        return $this->db->insert("TBL_Roles",$data);
    }

    public function getRol($pk_Rol){
        $this->db->where("pk_Rol",$pk_Rol);
        $resultado = $this->db->get("TBL_Roles");
        return $resultado->row();
    }

    public function update($pk_Rol, $data){
        $this->db->where("pk_Rol",$pk_Rol);
        return $this->db->update("TBL_Roles",$data);
    }

    public function delete($pk_Rol){
        $this->db->where("pk_Rol",$pk_Rol);
        return $this->db->delete("TBL_Roles");
    }

}
