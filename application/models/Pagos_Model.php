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

}