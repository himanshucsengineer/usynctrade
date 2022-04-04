<?php
class Trade_inqury extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['email'])){
            redirect(base_url().'signin');
        }
        $this->load->model('admin/productmodel');
    }
    public function index()
    {
        
       
      
        $data['fetch_data']=$this->productmodel->fetch_trade_inquery();
        $this->load->view('frontend/template/header');
       // $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/trade_inqury',$data);
        //$this->load->view('frontend/template/footer');
    }
}
