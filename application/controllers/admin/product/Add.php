<?php
class Add extends CI_controller
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
    $data['fetch_users']=$this->productmodel->fetch_users();
    $data['fetch_category']=$this->productmodel->fetch_category();
    $data['country']=$this->productmodel->fetch_country();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/product/add',$data);
    $this->load->view('admin/template/footer');
  }


  public function add_product()
  {
      $this->load->model('admin/productmodel');
      $this->input->post('formSubmit');

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('product_size', 'product size', 'required');
      $this->form_validation->set_rules('dispetch_time', 'dispetch time', 'required');
      $this->form_validation->set_rules('moq', 'state', 'required');
      $this->form_validation->set_rules('shipment_port', 'shipment_port', 'required');
      $this->form_validation->set_rules('payment_terms', 'link', 'required');
      $this->form_validation->set_rules('fob_price', 'state', 'required');
      $this->form_validation->set_rules('cif_price', 'address', 'required');
      $this->form_validation->set_rules('cfr_price', 'link', 'required');

      $this->form_validation->set_rules('dap_price', 'Name', 'required');
      $this->form_validation->set_rules('brand_name', 'product size', 'required');
      $this->form_validation->set_rules('origin_place', 'dispetch time', 'required');
      $this->form_validation->set_rules('category', 'state', 'required');
      $this->form_validation->set_rules('certificates', 'shipment_port', 'required');
      $this->form_validation->set_rules('buyer_from', 'link', 'required');
      $this->form_validation->set_rules('transaction', 'state', 'required');
      $this->form_validation->set_rules('selling_units', 'address', 'required');
      $this->form_validation->set_rules('single_gross_weight', 'link', 'required');
     
      $this->form_validation->set_rules('single_package_size', 'Name', 'required');
      $this->form_validation->set_rules('single_package_type', 'product size', 'required');
      $this->form_validation->set_rules('product_desc', 'dispetch time', 'required');
      $this->form_validation->set_rules('comapny_name', 'state', 'required');
      $this->form_validation->set_rules('company_country', 'shipment_port', 'required');
      $this->form_validation->set_rules('business_type', 'link', 'required');
      $this->form_validation->set_rules('stablished_year', 'state', 'required');
      $this->form_validation->set_rules('main_product', 'address', 'required');
      $this->form_validation->set_rules('factory_size', 'link', 'required');
      
      $this->form_validation->set_rules('no_of_office', 'Name', 'required');
      $this->form_validation->set_rules('comapny_certificates', 'product size', 'required');
      $this->form_validation->set_rules('total_employee', 'dispetch time', 'required');
      $this->form_validation->set_rules('response_time', 'state', 'required');
      $this->form_validation->set_rules('membership', 'shipment_port', 'required');
      $this->form_validation->set_rules('annual_revenue', 'link', 'required');
      $this->form_validation->set_rules('contract_services', 'state', 'required');
    

      $this->form_validation->set_rules('user_email', 'Name', 'required');
      $this->form_validation->set_rules('shipment_country', 'product size', 'required');
      $this->form_validation->set_rules('buyer_from2', 'dispetch time', 'required');
      $this->form_validation->set_rules('buyer_from3', 'state', 'required');
      $this->form_validation->set_rules('buyer_from4', 'shipment_port', 'required');
      
     
      if ($this->form_validation->run()) {
        if (!empty($_FILES['images']['name'])) {

          $File_name ='';

          $config['upload_path'] = APPPATH . '../upload/product';
          $config['file_name'] = $File_name;
          $config['overwrite'] = TRUE;
          $config["allowed_types"] = 'png|jpg|jpeg';
          $config["max_size"] = '6144';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('images')) {

              $this->data['error'] = $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());

              redirect(base_url().'admin/product/add');
          } else {
              $dataimage_return = $this->upload->data();
              $imageurl = $dataimage_return['file_name'];
          }
      }
        

      
              $data = array(
                  'name' =>$this->input->post('name'),
                  'product_size' =>$this->input->post('product_size'),
                  'dispetch_time' => $this->input->post('dispetch_time'),
                  'moq' =>$this->input->post('moq'),
                  'shipment_port' =>$this->input->post('shipment_port'),
                  'main_image' => $imageurl,
                  'payment_terms' =>$this->input->post('payment_terms'),
                  
                  'fob_price' =>$this->input->post('fob_price'),

                  'cif_price' =>$this->input->post('cif_price'),
                  'cfr_price' =>$this->input->post('cfr_price'),
                  'dap_price' => $this->input->post('dap_price'),
                  'brand_name' =>$this->input->post('brand_name'),
                  'origin_place' =>$this->input->post('origin_place'),
                  'category' =>$this->input->post('category'),
                  'certificates' =>$this->input->post('certificates'),
                  'buyer_from' =>$this->input->post('buyer_from'),
                  'transaction' =>$this->input->post('transaction'),

                  'selling_units' =>$this->input->post('selling_units'),
                  'single_gross_weight' =>$this->input->post('single_gross_weight'),
                  'single_package_size' => $this->input->post('single_package_size'),
                  'single_package_type' =>$this->input->post('single_package_type'),
                  'product_desc' =>$this->input->post('product_desc'),
                  'comapny_name' =>$this->input->post('comapny_name'),
                  'company_country' =>$this->input->post('company_country'),
                  'business_type' =>$this->input->post('business_type'),
                  'stablished_year' =>$this->input->post('stablished_year'),

                  'main_product' =>$this->input->post('main_product'),
                  'factory_size' =>$this->input->post('factory_size'),
                  'no_of_office' => $this->input->post('no_of_office'),
                  'comapny_certificates' =>$this->input->post('comapny_certificates'),
                  'total_employee' =>$this->input->post('total_employee'),
                  'response_time' =>$this->input->post('response_time'),
                  'membership' =>$this->input->post('membership'),
                  'annual_revenue' =>$this->input->post('annual_revenue'),
                  'contract_services' =>$this->input->post('contract_services'),

                  'user_email' =>$this->input->post('user_email'),
                  'shipment_country' =>$this->input->post('shipment_country'),
                  'buyer_from2' =>$this->input->post('buyer_from2'),
                  'buyer_from3' =>$this->input->post('buyer_from3'),
                  'buyer_from4' =>$this->input->post('buyer_from4'),

                  
                  
              );
              if ($this->productmodel->insert_data($data)) {

                  $this->session->set_flashdata('success', 'Product added Successfully Submited');
                  redirect(base_url() . 'admin/product/add');
              } else {
  
                  $this->session->set_flashdata('error', 'Error In Submission');
                  redirect(base_url() . 'admin/product/add');
              }
          
      } else {
          $this->session->set_flashdata('error', 'Please Fill All The Fields');
          redirect(base_url() . 'admin/product/add');
      }
  }


 


 
}
