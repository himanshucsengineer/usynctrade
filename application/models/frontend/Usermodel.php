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

    function update_profile($name,$email,$number,$address,$city,$state,$country,$zip_code,$company_name,$primary_business,$company_details,$establish_year,$gst_no,$company_certification,$role_comapny){
      
        $data = array(
         
          'name' => $name,
          'email' => $email,
          'number' => $number,
          'address' => $address,

          'city' => $city,
          'state' => $state,
          'country' => $country,
          'zip_code' => $zip_code,
          'company_name' => $company_name,
          'primary_business' => $primary_business,
          'company_details' => $company_details,
          'establish_year' => $establish_year,
          'gst_no' => $gst_no,
          'company_certification' => $company_certification,
          'role_comapny' => $role_comapny,
        
        );
                   
       $this->db->set($data);
       $this->db->where('email',$email);
        $this->db->update('user');
    }
}
