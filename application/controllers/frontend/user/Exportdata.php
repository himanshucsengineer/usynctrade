<?php
class Exportdata extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['email'])){
            redirect(base_url().'signin');
        }
        $this->load->model('frontend/exportmodel');
    }
    public function index()
    {
        
       
      
        $data['fetch_data']=$this->exportmodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
       // $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/exportdata',$data);
        //$this->load->view('frontend/template/footer');
    }
}
