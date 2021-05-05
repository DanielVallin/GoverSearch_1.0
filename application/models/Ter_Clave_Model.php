<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ter_Clave_Model extends CI_Model {

    public function getTermino(){
        $this->db->select("t.* ,c.Termino_Clave as termino");
        $this->db->select("t.* ,l.Nombre_de_Ley as ley");

        $this->db->from("tbl_ter_clave t");
        
        $this->db->order_by ("pk_Datos_ley", "asc");
        $this->db->join("tbl_claves c", "t.Termino_Clave_pk = c.pk_Ter_Clave");
        $this->db->join("tbl_leyes l", "t.Ley_pk = l.pk_Datos_Ley");
        
        $resultados = $this->db->get();
        return $resultados->result();
    }
    
    public function getTerminobyClave($clave){
        $this->db->select("t.* ,c.Termino_Clave as termino");
        $this->db->select("t.* ,l.Nombre_de_Ley as ley");

        $this->db->from("tbl_ter_clave t");
        
        $this->db->order_by ("pk_Datos_ley", "asc");
        $this->db->join("tbl_claves c", "t.Termino_Clave_pk = c.pk_Ter_Clave");
        $this->db->join("tbl_leyes l", "t.Ley_pk = l.pk_Datos_Ley");
        
        $this->db->where("t.Estado","1");
        $this->db->like("c.Termino_Clave ", $clave);
        
        $resultados = $this->db->get();
        return $resultados->result();
    }


    public function save($data){
        return $this->db->insert("tbl_ter_clave",$data);
    }

    public function getTerminoid($pk_Datos_ley){
        $this->db->select("t.* ,c.Termino_Clave as termino");
        $this->db->select("t.* ,l.Nombre_de_Ley as ley");

        $this->db->from("tbl_ter_clave t");
        
        $this->db->join("tbl_claves c", "t.Termino_Clave_pk = c.pk_Ter_Clave");
        $this->db->join("tbl_leyes l", "t.Ley_pk = l.pk_Datos_Ley");

        $this->db->where("t.pk_Datos_ley",$pk_Datos_ley);
		$resultado = $this->db->get("tbl_ter_clave");
		return $resultado->row();
    }

    public function update($pk_Datos_ley, $data){
        $this->db->where("pk_Datos_ley", $pk_Datos_ley);
        return $this->db->update("tbl_ter_clave", $data);
    }


    public function deleteSelectEmp($checked_id){
        
        $this->db->where_in("pk_Datos_ley", $checked_id);
        return $this->db->delete("tbl_ter_clave");
    }

    public function pdfSelectEmp($checked_id){
        $this->db->select("t.* ,c.Termino_Clave as termino");
        $this->db->select("t.* ,l.Nombre_de_Ley as ley");

        $this->db->from("tbl_ter_clave t");
        
        $this->db->order_by ("t.pk_Datos_ley", "asc");
        $this->db->join("tbl_claves c", "t.Termino_Clave_pk = c.pk_Ter_Clave");
        $this->db->join("tbl_leyes l", "t.Ley_pk = l.pk_Datos_Ley");
        
        $this->db->where_in("t.pk_Datos_ley", $checked_id);

        $resultado = $this->db->get("tbl_ter_clave");
		return $resultado->row();
    }

}