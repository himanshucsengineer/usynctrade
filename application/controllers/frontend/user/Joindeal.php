<?php
class Joindeal extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['email'])){
            redirect(base_url().'signin');
        }
        $this->load->model('admin/joindealmodel');
    }
    public function index()
    {
        
       
      
        $data['fetch_data']=$this->joindealmodel->fetch_join_deal_query();
        $this->load->view('frontend/template/header');
       // $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/joindeal',$data);
        //$this->load->view('frontend/template/footer');
    }
}
