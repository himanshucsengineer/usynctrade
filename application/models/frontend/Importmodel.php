<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('import', $data);
    }
    function fetchModeldata()
    {
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('countries');
        $response = $q->result_array();
        return $response;
    }
    public function fetchinventory_api()
    {
      return $this->db->get('import')->result_array();
    }
  
  
  
    public function deletecontactdata($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('import');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
   
}
