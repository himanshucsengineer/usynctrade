<?php
class Add extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/sezmodel');
  }

  public function index()
  { 

    
    $data['state']=$this->sezmodel->fetch_state();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/sez/add',$data);
    $this->load->view('admin/template/footer');
  }


  public function add_industry()
  {
      $this->load->model('admin/sezmodel');
      $this->input->post('formSubmit');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('sector', 'sector', 'required');
      $this->form_validation->set_rules('type', 'type', 'required');
      $this->form_validation->set_rules('state', 'state', 'required');
      $this->form_validation->set_rules('address', 'address', 'required');
      $this->form_validation->set_rules('link', 'link', 'required');
      
      
      if ($this->form_validation->run()) {
      
              $data = array(
                  'name' =>$this->input->post('name'),
                  'sector' =>$this->input->post('sector'),
                  'type' => $this->input->post('type'),
                  'state' =>$this->input->post('state'),
                  'address' =>$this->input->post('address'),
                  'link' =>$this->input->post('link'),
                 
                  
              );
              if ($this->sezmodel->insert_data($data)) {

                  $this->session->set_flashdata('success', 'Industry added Successfully Submited');
                  redirect(base_url() . 'admin/sez/add');
              } else {
  
                  $this->session->set_flashdata('error', 'Error In Submission');
                  redirect(base_url() . 'admin/sez/add');
              }
          
      } else {
          $this->session->set_flashdata('error', 'Please Fill All The Fields');
          redirect(base_url() . 'admin/sez/add');
      }
  }


 


 
}
