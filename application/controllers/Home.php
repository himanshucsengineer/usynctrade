<?php
class Home extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/joindealmodel');
    }

    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $data['join_deal']=$this->joindealmodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/template/footer');
    }
}
