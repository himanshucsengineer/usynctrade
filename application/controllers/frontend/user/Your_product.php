<?php
class Your_product extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['email'])){
            redirect(base_url().'signin');
        }
        $this->load->model('admin/joindealmodel');
        $this->load->model('admin/productmodel');
    }
    public function index()
    {
        
       
        $data['product_details']=$this->productmodel->fetch_profuctssss();
        $data['country']=$this->joindealmodel->fetch_country();
        $this->load->view('frontend/template/header');
       // $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/your_product',$data);
        //$this->load->view('frontend/template/footer');
    }
}
