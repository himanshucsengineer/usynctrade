<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Exportmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('export', $data);
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
      return $this->db->get('export')->result_array();
    }
  
  
  
    public function deletecontactdata($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('export');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
   
}
