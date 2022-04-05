<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('product', $data);
    }
    function fetch_product()
    {
      return $this->db->get('product')->result_array();
    }

    function insert_trade_inquery($data)
    {
        return  $this->db->insert('trade_inquery', $data);
    }
    public function fetch_trade_inquery()
    {
      return $this->db->get('trade_inquery')->result_array();
    }
    function create_category($data)
    {
        return  $this->db->insert('product_cate', $data);
    }
    public function fetch_category()
    {
      return $this->db->get('product_cate')->result_array();
    }

    public function fetch_users()
    {
      return $this->db->get('user')->result_array();
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
  function filter_basesd_product($limit, $start, $product){
    $this->db->select("*");
    $this->db->from("product");
  
    $this->db->where("name LIKE '%$product%'");
    $this->db->order_by("id", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query;
}
function filter_basesd_on_both($limit, $start, $country,$product){
  $array = array('origin_place' => $country, 'name' => $product);
  $this->db->select("*");
  $this->db->from("product");

  $this->db->like($array);
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
   



    public function delete_trade_inquery_data($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('trade_inquery');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }

    public function delete_product($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('product');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
}
