<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('product', $data);
    }
    
    function filter_basesd_country($limit, $start, $country){
      $this->db->select("*");
      $this->db->from("product");
    
      $this->db->where("origin_place LIKE '%$country%'");
      $this->db->order_by("id", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      return $query;
  }
  function fetch_all_data($limit, $start)
  {
      $this->db->select("*");
      $this->db->from("product");
      
      $this->db->order_by("id", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      return $query;
  }



    
    public function fetch_country()
    {
      return $this->db->get('country_flag')->result_array();
    }

    
   
}
