<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Itrademodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('itrade', $data);
    }
    
    public function fetch_country()
    {
      return $this->db->get('country_flag')->result_array();
    }
    public function fetchinventory_api()
    {
      return $this->db->get('itrade')->result_array();
    }

    function filter_basesd_destination($limit, $start, $destination){
    $this->db->select("*");
    $this->db->from("itrade");
  
    $this->db->where("destination_country LIKE '%$destination%'");
    $this->db->order_by("id", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query;
}


function filter_basesd_source($limit, $start, $source){
  $this->db->select("*");
  $this->db->from("itrade");

  $this->db->where("source_country LIKE '%$source%'");
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
}


function filter_basesd_name($limit, $start, $name){
  $this->db->select("*");
  $this->db->from("itrade");

  $this->db->where("name LIKE '%$name%'");
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
}



function filter_basesd_on_all($limit, $start, $name,$source,$destination){
  $array = array('source_country' => $source, 'name' => $name, 'destination_country'=>$destination);
  $this->db->select("*");
  $this->db->from("itrade");

  $this->db->like($array);
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
  
}
    
public function deleteitradeupdate($data)
{
  $explodData = explode(',', $data);
  $this->db->where_in('id', $explodData);
  $getDeleteStatus = $this->db->delete('itrade');
  if ($getDeleteStatus == 1) {
    return array('message' => 'yes');
  } else {
    return array('message' => 'no');
  }
}
   
}
