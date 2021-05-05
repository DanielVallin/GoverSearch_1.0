<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos_Model extends CI_Model {

    public function getPagos(){
        $this->db->select("p.* ,u.Nombre as Nombre");
        $this->db->select("p.* ,u.Apellidos as Apellidos");
        $this->db->from("tbl_pagos p");
        $this->db->join("tbl_usuarios u","p.Usuario_pk = u.pk_Usuario");
        $this->db->where("p.Estado","1");
        $resultados = $this->db->get();
        return $resultados->result();
    }
    
    public function getPagosbyDate($fechainicio, $fechafin){
        $this->db->select("p.* ,u.Nombre as Nombre");
        $this->db->select("p.* ,u.Apellidos as Apellidos");
        $this->db->from("tbl_pagos p");
        $this->db->join("tbl_usuarios u","p.Usuario_pk = u.pk_Usuario");
        
        $this->db->where("p.Fecha_Pago >=", $fechainicio);
        $this->db->where("p.Fecha_Pago <=", $fechafin);

        $resultados = $this->db->get();
        return $resultados->result();
    }



    public function save($data){
        return $this->db->insert("tbl_pagos",$data);
    }

    public function getPago($pk_Permiso){
		$this->db->where("pk_Permiso",$pk_Permiso);
		$resultado = $this->db->get("tbl_pagos");
		return $resultado->row();
	}

    public function update($pk_Permiso, $data){
        $this->db->where("pk_Permiso", $pk_Permiso);
        return $this->db->update("tbl_pagos", $data);
    }

    public function delete($pk_Permiso){
        $this->db->where("pk_Permiso", $pk_Permiso);
        return $this->db->delete("tbl_pagos");
    }
    

}