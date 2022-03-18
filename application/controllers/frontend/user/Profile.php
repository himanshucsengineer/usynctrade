<?php
class Profile extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['email'])){
            redirect(base_url().'signin');
        }
        $this->load->model('frontend/Usermodel');
    }
    public function index()
    {
        
       
      
        $data['user'] = $this->Usermodel->fetchModeldata();
        $this->load->view('frontend/template/header');
       // $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/profile',$data);
        //$this->load->view('frontend/template/footer');
    }
}
