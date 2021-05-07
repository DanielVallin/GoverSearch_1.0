<?php
class Excel_import_model extends CI_Model
{
 function insert($data)
 {
  $this->db->insert_batch('tbl_gestion', $data);
 }
}