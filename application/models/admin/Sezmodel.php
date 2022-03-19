<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sezmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('sez_industry', $data);
    }
    
    function filter_basesd_state($limit, $start, $state){
      $this->db->select("*");
      $this->db->from("sez_industry");
    
      $this->db->where("state LIKE '%$state%'");
      $this->db->order_by("id", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      return $query;
  }
  function fetch_all_data($limit, $start)
  {
      $this->db->select("*");
      $this->db->from("sez_industry");
      
      $this->db->order_by("id", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      return $query;
  }

    public function fetchinventory_api()
    {
      return $this->db->get('sez_industry')->result_array();
    }
    public function fetch_state()
    {
      return $this->db->get('states')->result_array();
    }
    function update_industry($name, $sector,$type,$state,$id,$address,$link){
      
      $data = array(
                     'name' =>$name,
                     'sector' => $sector,
                     'type' => $type,
                     'state' => $state,
                     'id' => $id,
                     'address' => $address,
                     'link' => $link,
                     
                 );
                 
     $this->db->set($data);
     $this->db->where('id',$id);
      $this->db->update('sez_industry');
  }
  
    public function deletecontactdata($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('sez_industry');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
   
}
