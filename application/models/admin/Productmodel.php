<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('product', $data);
    }
    
    function create_category($data)
    {
        return  $this->db->insert('product_cate', $data);
    }
    public function fetch_category()
    {
      return $this->db->get('product_cate')->result_array();
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

    public function fetch_profuctssss()
    {
      return $this->db->get('product')->result_array();
    }

    public function delete_category($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('product_cate');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
   
}
