<?php
class Search extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/joindealmodel');
    }

    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/search',$data);
        $this->load->view('frontend/template/footer');
    }
    public function fetch_product(){
        $product = $this->input->post('product'); 
      
        
     
        $_SESSION['product'] = $product;
        redirect(base_url().'search');
    }
}
