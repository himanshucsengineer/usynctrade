<?php
class Edit extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('admin/login');
    }
    $this->load->model('admin/Sezmodel');
  }

  public function index()
  {

    $data['state']=$this->Sezmodel->fetch_state();
    $data['fetch_content']=$this->Sezmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/sez/edit',$data);
    $this->load->view('admin/template/footer');
  }

  public function update()
  {
    $this->load->model('admin/Sezmodel');
    $this->input->post('formSubmit');

    $name = $this->input->post('name');
    $sector = $this->input->post('sector');
    $type = $this->input->post('type');
    $state = $this->input->post('state');
    $id = $this->input->post('id');
    $address = $this->input->post('address');
    $link = $this->input->post('link');
    
    if ($this->Sezmodel->update_industry($name, $sector,$type,$state,$id,$address,$link)) {
      $this->session->set_flashdata('success', 'Technical error');
      redirect(base_url() . 'admin/sez/view');
    } else {
      $this->session->set_flashdata('success', 'Updated Successfully');
      redirect(base_url() . 'admin/sez/view');
    }
      
  }



 


 
}
