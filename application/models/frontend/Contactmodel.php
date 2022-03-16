<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactmodel extends CI_Model
{
    function insert_data($name, $email, $number,$sub, $msg)
    {
        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'subject' => $sub,
            'msg' => $msg
        );
        return  $this->db->insert('contact', $data);
    }
}
