<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    function insert_data($data)
    {
        return  $this->db->insert('user', $data);
    }
    function fetchModeldata()
    {
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('user');
        $response = $q->result_array();
        return $response;
    }

    function update_profile($name, $email, $number,$address){
      
        $data = array(
         
          'name' => $name,
          'email' => $email,
          'number' => $number,
          'address' => $address,
        );
                   
       $this->db->set($data);
       $this->db->where('email',$email);
        $this->db->update('user');
    }
}
