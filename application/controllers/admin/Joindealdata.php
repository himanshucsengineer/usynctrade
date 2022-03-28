<?php
class Joindealdata extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/joindealmodel');
    $this->load->model('admin/Usermodel');
  }

  public function index()
  {

    $data['user']=$this->Usermodel->fetchinventory_api();
    $data['list']=$this->joindealmodel->fetch_join_deal_query();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/joindealdata',$data);
    $this->load->view('admin/template/footer');
  }





 


  public function deletecontactdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->joindealmodel->deletejaindealdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Data deleted successfully');
          redirect(base_url() . "admin/joindealdata");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/joindealdata");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/joindealdata");
      }
    }
  }
}
