<?php
class View extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/joindealmodel');
  } 

  public function index()
  {


    $data['list']=$this->joindealmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/join_deal/view',$data);
    $this->load->view('admin/template/footer');
  }

  public function update_status()
  {
    $this->load->model('admin/joindealmodel');
    $this->input->post('formSubmit');

    $status = $this->input->post('action');

    $id = $this->input->post('id');
   
    
    if ($this->joindealmodel->update_status($status, $id)) {
      $this->session->set_flashdata('success', 'Technical error');
      redirect(base_url() . 'admin/join_deal/view');
    } else {
      $this->session->set_flashdata('success', 'status Updated Successfully');
      redirect(base_url() . 'admin/join_deal/view');
    }
      
  }

  public function deletecontactdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->joindealmodel->deletecontactdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Deal deleted successfully');
          redirect(base_url() . "admin/join_deal/view");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/join_deal/view");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/join_deal/view");
      }
    }
  }

 


 
}
