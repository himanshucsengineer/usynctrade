<?php
class Add extends CI_controller
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

    
    $data['country']=$this->joindealmodel->fetch_country();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/join_deal/add',$data);
    $this->load->view('admin/template/footer');
  }


  public function add_deal()
  {
      $this->load->model('admin/joindealmodel');
      $this->input->post('formSubmit');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('category', 'sector', 'required');
      $this->form_validation->set_rules('destination_country', 'type', 'required');
      $this->form_validation->set_rules('date', 'state', 'required');
      $this->form_validation->set_rules('target_price', 'address', 'required');
      $this->form_validation->set_rules('quantity', 'link', 'required');
      $this->form_validation->set_rules('payment_terms', 'state', 'required');
      $this->form_validation->set_rules('shipping_terms', 'address', 'required');
      $this->form_validation->set_rules('description', 'link', 'required');
      
      if ($this->form_validation->run()) {

        if (!empty($_FILES['images']['name'])) {

          $File_name ='';

          $config['upload_path'] = APPPATH . '../upload/join_deal';
          $config['file_name'] = $File_name;
          $config['overwrite'] = TRUE;
          $config["allowed_types"] = 'png|jpg|jpeg';
          $config["max_size"] = '6144';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('images')) {

              $this->data['error'] = $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());

              redirect(base_url().'admin/join_deal/add');
          } else {
              $dataimage_return = $this->upload->data();
              $imageurl = $dataimage_return['file_name'];
          }
      }

      
              $data = array(
                  'name' =>$this->input->post('name'),
                  'category' =>$this->input->post('category'),
                  'destination_country' => $this->input->post('destination_country'),
                  'date' =>$this->input->post('date'),
                  'target_price' =>$this->input->post('target_price'),
                  'quantity' =>$this->input->post('quantity'),
                  'payment_terms' =>$this->input->post('payment_terms'),
                  'shipping_terms' =>$this->input->post('shipping_terms'),
                  'description' =>$this->input->post('description'),
                  'status' => 1,
                  'image' => $imageurl,
              );
              if ($this->joindealmodel->insert_data($data)) {

                  $this->session->set_flashdata('success', 'Deal added Successfully Submited');
                  redirect(base_url() . 'admin/join_deal/add');
              } else {
  
                  $this->session->set_flashdata('error', 'Error In Submission');
                  redirect(base_url() . 'admin/join_deal/add');
              }
          
      } else {
          $this->session->set_flashdata('error', 'Please Fill All The Fields');
          redirect(base_url() . 'admin/join_deal/add');
      }
  }


 


 
}
