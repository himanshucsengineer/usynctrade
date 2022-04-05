<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Joindealmodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('join_deal', $data);
    }
    

    function join_deal_query($data)
    {
        return  $this->db->insert('join_deal_query', $data);
    }
    function fetch_join_deal_query()
    {
      return $this->db->get('join_deal_query')->result_array();
    }

    public function fetch_country()
    {
      return $this->db->get('country_flag')->result_array();
    }

    public function fetchinventory_api()
    {
      return $this->db->get('join_deal')->result_array();
    }
    
    function update_status($status, $id){
      
      $data = array(
                     'status' =>$status,
                     
                     'id' => $id,
                     
                     
                 );
                 
     $this->db->set($data);
     $this->db->where('id',$id);
      $this->db->update('join_deal');
  }


  function update_joindeal($name, $category,$destination_country,$date,$id,$target_price,$quantity,$payment_terms,$shipping_terms,$imageurl,$description){
      
    $data = array(
      'name' =>$name,
      'category' => $category,
      'destination_country' =>$destination_country,
      'date' => $date,
      'id' =>$id,
      'target_price' => $target_price,
      'quantity' =>$quantity,
      'payment_terms' => $payment_terms,
      'shipping_terms' =>$shipping_terms,
      'imageurl' => $imageurl,
      'description' =>$description,
     
    );
    $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->update('join_deal');
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
    public function deletejaindealdata($data)
    {
      $explodData = explode(',', $data);
      $this->db->where_in('id', $explodData);
      $getDeleteStatus = $this->db->delete('join_deal_query');
      if ($getDeleteStatus == 1) {
        return array('message' => 'yes');
      } else {
        return array('message' => 'no');
      }
    }
   
}
