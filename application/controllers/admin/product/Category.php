<?php
class Category extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/productmodel');
  }

  public function index()
  { 

    
    $data['fetch_category']=$this->productmodel->fetch_category();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/product/category',$data);
    $this->load->view('admin/template/footer');
  }


  public function create_cate()
  {
      $this->load->model('admin/productmodel');
      $this->input->post('formSubmit');

      $this->form_validation->set_rules('cate_name', 'Name', 'required');
      
     
      if ($this->form_validation->run()) {
        
        

      
              $data = array(
                  'cate_name' =>$this->input->post('cate_name'),
                 
                  
                  
              );
              if ($this->productmodel->create_category($data)) {

                  $this->session->set_flashdata('success', 'Category added Successfully Submited');
                  redirect(base_url() . 'admin/product/category');
              } else {
  
                  $this->session->set_flashdata('error', 'Error In Submission');
                  redirect(base_url() . 'admin/product/category');
              }
          
      } else {
          $this->session->set_flashdata('error', 'Please Fill All The Fields');
          redirect(base_url() . 'admin/product/category');
      }
  }


  public function deletecontactdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->productmodel->delete_category($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'category deleted successfully');
          redirect(base_url() . "admin/product/category");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/product/category");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/product/category");
      }
    }
  }


 
}
