<?php
class Add_product_photo extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('admin/login');
    }
    $this->load->model('admin/productmodel');
  }
 
  public function index()
  { 
    $data['fetch_category']=$this->productmodel->fetch_product_image();
    $data['list']=$this->productmodel->fetch_product();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/product/add_product_photo',$data);
    $this->load->view('admin/template/footer');
  }

  public function add(){
    $this->load->model('admin/productmodel');
    $this->input->post('formSubmit');

    $img_data = array();
            // Count total files
            $countfiles = count($_FILES['multiple_image']['name']);
            
            // Looping all files
            for ($i = 0; $i < $countfiles; $i++) {
    
                if (!empty($_FILES['multiple_image']['name'][$i])) {
    
                    // Define new $_FILES array - $_FILES['file']
                    $_FILES['file']['name'] = $_FILES['multiple_image']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['multiple_image']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['multiple_image']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['multiple_image']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['multiple_image']['size'][$i];
    
                    // Set preference
                    $config['upload_path'] = APPPATH . '../upload/product';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = ''; // max_size in kb
                    $config['file_name'] = $_FILES['multiple_image']['name'][$i];
    
                    //Load upload library
                    $this->load->library('upload', $config);
    
                    // File upload
                    if ($this->upload->do_upload('file')) {
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
    
    
                        // Initialize array
                        $img_data[] = $filename;
                    }
                }
            }
    
            for($j=0; $j<$countfiles; $j++){
    
                $data = array(
                    'image' => $img_data[$j],
                    'product_id' => $this->input->post('id'),
                    
                );
                
                $fina = $this->productmodel->upload_product_image($data);
    
            }

            if ($fina == true) {
                $this->session->set_flashdata('success', 'Added successfully');
                redirect(base_url() . 'admin/product/add_product_photo');
            } else {
                $this->session->set_flashdata('error', 'Error in submission. Please Try again later!');
                redirect(base_url() . 'admin/product/add_product_photo');
            }

  }


  public function deletecontactdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->productmodel->delete_product_image($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'deleted successfully');
          redirect(base_url() . "admin/product/add_product_photo");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/product/add_product_photo");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/product/add_product_photo");
      }
    }
  }

}