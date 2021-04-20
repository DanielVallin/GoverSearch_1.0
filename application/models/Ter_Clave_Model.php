<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ter_Clave_Model extends CI_Model {

    public function getTermino(){
        $this->db->select("t.* ,c.Termino_Clave as termino");
        $this->db->select("t.* ,l.Nombre_de_Ley as ley");
        $this->db->from("tbl_ter_clave t");
        $this->db->join("tbl_claves c", "t.Termino_Clave_pk = c.pk_Ter_Clave");
        $this->db->join("tbl_leyes l", "t.Ley_pk = l.pk_Datos_Ley");
        $this->db->where("t.Estado","1");
        $resultados = $this->db->get();
        return $resultados->result();
    }
    
    
    public function save($data){
        return $this->db->insert("tbl_ter_clave",$data);
    }

}