<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_Model extends CI_Model {


    public function getGestiones(){
            $this->db->select("g.* ,l.Nombre_de_Ley as ley");
            $this->db->from("tbl_gestion g");
            $this->db->join("tbl_leyes l","g.Ley_pk  = l.pk_Datos_Ley");
            $this->db->where("g.Estado","1");

            $resultados = $this->db->get();
            return $resultados->result();
    }

    public function getGestion($pk_Gestionid){
            $this->db->select("g.* ,l.Nombre_de_Ley as ley");
            $this->db->from("tbl_gestion g");
            $this->db->join("tbl_leyes l","g.Ley_pk  = l.pk_Datos_Ley");
            $this->db->where("g.pk_Gestionid",$pk_Gestionid);  
            $resultado = $this->db->get();
            return $resultado->row();
            echo '<pre>'; print_r($resultado); echo '</pre>';
    }

    public function save($data){
		return $this->db->insert("tbl_gestion",$data);
	}


    public function update($pk_Gestionid, $data){
        $this->db->where("pk_Gestionid", $pk_Gestionid);
        return $this->db->update("tbl_gestion", $data);
    }

    public function delete($pk_Gestionid){
		$this->db->where("pk_Gestionid",$pk_Gestionid);
		return $this->db->delete("tbl_gestion");
	}

    // ----------------------- METODOS EXTERNOS -------------------------------------------------------

    public function getGrupo_Modelid($pk_Gestionid){
		$this->db->where("pk_Gestionid",$pk_Gestionid);
		$resultado = $this->db->get("tbl_gestion");
		return $resultado->row();
	}

    
    public function getConsultaid($pk_Datos_Ley){
    
        $this->db->select("l.* ,t.Nombre_de_Ley as ley");
        $this->db->from('tbl_ter_clave a','tbl_leyes b', 'tbl_gestion c'); 

        $this->db->where('a.pk_datos_ley','b.pk_datos_ley');
        $this->db->where('c.Ley_pk','b.pk_datos_ley');
        
        $this->db->where("a.pk_Datos_ley",$pk_Datos_Ley);

        $resultados = $this->db->get();
        return $resultados->result();
    
	}










}