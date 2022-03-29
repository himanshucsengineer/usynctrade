<?php
class Product extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/productmodel');
    }

    public function index()
    {

        $data['product_details']=$this->productmodel->fetch_profuctssss();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/product',$data);
        $this->load->view('frontend/template/footer');
    }
}
