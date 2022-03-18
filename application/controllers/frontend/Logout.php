<?php
    class Logout extends CI_controller{
        public function __construct()
    {
        parent::__construct();
       
    }

        public function index(){
            session_destroy();
            unset($_SESSION["email"]);
         
            unset($_SESSION["name"]);
            unset($_SESSION["number"]);
       
            
            redirect(base_url());
       }
 }

?>  