<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador_Model extends CI_Model {

    public function getConsulta($pk_Gestionid){
        $this->db->select("c.* ,u.Nombre as Nombre");
        $this->db->select("c.* ,u.Apellidos as Apellidos");

        $this->db->from("tbl_leyes l");
        $this->db->from("tbl_gestion g");

        $this->db->join("tbl_ter_clave t","c.Usuario_pk = u.pk_Usuario");


        
        $resultados = $this->db->get();
        return $resultados->result();
    }


}